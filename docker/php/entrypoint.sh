#!/usr/bin/env bash
set -euo pipefail

cd /var/www/html

update_env() {
  local key="$1"
  local value="$2"

  if grep -q "^${key}=" .env 2>/dev/null; then
    sed -i "s#^${key}=.*#${key}=${value}#" .env
  else
    printf '\n%s=%s\n' "$key" "$value" >> .env
  fi
}

ensure_env() {
  local key="$1"
  local value="$2"

  if ! grep -q "^${key}=" .env 2>/dev/null; then
    printf '\n%s=%s\n' "$key" "$value" >> .env
  fi
}

echo "🚀 Preparando o Laravel..."

if [ ! -f .env ]; then
  cp .env.example .env
fi

mkdir -p bootstrap/cache storage/framework/{cache,sessions,testing,views} database public/build
touch database/database.sqlite

update_env APP_URL "${APP_URL:-http://localhost:9031}"
ensure_env DB_CONNECTION "sqlite"
ensure_env DB_DATABASE "/var/www/html/database/database.sqlite"
ensure_env SESSION_DRIVER "file"
ensure_env CACHE_STORE "file"
ensure_env QUEUE_CONNECTION "sync"
ensure_env APP_MAINTENANCE_DRIVER "file"
ensure_env APP_MAINTENANCE_STORE "file"

chown -R www-data:www-data storage bootstrap/cache database >/dev/null 2>&1 || true
chmod -R ug+rwX storage bootstrap/cache database >/dev/null 2>&1 || true

if [ ! -f vendor/autoload.php ]; then
  echo "📦 Instalando dependências PHP (apenas na primeira vez)..."
  composer install --no-interaction --prefer-dist --optimize-autoloader
else
  echo "✅ Dependências PHP já estão prontas."
fi

if [ ! -d node_modules ] || [ -z "$(ls -A node_modules 2>/dev/null)" ]; then
  echo "📦 Instalando dependências Node (apenas na primeira vez)..."

  if [ -f package-lock.json ]; then
    npm ci --no-audit --no-fund
  else
    echo "ℹ️ package-lock.json não encontrado; gerando lockfile com npm install."
    npm install --no-audit --no-fund
  fi
else
  echo "✅ Dependências Node já estão prontas."
fi

if [ ! -f public/build/manifest.json ]; then
  echo "🎨 Gerando assets do Vite..."
  npm run build
fi

if ! grep -q '^APP_KEY=base64:' .env; then
  php artisan key:generate --force
fi

php artisan config:clear >/dev/null 2>&1 || true
php artisan cache:clear >/dev/null 2>&1 || true
php artisan migrate --force || true

exec php artisan serve --host=0.0.0.0 --port=8000

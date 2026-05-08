<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('components.layout', function ($view) {
                        
             $itensMenu = [
                            [
                                'descricao' => 'Portfolio',
                                'link' => 'site.componente.portfolio'
                            ],
                            [
                                'descricao' => 'Sobre',
                                'link' => 'site.componente.sobre'
                            ],
                            [
                                'descricao' => 'Contato',
                                'link' => 'site.componente.contato'
                            ]
             ];
            $view->with('itensMenu', $itensMenu);

        });

        View::composer('heranca.layout', function ($view) {
                        
             $itensMenu = [
                            [
                                'descricao' => 'Portfolio',
                                'link' => 'site.heranca.portfolio'
                            ],
                            [
                                'descricao' => 'Sobre',
                                'link' => 'site.heranca.sobre'
                            ],
                            [
                                'descricao' => 'Contato',
                                'link' => 'site.heranca.contato'
                            ]
             ];
            $view->with('itensMenu', $itensMenu);

        });
    }
}

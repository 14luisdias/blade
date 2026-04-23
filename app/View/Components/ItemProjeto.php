<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemProjeto extends Component
{
    /**
     * Create a new component instance.
     */
    public string $imagem;
    public int $indice;

    public function __construct(string $imagem, int $indice)
    {
        $this->imagem = $imagem;
        $this->indice = $indice;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-projeto');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SobreDescricao extends Component
{
    /**
     * Create a new component instance.
     */
    public string $margem;
    public function __construct(string $margem)
    {
        $this->margem = $margem;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
            <div class="col-lg-4 {{ $margem }}">
                <p class="lead"> 
                    {{ $slot }} 
                </p>
            </div>

           
blade;
    }
}

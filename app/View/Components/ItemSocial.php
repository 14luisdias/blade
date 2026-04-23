<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemSocial extends Component
{
    /**
     * Create a new component instance.
     */
    public string $link;
    public function __construct(string $link)
    {
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-social');
    }
}

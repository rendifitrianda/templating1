<?php

namespace App\View\Components\Component\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menu-item extends Component
{
   
    public function __construct()
    {
        //
    }

     public function render(): View|Closure|string
    {
        return view('components.component.layout.menu-item');
    }
}

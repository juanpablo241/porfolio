<?php

namespace App\View\Components;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolios extends Component
{
        public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Angular'],
                'title' => 'Animated Responsive Sidenav',
                'image' => url('/img/SideNav.png'),
                'github' => 'https://github.com/juanpablo241/animated-sidenav'
            ],
            [
                'category' => ['Laravel', 'PHP', 'AlpineJS' ],
                'title' => 'Animated Responsive Sidenav',
                'image' => url('/img/portfolio.png'),
                'github' => 'https://github.com/juanpablo241/porfolio-laravel'
            ],

        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfolios');
    }
}

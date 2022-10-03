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
                'github' => 'https://github.com/juanpablo241/animated-sidenav',
                'preview' => 'https://animated-sidenav-juanpablo241.vercel.app/dashboard'
            ],
            [
                'category' => ['React', 'Next' ],
                'title' => 'ECommerce React Aplication with Stripe',
                'image' => url('/img/Ecommerce.png'),
                'github' => 'https://github.com/juanpablo241/ecommerce_sanity-stripe',
                'preview' => 'https://ecommerce-sanity-stripe-juanpablo241.vercel.app/'
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

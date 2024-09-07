<?php

declare(strict_types = 1);

namespace App\Livewire\App;

use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class SidebarMenu extends Component
{
    public function render(): View
    {
        return view('livewire.app.sidebar-menu');
    }

    #[Computed]
    public function items(): array
    {
        return [
            (object) [
                'name'  => __('Dashboard'),
                'route' => 'dashboard',
                'icon'  => 'home',
            ],
            (object) [
                'name'  => __('Vendedores'),
                'route' => 'dashboard',
                'icon'  => 'building-office-2',
            ],
        ];
    }
}

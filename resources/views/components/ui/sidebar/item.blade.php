@props([
    'name',
    'icon',
    'route',
])

<li>
    <a
        href="{{ route($route) }}"
        @class([
            'bg-gray-50 text-indigo-600 group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold',
            'bg-indigo-100' => request()->routeIs($route),
        ])
    >
        <x-dynamic-component component="{{ 'ui.icons.' . $icon }}" class="h-6 w-6 shrink-0" />

        {{ $name }}
    </a>
</li>

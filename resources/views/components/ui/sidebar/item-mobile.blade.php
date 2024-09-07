@props([
    'name',
    'icon',
    'route',
])

<li>
    <a
        href="{{ route($route) }}"
        @class([
            'text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold',
            'bg-indigo-100' => request()->routeIs($route),
        ])
    >
        <x-dynamic-component component="{{ 'ui.icons.' . $icon }}" class="h-6 w-6 shrink-0" />

        {{ $name }}
    </a>
</li>

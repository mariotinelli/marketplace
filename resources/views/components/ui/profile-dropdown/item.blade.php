@props([
    'name',
    'route'

])

<a
    href="{{ route($route) }}"
    class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-100"
    :class="{ 'bg-gray-50': activeIndex === 0 }"
    role="menuitem"
    tabindex="-1"
    id="user-menu-item-0"
    @mouseenter="onMouseEnter($event)"
    @mousemove="onMouseMove($event, 0)"
    @mouseleave="onMouseLeave($event)"
    @click="dropdownOpen = false; focusButton()"
>
    {{ $name }}
</a>

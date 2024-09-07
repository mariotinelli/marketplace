<div  x-data="{ open: false }" @keydown.window.escape="open = false">
    <div
        x-show="open"
        class="relative z-50 lg:hidden"
        x-ref="dialog"
        aria-modal="true"
    >
        <div
            x-show="open"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-900/80"
            aria-hidden="true"
        ></div>

        <div class="fixed inset-0 flex">
            <div
                x-show="open"
                x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                class="relative mr-16 flex w-full max-w-xs flex-1"
                @click.away="open = false"
            >

                <div
                    x-show="open"
                    x-transition:enter="ease-in-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="absolute left-full top-0 flex w-16 justify-center pt-5"
                >
                    <button type="button" class="-m-2.5 p-2.5" @click="open = false">
                        <span class="sr-only">@lang('Fechar o menu')</span>
                        <x-ui.icons.building-office-2 class="h-6 w-6 text-white" />
                    </button>
                </div>

                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                    <x-ui.logo />
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    @foreach($this->items as $item)
                                        <x-ui.sidebar.item-mobile :name="$item->name" :icon="$item->icon" :route="$item->route" />
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
            <x-ui.logo />
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            @foreach($this->items as $item)
                                <x-ui.sidebar.item :name="$item->name" :icon="$item->icon" :route="$item->route" />
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

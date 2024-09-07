<div class="lg:pl-72">
    <div class="sticky top-0 z-40 lg:mx-auto lg:max-w-7xl lg:px-8">
        <div class="flex h-16 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-0 lg:shadow-none">
            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="sidebarOpen = true">
                <span class="sr-only">@lang('Abrir menu')</span>
                <x-ui.icons.bars class="h-6 w-6" />
            </button>

            <!-- Separator -->
            <x-ui.separator />

            <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">

                <x-ui.top-navbar.search />

                <div class="flex items-center gap-x-4 lg:gap-x-6">
                    <livewire:app.notifications />

                    <x-ui.separator class="!hidden !lg:block !lg:h-6 !lg:w-px !lg:bg-gray-200" />

                    <x-ui.profile-dropdown />
                </div>
            </div>
        </div>
    </div>

    {{ $slot }}
</div>

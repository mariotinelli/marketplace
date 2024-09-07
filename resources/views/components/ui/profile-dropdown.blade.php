<div
    x-data="{
        dropdownOpen: false,
        activeIndex: 0,
        activeDescendant: null,
        focusButton() { this.$refs.button.focus(); },
        focusMenu() { this.$refs['menu-items'].focus(); },
        onButtonClick() { this.dropdownOpen = !this.dropdownOpen; if (this.dropdownOpen) this.focusMenu() },
        onButtonEnter() { this.dropdownOpen = !this.dropdownOpen; if (this.dropdownOpen) this.focusMenu() },
        onArrowUp() { this.focusButton() },
        onArrowDown() { this.focusButton() },
        onClickAway(event) { if (!this.$refs['menu-items'].contains(event.target)) this.dropdownOpen = false },
        onMouseEnter(event) { this.activeIndex = parseInt(event.target.id.replace('user-menu-item-', '')) },
        onMouseMove(event, index) { this.activeIndex = index },
        onMouseLeave() { this.activeIndex = 0 }
    }"
    @keydown.escape.stop="dropdownOpen = false; focusButton()"
    @click.away="onClickAway($event)"
    class="relative"
>
    <button
        type="button"
        class="-m-1.5 flex items-center p-1.5"
        id="user-menu-button"
        x-ref="button"
        @click="onButtonClick()"
        @keyup.space.prevent="onButtonEnter()"
        @keydown.enter.prevent="onButtonEnter()"
        aria-expanded="false"
        aria-haspopup="true"
        x-bind:aria-expanded="open.toString()"
        @keydown.arrow-up.prevent="onArrowUp()"
        @keydown.arrow-down.prevent="onArrowDown()"
    >
        <span class="sr-only">@lang('Abrir menu do usuário')</span>
        <img class="h-8 w-8 rounded-full bg-gray-50" src="{{ user()->avatar }}" alt="Avatar do Usuário">
        <span class="hidden lg:flex lg:items-center">
            <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">{{ user()->name }}</span>
            <x-ui.icons.chevron-down class="ml-2 h-5 w-5 text-gray-400" />
        </span>
    </button>

    <div
        x-show="dropdownOpen"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 z-10 mt-2.5 w-56 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
        x-ref="menu-items"
        x-bind:aria-activedescendant="activeDescendant"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="user-menu-button" t
        abindex="-1"
        @keydown.arrow-up.prevent="onArrowUp()"
        @keydown.arrow-down.prevent="onArrowDown()"
        @keydown.tab="dropdownOpen = false"
        @keydown.enter.prevent="dropdownOpen = false; focusButton()"
        @keyup.space.prevent="dropdownOpen = false; focusButton()"
    >
        <x-ui.profile-dropdown.item name="Perfil" route="dashboard"/>
        <x-ui.profile-dropdown.item name="Sair" route="dashboard"/>
    </div>

</div>

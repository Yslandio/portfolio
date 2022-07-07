<div class="w-100">
    <div class="p-3 d-flex align-items-center justify-content-between">
        <img class="items-sidebar-start item-menu-start" src="{{ asset('assets/images/icons/menu.png') }}" alt="Menu">
        @if ($theme == 'dark')
            <img class="items-sidebar-end item-menu-end ms-3" src="{{ asset('assets/images/icons/dark.png') }}" alt="Tema escuro" wire:click="changeTheme('light')">
        @else
            <img class="items-sidebar-end item-menu-end ms-3" src="{{ asset('assets/images/icons/light.png') }}" alt="Tema claro" wire:click="changeTheme('dark')">
        @endif
    </div>
</div>
<div class="w-100">
    <div class="items-sidebar p-3 d-flex align-items-center" id="home" wire:click="selectMenu(1)">
        <img class="items-sidebar-start" src="{{ asset('assets/images/icons/home.png') }}" alt="Início">
        <p class="items-sidebar-end ps-3">Início</p>
    </div>
    <div class="items-sidebar p-3 d-flex align-items-center" id="curriculum" wire:click="selectMenu(2)">
        <img class="items-sidebar-start" src="{{ asset('assets/images/icons/curriculum.png') }}" alt="Currículo">
        <p class="items-sidebar-end ps-3">Currículo</p>
    </div>
    <div class="items-sidebar p-3 d-flex align-items-center" id="projects" wire:click="selectMenu(3)">
        <img class="items-sidebar-start" src="{{ asset('assets/images/icons/projects.png') }}" alt="Projetos">
        <p class="items-sidebar-end ps-3">Projetos</p>
    </div>
</div>
<div class="w-100">
    <a class="items-sidebar p-3 d-flex align-items-center" href="https://www.instagram.com/yslandio" target="_blank">
        <img class="items-sidebar-start" src="{{ asset('assets/images/icons/instagram.png') }}" alt="Instagram">
        <p class="items-sidebar-end ps-3">Instagram</p>
    </a>
    <a class="items-sidebar p-3 d-flex align-items-center" href="https://www.linkedin.com/yslandio" target="_blank">
        <img class="items-sidebar-start" src="{{ asset('assets/images/icons/linkedin.png') }}" alt="Linkedin">
        <p class="items-sidebar-end ps-3">Linkedin</p>
    </a>
    <a class="items-sidebar p-3 d-flex align-items-center" href="https://www.github.com/yslandio" target="_blank">
        <img class="items-sidebar-start" src="{{ asset('assets/images/icons/github.png') }}" alt="Github">
        <p class="items-sidebar-end ps-3">Github</p>
    </a>
</div>

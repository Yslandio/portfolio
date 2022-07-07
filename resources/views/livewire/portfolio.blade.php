<div class="h-100">
    @if ($theme == 'dark')
        <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/light.css') }}">
    @endif

    <nav class="position-fixed h-100 d-flex flex-wrap align-content-between" id="sidebar">
        @include('components.sidebar')
    </nav>

    <main class="h-100">
        <div class="container h-100">
            @foreach ($sidebar_options as $key => $sidebar_option)
                @if($key + 1 == $sidebar_select)
                    @include($sidebar_option) {{-- Exibe a página referente a seleção do menu lateral --}}
                @endif
            @endforeach
        </div>
    </main>
</div>

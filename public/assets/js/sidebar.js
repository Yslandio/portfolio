function showMenu() { // Maximiza o menu
    $(window).width() < 400
        ? $("#sidebar").attr('style', 'width: 100%')
        : $("#sidebar").attr('style', 'width: 350px');
    $(".items-sidebar-end").attr('style', 'display: block');
}

function closeMenu() { // Minimiza o menu
    $("#sidebar").attr('style', 'width: 65px');
    $(".items-sidebar-end").attr('style', 'display: none');
}

let btn_menu_show = false; // Controle de bloqueio de exibição do menu

$(".btn-menu-show").on('click', function() { // Bloqueia o menu exibindo ele
    if (btn_menu_show) {
        closeMenu();
        $(this).attr('style', 'background-color: transparent');
        btn_menu_show = false;
    } else {
        showMenu();
        $(this).attr('style', 'background-color: var(--bg-menu-selected-1)');
        btn_menu_show = true;
    }
});

$("#sidebar").on('mouseover', function() { // Exibe o menu com a seta posicionada em cima
    if (!btn_menu_show) { // Verifica se o menu não está bloqueado para ser exibido
        showMenu();
        if ($(window).width() < 400) { // Quando a tela está menor que 400px o evento mouseover servirá como o acionamento do botão de exibição do menu
            $(".btn-menu-show").attr('style', 'background-color: var(--bg-menu-selected-1)');
            btn_menu_show = true;
        }
    }
});

$("#sidebar").on('mouseout', function() { // Fecha o menu com a seta posiciona fora
    if (!btn_menu_show) { // Verifica se o menu não está bloqueado para ser exibido
        closeMenu();
    }
});

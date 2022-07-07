function removeSelected() {
    items.forEach((element) => {
        $(element).attr('style', 'background-color: none'); // Remove a seleção do menu lateral
    });
}

function selectMenuItem(item) {
    removeSelected();
    $(item).attr('style', 'background-color: orange'); // Destaca a opção selecionada no menu com uma cor
}

let sidebar_select = 1; // Controle da página de exibição com base na opção do menu selecionada que por padrão seleciona a primeira
let items = ["#home", "#curriculum", "#projects"]; // Opções do menu
selectMenuItem("#home"); // Carrega a página de início por padrão

items.forEach((item, key) => {
    $(item).on('click', function() { // Altera a exibição da página com base na opção selecionada no menu
        sidebar_select = parseInt(key) + parseInt(1);
        selectMenuItem(item);
    });
});

$(".show-project").on('click', function() { // Remove a seleção do menu lateral - exibição da página de detalhes de projeto
    removeSelected();
});

function showMenu() { // Exibe o menu
    $(window).width() < 400
        ? $("#sidebar").attr('style', 'width: 100%')
        : $("#sidebar").attr('style', 'width: 350px');
    $(".items-sidebar-end").attr('style', 'display: block');
}
function closeMenu() { // Minimiza o menu
    $("#sidebar").attr('style', 'width: 80px');
    $(".items-sidebar-end").attr('style', 'display: none');
}

let menu_show = false; // Controle de bloqueio de exibição do menu
$(".item-menu-start").on('click', function() { // Bloqueia o menu exibindo ele
    if (menu_show) {
        closeMenu();
        $(this).attr('style', 'background-color: none');
        menu_show = false;
    } else {
        showMenu();
        $(this).attr('style', 'background-color: orange');
        menu_show = true;
    }
});

$("#sidebar").on('mouseover', function() { // Exibe o menu com a seta posicionada em cima
    if (!menu_show) { // Verifica se o menu não está bloqueado para ser exibido
        showMenu();
        if ($(window).width() < 400) {
            $(".item-menu-start").attr('style', 'background-color: orange');
            menu_show = true;
        }
    }
});
$("#sidebar").on('mouseout', function() { // Fecha o menu com a seta posiciona fora
    if (!menu_show) { // Verifica se o menu não está bloqueado para ser exibido
        closeMenu();
    }
});

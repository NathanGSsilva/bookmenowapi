const botaoMenu = document.getElementById('botao-menu-mobile');
const menu = document.getElementById('menu');

botaoMenu.addEventListener('click', function () {
    menu.classList.toggle('menu-ativo');
});


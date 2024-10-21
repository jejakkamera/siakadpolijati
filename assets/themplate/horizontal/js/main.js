document.addEventListener('DOMContentLoaded', () => {
    var dropdown_child = [...document.querySelectorAll('.dropdown-child')];
    var sidebar_nav = [...document.querySelectorAll('.sidebar-nav')];

    dropdown_child ? dropdown_child.forEach((item, i) => {
        item.addEventListener('mousemove', () => {
            sidebar_nav[i].classList.add('active');
        })
    }) : null;

    dropdown_child ? dropdown_child.forEach((item, i) => {
        item.addEventListener('mouseleave', () => {
            sidebar_nav[i].classList.remove('active');
        })
    }) : null;

    sidebar_nav ? sidebar_nav.forEach((item, i) => {
        item.addEventListener('mousemove', () => {
            sidebar_nav[i].classList.add('active');
        })
    }) : null;

    var dropdown_child_2 = [...document.querySelectorAll('.dropdown-child-2')];
    var sub_menu_2 = [...document.querySelectorAll('.sub-menu-2')];
    var chevron_1 = [...document.querySelectorAll('.chevron-1')];

    dropdown_child_2 ? dropdown_child_2.forEach((item, i) => {
        item.addEventListener('click', () => {
            chevron_1[i].classList.toggle('active');
            sub_menu_2[i].classList.toggle('active');
        })
    }) : null;

    sidebar_nav ? sidebar_nav.forEach((item, i) => {
        item.addEventListener('mouseleave', () => {
            sidebar_nav[i].classList.remove('active');
        })
    }) : null;

    var hamburger_menu = document.querySelector('.hamburger-menu');
    var menu_vertikal = document.querySelector('.menu-vertikal');
    hamburger_menu ? hamburger_menu.addEventListener('click', () => {
        menu_vertikal.classList.toggle('active');
    }) : null;

    var dropdown_menu_vertikal = [...document.querySelectorAll('.dropdown-menu-vertikal')];
    var chevron_vertikal = [...document.querySelectorAll('.chevron-vertikal')];
    var submenu_dropdown_vertikal = [...document.querySelectorAll('.submenu-dropdown-vertikal')];
    var submenu_dropdown_vertikal_2 = [...document.querySelectorAll('.submenu-dropdown-vertikal-2')];
    var chevron_vertikal_2 = [...document.querySelectorAll('.chevron-vertikal-2')];
    dropdown_menu_vertikal ? dropdown_menu_vertikal.forEach((item, i) => {
        item.addEventListener('click', () => {
            chevron_vertikal[i].classList.toggle('active');
            submenu_dropdown_vertikal[i].classList.toggle('active');
            submenu_dropdown_vertikal_2.forEach(submenu => submenu.classList.remove('active'));
            chevron_vertikal_2.forEach(chevron => chevron.classList.remove('active'));
        })
    }) : null;

    var dropdown_child_vertikal_2 = [...document.querySelectorAll('.dropdown-child-vertikal-2')];
    
    dropdown_child_vertikal_2 ? dropdown_child_vertikal_2.forEach((item, i) => {
        item.addEventListener('click', () => {
            chevron_vertikal_2[i].classList.toggle('active');
            submenu_dropdown_vertikal_2[i].classList.toggle('active');
        })
    }) : null;

})
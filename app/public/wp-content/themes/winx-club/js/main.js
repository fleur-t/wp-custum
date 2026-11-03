// Menu openen en sluiten op mobiel
const menuKnop = document.querySelector('.menu-knop');
const menu = document.querySelector('.hoofdmenu');

if (menuKnop && menu) {
    menuKnop.addEventListener('click', function () {
        menu.classList.toggle('open');
    });
}

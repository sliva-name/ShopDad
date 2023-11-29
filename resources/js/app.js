import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$('#mobileMenuOpen').on('click', () => {
    document.getElementById('closedMenu').classList.toggle('hidden')
    document.getElementById('openMenu').classList.toggle('hidden')
    document.getElementById('mobile-menu').classList.toggle('hidden')
})

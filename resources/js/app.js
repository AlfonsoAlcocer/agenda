import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const navbarBtn = document.getElementById('navbarBtn');
    const sidebar = document.getElementById('sidebar');

    navbarBtn.addEventListener('click', function () {
        sidebar.classList.toggle('active');
    });
});

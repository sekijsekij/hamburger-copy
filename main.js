const btn = document.querySelector('.l-header__menu-btn');
const open = document.getElementById('drawer');
const close = document.querySelector('.c-menu__icon');
const filter = document.getElementById('filter');

btn.addEventListener('click', () => {
  open.classList.add('is_active');
  filter.classList.add('is_active');
});

close.addEventListener('click', () => {
  open.classList.remove('is_active');
  filter.classList.remove('is_active');
});
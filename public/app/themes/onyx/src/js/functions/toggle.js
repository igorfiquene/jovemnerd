export default function() {
	const toggle = document.querySelector('.header__toggle');
	const root = document.querySelector('body');

	const subMenu = document.querySelectorAll('.menu-item-has-children');

	toggle.addEventListener('click', () => {
		root.classList.toggle('menu-active');
	});

	subMenu.forEach((item) => {
		item.addEventListener('click', (e) => {
			e.preventDefault();

			item.classList.toggle('active');
		});
	});
}

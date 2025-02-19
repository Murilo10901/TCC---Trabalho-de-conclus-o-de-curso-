const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = 'black';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

document.querySelector('.fade-link').addEventListener('click', function(event) {
	event.preventDefault();
	document.querySelector('.fade-link').classList.add('fade-out');
	setTimeout(function() {
	  window.location.href = "file:///C:/Users/Usuario/Desktop/tcccccc/mobile.html";
	}, 500); // Tempo de espera antes do redirecionamento (500ms = 0,5 segundos)
  });
  
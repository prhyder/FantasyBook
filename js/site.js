window.onload = function() {

	// ====== Add click event handlers to bootstrap nav ======
	const navLinks = document.querySelectorAll('.nav-item');
	const menuToggle = document.getElementById('navbarResponsive');
	const bsCollapse = window.bootstrap.Collapse.getOrCreateInstance(menuToggle, {toggle: false});
	navLinks.forEach((l) => {
		l.addEventListener('click', () => { bsCollapse.toggle() });
	});

	const reviewsCarouselElement = document.getElementById('reviewsCarousel');
	// Autoplay carousel
	// const carousel = new bootstrap.Carousel(reviewsCarouselElement, {
	// 	interval: 2000,
	// 	touch: false
	// });
}


// ====== Pause / Unpause Video ======
let vid = document.getElementById("background-video"); 
let pause = document.getElementById("pause"); 
let play = document.getElementById("play"); 
let isPlaying = true;

function pauseVidToggle() { 
	if (vid){
		if (isPlaying){
			vid.pause();
			pause.classList.add("hide");
			play.classList.remove("hide");
			
		}
		else{
			vid.play();
			pause.classList.remove("hide");
			play.classList.add("hide");
		}
	}
  isPlaying = !isPlaying;
} 
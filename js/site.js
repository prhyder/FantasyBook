// ====== Scroll To ======
function scrollTo(elementId){
	let element = document.getElementById(elementId); 
	const y = element.getBoundingClientRect().top + window.scrollY;
	window.scroll({
		top: y,
		behavior: 'smooth'
	});
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
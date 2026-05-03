let currentSlide = 0;
const slider = document.querySelector('.slides-wrapper');
const slides = document.querySelectorAll('.head4travelplan');

document.getElementById('next').addEventListener('click', () => {
  if (currentSlide < slides.length - 1) {
    currentSlide++;
  } else {
    currentSlide = 0; // loop to first
  }
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
});

document.getElementById('prev').addEventListener('click', () => {
  if (currentSlide > 0) {
    currentSlide--;
  } else {
    currentSlide = slides.length - 1; // go to last
  }
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
});

document.querySelector(".bookTourBtn").addEventListener("click", function() {
  document.querySelector(".formrequirment").scrollIntoView({ behavior: "smooth" });
});
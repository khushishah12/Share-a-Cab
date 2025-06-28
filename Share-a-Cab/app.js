let index = 0;

function moveSlide(step) {
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;

  // Move to the next or previous slide
  index += step;

  // Loop the slider, going back to the first slide if we reach the last one, and vice versa
  if (index < 0) {
    index = totalSlides - 3; // Keep showing 3 images at a time when looping back
  }
  if (index >= totalSlides) {
    index = 0;
  }

  // Update the position of the slides
  const slider = document.querySelector('.slider');
  const offset = -index * 33.33; // Move left by 33.33% of the slider width to show the next 3 images
  slider.style.transform = `translateX(${offset}%)`;
}

// Auto-slide every 3 seconds
setInterval(() => {
  moveSlide(1);
}, 3000);

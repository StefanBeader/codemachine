export default function animate() {
  const animationElements = document.getElementsByClassName("animation");
  const elements = [...animationElements];
  elements.forEach((el, key) => {
    if (isElementInViewport(el)) {
      el.classList.add("animate");
    }
  });
}

function isElementInViewport (el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
    rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
  );
}
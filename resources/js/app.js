import Animate from './helpers/Animation';
import './outsourcing';
import './contact-form'

Animate();
window.addEventListener('scroll', Animate, false);

document.querySelector('.scroll-to-top').addEventListener('click', goToTop, false);

function goToTop() {
  const c = document.documentElement.scrollTop || document.body.scrollTop;
  if (c > 0) {
    window.requestAnimationFrame(goToTop);
    window.scrollTo(0, c - c / 12);
  }
}

const links = [...document.getElementsByClassName('go-to')];

links.forEach(link => link.addEventListener('click', scrollToElement, false));

function scrollToElement(event) {
  event.preventDefault();
  document.getElementById(event.target.dataset.section)
    .scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
}

const mobileMenuIcon = document.getElementsByClassName("cm-hamburger")[0];
const mobileNavWrapper = document.getElementById('mobile-nav');
const svgDisplay = document.getElementById('display');
const svgClose = document.getElementById('hide');

function openMobileMenu() {
  mobileNavWrapper.classList.add('show');
  svgDisplay.classList.remove('show');
  svgClose.classList.add('show');
}

function closeMobileMenu() {
  mobileNavWrapper.classList.remove('show');
  svgClose.classList.remove('show');
  svgDisplay.classList.add('show');
}
mobileMenuIcon.addEventListener('click', () => {
  if (mobileNavWrapper.classList.contains('show')) {
    closeMobileMenu();
  } else {
    openMobileMenu();
  }
});

mobileNavWrapper.addEventListener('click', () => {
  if (mobileNavWrapper.classList.contains('show')) {
    closeMobileMenu();
  }
});
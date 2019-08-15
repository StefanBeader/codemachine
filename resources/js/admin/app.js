const sideMenu = document.getElementsByTagName('aside')[0];
const header = document.getElementsByTagName('header')[0];
const main = document.getElementsByTagName('main')[0];
const secondMenu = document.getElementsByClassName('second-menu')[0];

sideMenu.addEventListener('mouseover', () => {
 secondMenu.classList.add('show');
}, true);

header.addEventListener('mouseover', () => {
  secondMenu.classList.remove('show');
});

main.addEventListener('mouseover', () => {
  secondMenu.classList.remove('show');
});
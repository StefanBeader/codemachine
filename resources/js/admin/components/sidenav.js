const sideMenu = document.getElementsByTagName('aside')[0];
const header = document.getElementsByTagName('header')[0];
const main = document.getElementsByTagName('main')[0];
const secondMenu = document.getElementsByClassName('second-menu')[0];
const links = [...document.getElementsByClassName('link')];
const secondLevel = document.getElementsByClassName('second-level')[0];

links.forEach((link) => {
  link.addEventListener('click', async () => {
    await renderLinksForSecondLevel(link.dataset.id);
    showSecondMenu();
  }, true);

  link.addEventListener('click', (e) => {
    e.preventDefault();
  }, true);
});

header.addEventListener('mouseover', () => {
  secondMenu.classList.remove('show');
});

main.addEventListener('mouseover', () => {
  secondMenu.classList.remove('show');
});

function showSecondMenu() {
  secondMenu.classList.add('show');
}

function renderLinksForSecondLevel(id) {

  const link = $(`.link[data-id=${id}]`)[0];
  const data = link.dataset.sublinks;
  clearMenu();
  addLinks(JSON.parse(data));
}

function clearMenu() {
  $(secondLevel).empty();
}

function addLinks(links) {
  links.forEach(link => {
    $(secondLevel).append(`
  <li>
      <a href="${link.url}">
          <span class="icon">
            <i class="${link.icon}"></i>
          </span>
          <span class="title">${link.title}</span>
      </a>
  </li>
`);
  });
}
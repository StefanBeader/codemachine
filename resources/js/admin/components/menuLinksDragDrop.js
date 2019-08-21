const menuLinksPool = document.getElementsByClassName('menuLinksPool')[0];
$('.linksPool .link').on('dragstart', drag);
$(menuLinksPool).on('dragover', allowDrop);
$(menuLinksPool).on('drop', drop);

let menuLinks = [];

function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.originalEvent.dataTransfer.setData("link-id", ev.target.id);
  removeFromMenuLinks(ev.target.dataset.id)
}

function drop(ev) {
  ev.preventDefault();
  let linkId = ev.originalEvent.dataTransfer.getData("link-id");
  let el = document.getElementById(linkId);
  let parentArray = [...ev.target.children];
  let order = parentArray.indexOf(el) + 1;
  console.log(order)

  if (ev.target === menuLinksPool) {
    menuLinks.push({
      parent_id: null,
      link_id: el.dataset.id,
      order: order
    })
  } else {
    menuLinks.push({
      parent_id: ev.target.dataset.id,
      link_id: el.dataset.id,
      order: order
    })
  }
  ev.target.appendChild(el);
  console.log(menuLinks)
}

function removeFromMenuLinks(id) {
  menuLinks = menuLinks.filter((link) => {
    return link.link_id !== id;
  })
}
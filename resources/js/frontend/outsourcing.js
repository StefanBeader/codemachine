const buttons = [...document.querySelectorAll('.Accordion button')];

buttons.forEach((button) => button.addEventListener('click', openText, false));

function openText(e) {
  closeOthers();
  let panel = e.target.nextElementSibling;
  if (panel.style.maxHeight){
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

function closeOthers() {
  let items = document.querySelectorAll('.Accordion p');

  for (let item of items) {
    item.style.maxHeight = null;
  }
}
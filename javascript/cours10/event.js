const title = document.querySelector("#title");
const btnChangeTitle = document.querySelector("#btnChangeTitle");
const lampe = document.querySelector("#lampe");
const btnOn = document.querySelector("#btnOn");
const btnOff = document.querySelector("#btnOff");
const statusLamp = document.querySelector("#status");

//modification du style d'un element

function loadStyleforTitle() {
  title.style.color = "#ffffffff";
  title.style.padding = "20px";
  title.style.textAlign = "center";
  title.style.backgroundColor = "#120241ff";
}

function turnOff() {
  lampe.src = "pic_bulboff.gif";
  statusLamp.setAttribute("off", "");
  verifStatus();
}

function turnOn() {
  lampe.src = "pic_bulbon.gif";
  statusLamp.removeAttribute("off");
  verifStatus();
}

function verifStatus() {
  if (statusLamp.hasAttribute("off")) {
    statusLamp.innerHTML = "La Lampe est eteinte";
    return;
  }
  statusLamp.innerHTML = "La Lampe est allumee";
}

//! ancienne methode

// btnChangeTitle.onclick = () => {
//   alert("Vous voulez changer de titre");
// };

//! Nouvelle methode
btnChangeTitle.addEventListener("click", () => {
  let newTitle = prompt("Donner le nouveau titre");
  title.innerText = newTitle;
});

document.addEventListener("DOMContentLoaded", (e) => {
  loadStyleforTitle();
  turnOff();
});

btnOn.addEventListener("click", () => {
  turnOn();
  btnOn.setAttribute("disabled", "");
  if (btnOff.hasAttribute("disabled")) {
    btnOff.removeAttribute("disabled");
  }
});
btnOff.addEventListener("click", () => {
  turnOff();
  btnOff.setAttribute("disabled", "");
  if (btnOn.hasAttribute("disabled")) {
    btnOn.removeAttribute("disabled");
  }
});

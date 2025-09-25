// const maConstante = "Coucou";
// alert("Bonjoour cher codeur ! " + maconstante);

// var nom = prompt("Veuillez saisir votre nom : ");
// let prenom = prompt("Veuillez saisir votre prenom : ");

// alert("Votre nom complet est : " + prenom + " " + nom);

// let choix = confirm("Etes vous majeur?");

// if (choix) {
//   console.log(`${prenom} ${nom} est majeur`);
// } else {
//   console.log(`${prenom} ${nom} est mineur`);
// }

//! variable nomDeLaPersonne ou nom_de_la_personne

const titre = document.getElementById("titre");
console.log(titre);

//const mesPara = document.getElementsByClassName("para");
const mesPara = document.querySelectorAll(".para");
console.log(mesPara);

const paragraphes = document.getElementsByTagName("p");
console.log(paragraphes);

const titleH1 = document.getElementsByTagName("h1");
console.log(titleH1);

//! afficher le contenu d'un element
alert(titre.textContent);

//! Afficher le contenu de mes paragraphe .para avec foreach
// tranforme le htmlCollection en tableau
// Array.from(mesPara).forEach((element) => {
//   console.log(element.textContent);
// });
mesPara.forEach((element) => {
  console.log(element.textContent);
});

//! Afficher le contenu de mes paragraphe .para avec for

// for (let i = 0; i < mesPara.length; i++) {
//   console.log(mesPara[i].textContent);
// }

let title = prompt("Veuillez donner le titre du cours");

//! Ecriture de simple texte dans l'element
// titre.innerText = title;
//! Ecriture de html dans l'element
titre.innerHTML = title;

//! Selection direct du DOM
const canva = document.querySelector("#canva");

do {
  var nombre = Number(prompt("Donnez un nombre positif"));
} while (nombre <= 0 || isNaN(nombre));
canva.innerHTML = ``;
for (let index = 1; index <= nombre; index++) {
  canva.innerHTML += `<li>${index}</li> `;
}

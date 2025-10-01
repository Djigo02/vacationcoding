// Récupération des éléments du DOM via leurs identifiants
const prenom = document.querySelector("#prenom");
const nom = document.querySelector("#nom");
const contrat = document.querySelector("#contrat");
const nbEnfant = document.querySelector("#nbEnfant");
const tarif = document.querySelector("#tarif");

// Zones d’affichage des erreurs
const errorContrat = document.querySelector("#errorContrat");
const errorEnfant = document.querySelector("#errorEnfant");
const errorPrenom = document.querySelector("#errorPrenom");
const errornom = document.querySelector("#errorNom"); // ⚠️ variable nommée "errornom" mais liée à "errorNom" (attention cohérence)

// Bouton et tableau
const btnSubmit = document.querySelector("#btnSubmit");
const tbody = document.querySelector("#tbody");

// Tableau pour stocker les employés saisis
var tabEmp = [];

// Fonction d’initialisation : remise à zéro du formulaire et des messages d’erreur
function init() {
  errorContrat.innerHTML = "";
  errorEnfant.innerHTML = "";
  errorPrenom.innerHTML = "";
  errornom.innerHTML = "";
  prenom.value = "";
  nom.value = "";
  nbEnfant.value = "";
  contrat.value = "";
  tarif.value = "";
  nbEnfant.min = 0;
  nbEnfant.setAttribute("max", "10");
  tarif.setAttribute("readonly", ""); // le champ tarif n’est pas modifiable directement
}

// Quand le document est chargé, on initialise et on affiche le tableau
document.addEventListener("DOMContentLoaded", () => {
  init();
  loadTable();
});

// Gestion du clic sur le bouton de soumission
btnSubmit.addEventListener("click", (e) => {
  e.preventDefault(); // empêche le rechargement de la page
  verifPrenom();
  verifNom();
  verifEnfant();

  // Si tous les champs sont remplis correctement
  if (
    prenom.value.trim() != "" &&
    nom.value.trim() != "" &&
    contrat.value != "" &&
    nbEnfant.value != "" &&
    tarif.value != ""
  ) {
    // Création d’un objet employé
    let employe = {
      prenom: prenom.value.trim(),
      nom: nom.value.trim(),
      contrat: contrat.value.trim(),
      nbEnfant: nbEnfant.value.trim(),
      tarif: tarif.value.trim(),
    };

    // Ajout de l’employé dans le tableau
    tabEmp.push(employe);

    // Réinitialisation du formulaire et rechargement du tableau
    init();
    loadTable();
  }
});

// Vérifie que le prénom est valide (non vide et >= 3 caractères)
function verifPrenom() {
  if (prenom.value.trim() == "" || prenom.value.trim().length < 3) {
    prenom.value = "";
    errorPrenom.innerHTML =
      "Le prenom ne doit pas etre vide et doit contenir au moins 3 caracteres";
  } else {
    errorPrenom.innerHTML = "";
  }
}

// Vérifie que le nom est valide (non vide et >= 2 caractères)
function verifNom() {
  if (nom.value.trim() == "" || nom.value.trim().length < 2) {
    nom.value = "";
    errorNom.innerHTML =
      "Le Nom ne doit pas etre vide et doit contenir au moins 2 caracteres";
  } else {
    errorNom.innerHTML = "";
  }
}

// Vérifie que le nombre d’enfants est compris entre 0 et 10
// et calcule le tarif si toutes les conditions sont réunies
function verifEnfant() {
  if (nbEnfant.value == "" || nbEnfant.value < 0 || nbEnfant.value > 10) {
    errorEnfant.innerHTML = "Le nombre d'enfant est compris entre 0 et 10";
    tarif.value = "";
  } else {
    errorEnfant.innerHTML = "";
    if (isValidForTarif()) {
      // Tarif de base + 1% du tarif par enfant
      tarif.value = tarifJour() + (nbEnfant.value * tarifJour()) / 100;
    }
  }
}

// Déclenche la vérification lors de la perte de focus (blur)
prenom.addEventListener("blur", () => {
  verifPrenom();
});
nom.addEventListener("blur", () => {
  verifNom();
});
nbEnfant.addEventListener("blur", () => {
  verifEnfant();
});

// Vérification du type de contrat
// Si contrat choisi, calcul du tarif sinon message d’erreur
contrat.addEventListener("change", () => {
  if (contrat.value == "") {
    errorContrat.innerHTML = "Veuillez choisir le type de contrat";
    tarif.value = "";
  } else {
    errorContrat.innerHTML = "";
    if (isValidForTarif()) {
      tarif.value = tarifJour() + (nbEnfant.value * tarifJour()) / 100;
    }
  }
});

// Fonction qui retourne le tarif de base selon le contrat
function tarifJour() {
  switch (contrat.value) {
    case "journalier":
      return 5000;
    case "mensuel":
      return 7000;
    case "honoraire":
      return 10000;
  }
}

// Vérifie si le calcul du tarif est possible (contrat + nbEnfant renseignés)
function isValidForTarif() {
  return contrat.value != "" && nbEnfant.value != "" ? true : false;
}

// Affiche les employés du tableau dans le HTML
function loadTable() {
  tbody.innerHTML = "";
  if (tabEmp.length == 0) {
    // Si aucun employé
    tbody.innerHTML += `
        <tr>
            <th class='text-center' colspan='6'>Aucun employer</th>
          </tr>
        `;
  } else {
    // Parcours du tableau et affichage de chaque employé
    tabEmp.forEach((emp, index) => {
      tbody.innerHTML += `
        <tr>
            <th scope="row">${index + 1}</th>
            <td>${emp.prenom}</td>
            <td>${emp.nom}</td>
            <td>${emp.nbEnfant}</td>
            <td>${emp.contrat}</td>
            <td>${emp.tarif}</td>
          </tr>
        `;
    });
  }
}

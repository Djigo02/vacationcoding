var tab = [1, 5, 6, "Banane", "Raisin", true];

//! acceder a une cellule
console.log(tab[0]);

//! afficher tous les elements du tableau avec for
console.log("Affichage for");

for (let index = 0; index < tab.length; index++) {
  console.log(tab[index]);
}
//! afficher tous les elements du tableau avec forEach
console.log("Affichage forEach");
tab.forEach(function (value) {
  console.log(value);
});

//? Ajouter a la derniere cellule
tab.push("Citron");
tab.push("Diop");
console.log(tab);
//! Supprimer le dernier element
let last = tab.pop();
console.log(tab);
console.log("element supprimer : " + last);

//!Supprimer le premier

let first = tab.shift();
console.log(tab);
console.log("element supprimer : " + first);

//! Ajouter a la premiere cellule

tab.unshift(1, 5, "Sucre");
console.log(tab);

//! Supprimer a partir d'un position n element
//?      positin, n element
tab.splice(0, 5);
//? position, n element, ...tab
tab.splice(0, 5, "Bonbonne", "BonBoniere");
console.log(tab);

let tab2 = tab;
console.log("Tab 2");

console.log(tab2);

tab[0] = "Fruits";
console.log(tab);
console.log(tab2);

//? map, filter, find ... recherche a faire

//TODO Objet

let personne = {
  nom: "DIENG",
  prenom: "Saliou",
  profession: "DSI",
  experiences: [
    {
      nomEntreprise: "Sonatel",
      annee: 2,
    },
    {
      nomEntreprise: "Atos",
      annee: 3,
    },
  ],
};

//! afficher un attribut simple
console.log(personne.nom);
//! afficher un sous attribut
console.log(personne.experiences[1].nomEntreprise);

//! Affichage DOM du tableau

const tbodyDG = document.querySelector("#tbodyDG");

let DG_JGOHUB = [
  {
    nom: "DIENG",
    prenom: "Saliou",
    profession: "DSI",
    experiences: [
      {
        nomEntreprise: "Sonatel",
        annee: 2,
      },
      {
        nomEntreprise: "Atos",
        annee: 3,
      },
      {
        nomEntreprise: "Sahel Ing",
        annee: 3,
      },
      {
        nomEntreprise: "BET Plus",
        annee: 3,
      },
    ],
  },
  {
    nom: "DJIGO",
    prenom: "Mouhamad",
    profession: "PDG",
    experiences: [
      {
        nomEntreprise: "SENUM",
        annee: 6,
      },
      {
        nomEntreprise: "Bank Atlas",
        annee: 3,
      },
    ],
  },
  {
    nom: "Sylla",
    prenom: "Aicha",
    profession: "DAF",
    experiences: [
      {
        nomEntreprise: "SENUM",
        annee: 2,
      },
      {
        nomEntreprise: "Bank Atlas",
        annee: 3,
      },
      {
        nomEntreprise: "BOA",
        annee: 3,
      },
    ],
  },
];

// tbodyDG.innerHTML = "";
// let i = 1;
// DG_JGOHUB.forEach(function (element, index) {
//   tbodyDG.innerHTML += `
//         <tr>
//           <th scope="row">${index + 1}</th>
//           <td>${element.prenom}</td>
//           <td>${element.nom}</td>
//           <td>${element.experiences.length}</td>
//         </tr>
//     `;
//   i++;
// });

let load = () => {
  tbodyDG.innerHTML = "";
  DG_JGOHUB.forEach(function (element, index) {
    tbodyDG.innerHTML += `
        <tr>
          <th scope="row">${index + 1}</th>
          <td>${element.prenom}</td>
          <td>${element.nom}</td>
          <td>${element.experiences.length}</td>
        </tr>
    `;
  });
};

//! LES FONCTIONS CLASSIQUE
//? fonction nommees

function direBonjour(nom) {
  alert(`Bonjour ${nom}`);
}

// direBonjour("Aita");

function demanderNom() {
  return prompt("Veuillez saisir votre nom : ");
}

//let nomComplet = demanderNom();

//alert(nomComplet);

//? anonyme

let carre = function (n) {
  alert(n * n);
};

//carre(8);

let min = function (n1, n2) {
  return n1 < n2 ? n1 : n2;
};

// alert(`n1 = 5, n2 = -4 ; min = ${min(5, -4)}`);

//? flechee

let puissance2 = (n) => {
  alert(n * n);
};

// puissance2(9);

let max = (n1, n2) => (n1 > n2 ? n1 : n2);

let max1 = (n1, n2) => {
  return n1 > n2 ? n1 : n2;
};

//alert(`n1 = 5, n2 = -4 ; max = ${max(5, -4)}`);

// chargement du tableau de DG

load();

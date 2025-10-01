var acteur = {
  prenom: "Omar",
  nom: "SY",
  films: ["Les tirailleurs senegalais", "Lupin"],
  fullName() {
    return `L'acteur s'appelle ${this.prenom} ${this.nom} `;
  },
  getFilms() {
    this.films.forEach((film) => {
      console.log(film);
    });
  },
};

//console.log(acteur.fullName("Ousmane", "Fall"));
//console.log(acteur.getFilms());

// for in et for of

var tab = [
  {
    prenom: "Omar",
    nom: "SY",
    films: ["Les tirailleurs senegalais", "Lupin"],
  },
  {
    prenom: "Will",
    nom: "SMITH",
    films: ["Men in black"],
  },
];

for (const cle in tab) {
  console.log(tab[cle].nom);
}

for (let element of tab) {
  console.log(element.prenom);
}

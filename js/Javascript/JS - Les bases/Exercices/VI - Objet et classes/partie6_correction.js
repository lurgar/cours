/*
* EXERCICE 1: les objets
*
* Complétez le programme pour ajouter la définition de l'objet chien.
* TODO : ajoutez ici la définition de l'objet chien
*/

console.log(chien.nom + " est un " + chien.race + " mesurant " + chien.taille + " cm");
console.log("Tiens, un chat ! " + chien.nom + " aboie : " + chien.aboyer());

// Le resultat doit être:
// Medor est un berger allemand mesuranr 75 cm
// Tiens, un chat ! Medor aboie : Wouaf ! Wouaf !


// ==== SOLUTION ====

let chien = {
  nom: "Crockdur",
  race: "mâtin de Naples",
  taille: 75,

  // Renvoie l'aboiement du chien
  aboyer: function () {
    return "Grrr ! Grrr !";
  }
};

console.log(chien.nom + " est un " + chien.race + " mesurant " + chien.taille + " cm");
console.log("Tiens, un chat ! " + chien.nom + " aboie : " + chien.aboyer());




/* 
* EXERCICE 2: les objets
* Complétez le programme pour ajouter à l'objet aurora défini 
* une propriété nommée xp représentant son expérience. 
* Sa valeur initiale est de 0.
* L'expérience doit apparaître dans la description du personnage.
*/

// Expérience du personnage

let aurora = {
  nom: "Aurora",
  sante: 150,
  force: 25,
  xp: 0,

  // Renvoie la description du personnage
  decrire() {
    return this.nom + " a " + this.sante + " points de vie, " + this.force + " en force et " + this.xp + " points d'expérience";
  }
};

// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience"
console.log(aurora.decrire());

console.log("Aurora apprend une nouvelle compétence");
aurora.xp += 15;

// "Aurora a 150 points de vie, 25 en force et 15 points d'expérience"
console.log(aurora.decrire());




/* 
* EXERCICE 3: les objets
* Complétez le programme en ajoutant la définition de la classe Chien 
* afin d'obtenir le résultat d'exécution désiré.
* Les chiens mesurant plus de 50 cm aboient en faisant "Grrr ! Grrr !", 
* les autres font "Wouaf ! Wouaf !"
*/

class Chien {
  constructor(nom, race, taille) {
    this.nom = nom;
    this.race = race;
    this.taille = taille;
  }
  // Renvoie l'aboiement du chien
  aboyer() {
    if (this.taille > 50) {
      return "Grrr ! Grrr !";
    }
    else {
      return "Wouaf ! Wouaf !";
    }
  }
  // Renvoie la description du chien
  decrire() {
    return this.nom + " est un " + this.race + " mesurant " + this.taille + " cm";
  }
}

let crockdur = new Chien("Crockdur", "mâtin de Naples", 75);
// "Crockdur est un mâtin de Naples mesurant 75 cm"
console.log(crockdur.decrire());
// "Tiens, un chat ! Crockdur aboie : Grrr ! Grrr !"
console.log("Tiens, un chat ! " + crockdur.nom + " aboie : " + crockdur.aboyer());

let milou = new Chien("Milou", "fox-terrier", 26);
// "Milou est un fox-terrier mesurant 26 cm"
console.log(milou.decrire());
// "Tiens, un chat ! Milou aboie : Wouaf ! Wouaf !"
console.log("Tiens, un chat ! " + milou.nom + " aboie : " + milou.aboyer());




/* 
* EXERCICE 4: les objets
* Complétez ce programme pour y ajouter la gestion de l'inventaire des personnages. 
* Voici les améliorations à intégrer :
* L'inventaire d'un personnage se compose d'un nombre de pièces d'or et d'un nombre de clés.
* Tous les personnages possèdent initialement 10 pièces d'or et une clé.
* L'inventaire doit être affiché dans la description d'un joueur.
* Lorsqu'un personnage tue un adversaire, il récupère dans son propre inventaire le nombre 
* de pièces d'or et de clés de cet adversaire.
*/

class Personnage {
  constructor(nom, sante, force) {
    this.nom = nom;
    this.sante = sante;
    this.force = force;
    this.xp = 0; // Toujours 0 au début
    // l'inventaire est géré sous la forme d'un objet ayant deux propriétés
    this.inventaire = {
      or: 10,
      cles: 1
    };
  }
  // Attaque une cible
  attaquer(cible) {
    if (this.sante > 0) {
      let degats = this.force;
      console.log(this.nom + " attaque " + cible.nom + " et lui inflige " + degats + " points de dégâts");
      cible.sante -= degats;
      if (cible.sante > 0) {
        console.log(cible.nom + " a encore " + cible.sante + " points de vie");
      } else {
        cible.sante = 0;
        let bonusXP = 10;
        console.log(
          this.nom + " a tué " + cible.nom + " et gagne " +
          bonusXP + " points d'expérience, " + cible.inventaire.or +
          "pièces d'or et " + cible.inventaire.cles + "clé(s)"
        );
        this.xp += bonusXP;
        // L'inventaire de la victime est transféré à son vainqueur
        this.inventaire.or += cible.inventaire.or;
        this.inventaire.cles += cible.inventaire.cles;
      }
    } else {
      console.log(this.nom + "n'a plus de points de vie et ne pas pas attaquer");
    }
  }
  // Renvoie la description du personnage
  decrire() {
    return this.nom + " a " + this.sante + " points de vie, " +
      this.force + " en force et " + this.xp + " points d'expérience, " +
      this.inventaire.or + " pièces d'or et " + this.inventaire.cles + " clé(s)";
  }
}

// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience, 10 pièces d'or et 1 clé(s)"
let aurora = new Personnage("Aurora", 150, 25);

console.log(aurora.decrire());

let monstre = new Personnage("ZogZog", 20, 10);
monstre.attaquer(aurora);
aurora.attaquer(monstre); // Le monstre est tué

// "Aurora a 140 points de vie, 25 en force et 10 points d'expérience, 20 pièces d'or et 2 clé(s)"
console.log(aurora.decrire());




/*
* EXERCICE 5: les objets
*
* Ecrivez un programme qui crée un objet compte ayant les propriétés suivantes :
*
* Une propriété titulaire valant "Alex".
*
* Une propriété solde valant initialement 0.
* 
* Une méthode crediter() ajoutant le montant passé en paramètre au solde du compte.
* 
* Une méthode debiter() retirant le montant passé en paramètre du solde du compte.
* 
* Une méthode decrire() renvoyant la description du compte.
* 
* Utilisez cet objet pour afficher sa description, le créditer puis le débiter de 
* montants saisis successivement par l'utilisateur, 
* puis afficher de nouveau sa description.
*/

// Voici le résultat à obtenir pour un crédit de 200 puis un débit de 150.
// Titulaire: Alex, solde : 0 euros
// Titulaire : Alex, solde : 50 euros


let compte = {
  titulaire: "Alex",
  solde: 0,

  // Crédite le compte d'un certain montant
  crediter: function (montant) {
    this.solde = this.solde + montant;
  },
  // Débite le compte d'un certain montant
  debiter: function (montant) {
    this.solde = this.solde - montant;
  },
  // Renvoie la description du compte
  decrire: function () {
    let description = "Titulaire : " + this.titulaire +
      ", solde : " + this.solde + " euros";
    return description;
  }
};

console.log(compte.decrire());
let credit = Number(prompt("Entrez le montant à créditer :"));
compte.crediter(credit);
let debit = Number(prompt("Entrez le montant à débiter :"));
compte.debiter(debit);
console.log(compte.decrire());




/* 
* EXERCICE 6: les objets
* Reprenons le contexte des comptes en banque. 
* Un compte bancaire sera modélisé par constructeur définie comme suit :
* Une propriété titulaire initialisée par le constructeur.
* Une propriété solde valant initialement 0.
* Une méthode crediter() ajoutant le montant passé en paramètre (éventuellement négatif) au solde du compte.
* Une méthode decrire() renvoyant la description du compte.
* Ecrivez un programme qui crée 3 comptes bancaires, l'un appartenant à Alex, le deuxième à CLovis et le troisième à Marco. 
* Stockez ces comptes dans un tableau.
* Ensuite, le programme crédite 1000 € et affiche la description de chacun des comptes.
*/

class CompteBancaire {
  constructor(titulaire) {
    this.titulaire = titulaire;
    this.solde = 0;
  }
  // Ajoute un montant au solde
  crediter(montant) {
    this.solde += montant;
  }
  // Renvoie la description du compte
  decrire() {
    return "titulaire: " + this.titulaire + ", solde: " + this.solde;
  }
}

let listeComptes = [];

// Ajoute 3 comptes bancaires à la liste
listeComptes.push(new CompteBancaire("Alex"));
listeComptes.push(new CompteBancaire("Clovis"));
listeComptes.push(new CompteBancaire("Marco"));

// Crédite et décrit chaque compte
listeComptes.forEach(compte => {
  compte.crediter(1000);
  console.log(compte.decrire());
});
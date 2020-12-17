// Script pour POO en Javascript
// Fabien Cazayous - 2020

var Individu = function(lePrenom, leNom) {
    // Le mot clé THIS désigne le constructeur : Individu
    // Je pourrait écrire Individu.nom = leNom
    this.prenom = lePrenom;
    this.nom = leNom;
}

Individu.prototype.direBonjour = function(){
    alert("Bonjour, je suis la méthode de " + this.prenom);
}

function declareInstance(){
    var personne01 = new Individu();
    alert("Instance personne01");
    var personne02 = new Individu();
    alert("Instance personne02");
}

function declarePropriete(){
    var personne01 = new Individu("Alice");
    alert("Propriété de :"+personne01.prenom);
    var personne02 = new Individu("Antoine");
    alert("Propriété de :"+personne02.prenom);
}

function declareMethode(){
    var personne01 = new Individu("Charlotte");
    personne01.direBonjour();
    var personne02 = new Individu("Jean");
    personne02.direBonjour();
}
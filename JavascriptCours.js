
alert ("Salut tout le monde");

// let aymen (variable) = 4 (valeur ); l'expression ici est triviale, elle consiste en le nom d'une autre variable 

let aymen = 4;

let ayadi = 6;

//echange = aymen; l'expression ici est triviale, elle consiste en le nom d'une autre variable 

echange = aymen;
aymen = ayadi;

// Correction : 
// Let permet de créer donc variable1 = variable2 permet juste d'échanger, pas besoins d'utiliser de let

let variable1 = 0;
let variable2 = 10;

let tampon = variable1;

variable1 = variable2;

variable2 = tampon;

console.log ("La valeur de la 1ère variable + variable1");

console.log ("La valeur de la 2ème variable + variable2");


// const message =  c'est un template string 

const nom = "Micka";

const message = `Bonjour ${nom} !`;

console.log (message);

// ça va afficher : Bonjour Micka !


// taper sur le navigateur : 

3 && 5
5


// Exemples pour le Switch (pour afficher des choix selon ce qu'on sélectionne)

let choix = 3
switch (choix) {
case 0 :
    console.log("case 0");
    break;
case 1: 
    console.log("case 1");
    break;
case 3: 
    console.log("case 3");
    break;
case 7: 
    console.log("case 7");
    break;
default: 
	console.log("default");
};



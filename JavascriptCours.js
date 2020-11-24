
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




// Boucles do
do { 
    
    essai = Number(prompt("Trop grand, rééssayer"));

} while(resultat<essai);

do { 
    
    essai = Number(prompt("Trop petit, rééssayer"));

} while(resultat>essai);


// Boucles while
while(resultat>essai){

    essai = Number(prompt("Trop grand, rééssayer"));

}

while(resultat<essai){

    essai = Number(prompt("Trop petit, rééssayer"));

}
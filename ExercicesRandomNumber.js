const resultat = Math.floor(Math.random()*10);

let essai = Number(prompt("Devinez le nombre compris entre 1 et 10")); 
let essai2 = resultat;

if(essai<resultat) {
    essai = Number(prompt("Trop petit"))
}


if(essai>resultat) {
    essai = Number(prompt("Trop grand"))
}


if (essai===essai2) {
   prompt("Bravo")
}


while(essai<resultat) {
    essai = Number(prompt("Trop petit"))  
    }

 while (essai>resultat) {
    essai = Number(prompt("Trop grand"))       
    }


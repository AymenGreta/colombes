// Boucles (répéter)
let rejouer = true;
while (rejouer) {
  const resultat = Math.floor(Math.random() * 10);
  let saisie = prompt("Devinez le nombre compris entre 0 et 10");
  while (resultat != saisie && saisie != null) {
    if (saisie > 10) {
      saisie = prompt("Ce n'est pas un nombre compris entre 1 et 10");
    } else if (isNaN(saisie)) {
      saisie = prompt("Please select a number");
    } else if (saisie > resultat) {
      saisie = prompt("Trop grand");
    } else if (saisie < resultat) {
      saisie = prompt("Trop petit");
    }
  }
  if (saisie == null) {
    rejouer = false;
    alert("Vous avez quitté la partie");
  } else if (!confirm("Bravo \n Voulez-vous-rejouer ?")) {
    rejouer = false;
    alert("Au revoir");
  }
}

"use strict";
const resultat = Math.floor(Math.random() * 10);
let essai = Number(prompt("Devinez le nombre compris entre 0 et 10"));
let gagné = false;
let reponse = false;
do {
  if (essai < resultat) {
    essai = Number(prompt("Trop petit"));
  } else if (essai > resultat) {
    essai = Number(prompt("Trop grand"));
  } else {
    gagné = true;
    alert("Bravo");
    reponse = true;
    confirm("Voulez-vous rejouer ?");
  }

  if (essai < resultat) {
    essai = Number(prompt("Trop petit"));
  }

  if (essai > resultat) {
    essai = Number(prompt("Trop grand"));
  }

  if (essai === resultat) {
    gagné = true;
    alert("Bravo");
    reponse = confirm("Voulez-vous rejouer ?");

    do {
        const resultat = Math.floor(Math.random() * 10);
        let essai = Number(prompt("Devinez le nombre compris entre 0 et 10"));
      if (essai < resultat) {
        essai = Number(prompt("Trop petit"));
      } else if (essai > resultat) {
        essai = Number(prompt("Trop grand"));
      } else {
        gagné = true;
        alert("Bravo");
        reponse = true;
        confirm("Voulez-vous rejouer ?");
      }

      if (essai < resultat) {
        essai = Number(prompt("Trop petit"));
      }

      if (essai > resultat) {
        essai = Number(prompt("Trop grand"));
      }

      if (essai === resultat) {
        gagné = true;
        reponse = confirm("Voulez-vous rejouer ?");
      }
    } while (!gagné);
  }
} while (!gagné);

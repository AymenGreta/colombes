// Script JS pour gestion des évènements

// document.write('Couou Javascript');
// alert('Bonjour depuis le JS');

let etatDiv01=false;
let etatDiv02=false;

document.getElementById('Bloc02').addEventListener('click', Div02);
// On aurais pu écrire : htmlElement.addEventListener

function Div02(evenement){
    if (etatDiv02=false){
        evenement.target.className="divNoire";
        etatDiv02=true;
    }else{
        className="myDiv";
        etatDiv02=false;
    }
}


function Div01(moiMeme){
    if (etatDiv01==false) {
        //change la class du div
        moiMeme.className="divNoire";
        etatDiv01==true;
    }else{
        // change la classe du Bloc 01
        moiMeme.className="myDiv";
        etatDiv01==false;
    }
}
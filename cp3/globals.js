/**
 *Renvoie l'age en année entre deux dates passées en paramètres 
 @param {string} d1 - première date
 @param {string} d2 - deuxième date 
 @param {number}
 */
function datediff(d1,d2) {
    let iResult = 0;
    let date1 = new Date(d1);
    let date2 = new Date(d2);
    if (date2>date1) {
        iResult = date2 - date1;
    }else{
        iResult = date1 - date2;
    }

    iResult /= 1000 / 60 / 60 / 24 / 365.25;
    return Math.floor(iResult);
};

/**
 * Affiche l'age quand on change la date de naissance
 */

 document.getElementById('dob').addEventListener(
     'change',
     function(){
         document.getElementById('age').value=datediff(this.value, new Date());
     },
     false
 )


 /**
  * Masque l'alerte sur les cookies
  */

  document.getElementById('stay').addEventListener(
      'click',
      function(evt){
          evt.preventDefault(); //empêche de retourner sur le site google.fr dans le bouton je reste
          document.getElementById('cAlert').style.display='none';
      },
      false
  );
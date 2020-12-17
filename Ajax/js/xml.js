// Elle démontre la méthode d'utilisation
// de l'objet XMLHttpRequest() de Javascript

function AfficherCourriel(){
    var xmlHTTP;
    try {
        xmlHTTP = new XMLHttpRequest();
    }catch(error){
        alert("Votre navigateur ne gère pas Ajax : " +error);
    }
    xmlHTTP.open("Get", "./datas/courriel.xml", false);
    xmlHTTP.send();
    var xmlDoc =  xmlHTTP.responseXML;
    document.getElementById("De").innerHTML=xmlDoc.getElementsByTagName("De")[0].childNodes[0].nodeValue;
    document.getElementById("Dest").innerHTML=xmlDoc.getElementsByTagName("Dest")[0].childNodes[0].nodeValue;
    document.getElementById("Sujet").innerHTML=xmlDoc.getElementsByTagName("Sujet")[0].childNodes[0].nodeValue;
    document.getElementById("Message").innerHTML=xmlDoc.getElementsByTagName("Message")[0].childNodes[0].nodeValue;
}
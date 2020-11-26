// Multiplications
function mult(x,y) { 
    return x*y
}

// Puissances
function puiss (x=1, y =0) {
 
    let resultat = 1;
    for (let i = 0; i < y ; i++){
        resultat = mult(resultat, x);
    }
    return resultat; 
}
const myTitreHtml=document.querySelector("h1");
    myTitreHtml.style.position="absolute";

    let myTopPosition=0;
    let myDirection=-1;

    function myHorizontalSlide(){
        if (myTopPosition == 1200)
            {myDirection=1} // Fin IF        
        else if (myTopPosition == -20)
            {myDirection=-1}// Fin ELSE IF
    
        myTopPosition+=2*myDirection;
        console.log(myTopPosition);
        myTitreHtml.style.left=myTopPosition+"px";
        requestAnimationFrame(myHorizontalSlide);
    }

    requestAnimationFrame(myHorizontalSlide);
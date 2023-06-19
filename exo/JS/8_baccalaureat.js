//alert("alert");

var moyenne=parseFloat(prompt("qu'elle est ta moyenne au Bac?"));

if(moyenne<10){
    document.write("Tu est recalé");//j'affiche qu'il est recalé

}else if((moyenne>=10)&&(moyenne<12)){
    //sinon , si la moyenne est entre 10 et 12 
    document.write("tu passe")//j'affiche que le candidat passe
}else if ((moyenne >= 12) &&(moyenne<=20)){
    document.write("Bravo pour la mention")
    //j'affiche qu'il a une mention
}else{ 
//en cas de saisi ne rentrant pas dans le cas ci-avant
document.write("votre saisi ne rentre pas dans notre bareme")
//je lui indique qu'il n'a pas saisi ce qu'on lui a demandait

} 

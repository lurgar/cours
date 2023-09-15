// Structure de base IF

if (true){
//par défaut la condition à vérifier le IF vérifie si elle est vraie

// ----- CODE -----


}
var nb1 = 10;
if  (nb1 < 50){
    
    console.log("nb1 est bien inférieur à 50")

}

// ELSE

if (true){

    // ---- code si VRAI ----

}
else{

    // ---- code si FAUX ----

}

if  (nb1 > 50){
    
    console.log("nb1 est bien inférieur à 50")

}

else{

     console.log("nb1 est bien inférieur à 50")   

     
}

//Exercice
//on uttilise le IF pour vérifier l'âge du l'internaute
//=> s'il est majeur je lui souhaite la bienvenue
//=>d'il est mineur je lui (1)signale et (2) le renvoie vers un autre site

//1-- je déclare la majorité legal 
var majoriteFR=18;

//2-- je verifie l'âge en s'assurant que nous avons un NUMBER
var age= parseInt(prompt ("indiquez votre Age"));
//3-- je verigie si mon internaute est majeur
if(age>= majoriteFR){
    alert("bienvenue, vous pouvez accédez à ce site")//bienvenue si vrai

}else{
    //s'il est mineur je lui signal
    alert("va sur toy s rus")
    //et ensuite je redirige vers darty
    document.location.href="https://www.toysrus.com/"
}






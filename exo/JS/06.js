
var jour = prompt("Quelle jour somme-nous ?");
/*
if(jour === "lundi"){
    document.write("Demain nous serons MARDI");
} else if(jour === "mardi"){
    document.write("Demain nous serons MERCREDI");
} else if(jour === "mercredi"){
    document.write("Demain nous serons JEUDI");
} else if(jour === "jeudi"){
    document.write("Demain nous serons VENDREDI");
} else if(jour === "vendredi"){
    document.write("Demain nous serons SAMEDI");
} else if(jour === "samedi"){
    document.write("Demain nous serons DIMANCHE");
} else if(jour === "dimanche"){
    document.write("Demain nous serons LUNDI");
}else {
    document.write("Jour inconnu");
}
*/

switch(jour){
    case "lundi":
    console.log("Demain on est mardi");
    break;
    case "mercredi":
    console.log("Demain on est mercredi");
    break;
    case "jeudi":
    console.log("Demain on est jeudi");
    break;
    case "vendredi":
    console.log("Demain on est vendredi");
    break;
    case "samedi":
    console.log("Demain on est samedi");
    break;
    case "dimanche":
    console.log("Demain on est lundi");
    break;
    default:
     console.log("jours Non reconnu");
}




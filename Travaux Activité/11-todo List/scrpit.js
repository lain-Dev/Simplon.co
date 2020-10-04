function laDate() {
    var maintenant=new Date();
    var jour=maintenant.getDate();
    var mois=maintenant.getMonth()+1;
    var an=maintenant.getFullYear();
    console.log(jour,"/",mois,"/",an); 
    //document.getElementById("dateDuJour").innerText = maintenant;
}
laDate();    





                    
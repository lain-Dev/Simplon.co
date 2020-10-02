window.onload = function() {

    function date() {
        var maintenant=new Date();
        var jour=maintenant.getDate();
        var mois=maintenant.getMonth()+1;
        var an=maintenant.getFullYear();
        document.getElementById(day).innerHTML = (jour,"/",mois,"/",an,".");
    }
   

}




                    
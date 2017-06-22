$(document).ready(function(){
    $('.close').click(function(){
        var URLactual = window.location+"";
        if(URLactual.indexOf("guardar") != -1)
        {
            location.href=URLactual.substring(0, URLactual.indexOf("Home")+4);
        }
        else
        {
            document.getElementById("SinResultados").remove();    
        }
    });
});
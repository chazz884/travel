// $(document).ready(function(){
//     $('.close').click(function(){
//         var URLactual = window.location+" ";
//         if(URLactual.indexOf("guardar") != -1)
//         {
//             location.href=URLactual.substring(0, URLactual.indexOf("Home")+5);
//         }
//         else
//         {
//             document.getElementById("SinResultados").remove();    
//         }
//     });
// }); 

$(document).on("ready"),inicio;

function inicio(){
	$("#msg-error").hide();
	mostrarDatos("");
	$("#buscar").keyup(function(){
		buscar = $("#buscar").val();
		mostrarDatos(buscar);
	});
	$("#btnactualizar").click(actualizar);
	event.preventDefult();

		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form").serialize(),
			succes:function(respuesta){
				alert(respuesta);
			}
		});
}
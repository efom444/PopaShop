//oculta el elemento que tenga como id = "p"
$(document).ready(function(){
$("#p").hide();

//dandole clic al boton oculta el elemento que tenga como id = "pr"

$("button").click(function (){
$("#pr").hide(); 
});
//Muestra una alerta
$("#alerta").mousedown(function(){
        alert("Entraste a la alerta");
});
//Cambia los atributos css al mismo boton
$("#buttonJ").focus(function(){
    $(this).css("background-color","#cccccc");
});

//clic para ocultar el elemento que tenga como id = "prue"
$("#hide").click(function(){
$("h2").hide();
});
//clic para mostrar el elemento que tenga como id = "prue"
$("#show").click(function(){
$("h2").show();
});

$("p").on({
    mouseenter: function(){
        $(this).css("background-color","lightgray");
    },
    mouseleave: function(){
        $(this).css("background-color","lightblue");
    },
    click: function(){
        $(this).css("background-color","yellow");
    }
});
//Probar entrada y salida de div efectos
$("#buttonF").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn("3000");
});
$("#buttonF2").click(function(){
    $("#div1").fadeOut();
    $("#div2").fadeOut("slow");
    $("#div3").fadeOut("3000");
});
$("#buttonF3").click(function(){
    $("#div1").fadeToggle();
    $("#div2").fadeToggle("slow");
    $("#div3").fadeToggle("3000");
});
$("#buttonF4").click(function(){
    $("#div1").fadeTo("slow",0.25);
    $("#div2").fadeTo("slow",0.4);
    $("#div3").fadeTo("slow",0.7);
});

//baja y sube el elemento con id = "panel"
$("#panel3").click(function(){
$("#panel").slideDown(); 
});
$("#panel2").click(function(){
$("#panel").slideUp(); 
});

//Animar el elemento con id = "animacion"
$("#buttonA").click(function(){
    $("#animacion").animate({
        left:'40%',
        opacity:'0.5',
    });
});
});
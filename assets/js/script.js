//Script para hacer desaparecer la precarga de la pagina 
function tiempodeCarga() {
    $("#spinner").fadeOut("slow");
}
setTimeout(tiempodeCarga, 500);


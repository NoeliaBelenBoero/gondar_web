//Ejecutando funciones
document.getElementById("btn__icon").addEventListener("click", mostrar_buscador);
document.getElementById("cover_search").addEventListener("click", ocultar_buscador);
// variables
bars_search = document.getElementById("container__search");
cover = document.getElementById("cover_search");
input = document.getElementById("input_search");
box = document.getElementById("box_search");

//mostrar buscador
function mostrar_buscador(){

    bars_search.style.top = "150px";
    cover.style.display = "block";
    input.focus();

    if (input.value === ""){
        box.style.display = "none";
    }
}

//ocultar buscador
function ocultar_buscador(){

    bars_search.style.top = "-10px";
    cover.style.display = "none";
    input.value = "";
    box.style.display = "none";
}

//filtrado de búsqueda
document.getElementById("input_search").addEventListener("keyup", buscar);

function buscar(){

    filter = input.value.toUpperCase();
    li = box.getElementsByTagName("li");
    //Recorriendo filtros con los li
    for(i=0; i<li.length; i++){
        a = li[i].getElementsByTagName("a")[0];
        texto = a.textContent || a.innerText;

        if(texto.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
            box.style.display = "block";

            if (input.value === ""){
                box.style.display = "none";
            }
        } else {
            li[i].style.display = "none";
        }
    }
}
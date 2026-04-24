// Selecciona el elemento con el ID "mostrador" y lo almacena en la variable "mostrador"
let mostrador = document.getElementById("mostrador");
// Selecciona el elemento con el ID "seleccion" y lo almacena en la variable "seleccion"
let seleccion = document.getElementById("seleccion");
// Selecciona el elemento con el ID "img" y lo almacena en la variable "imgSeleccionada"
let imgSeleccionada = document.getElementById("img");
// Selecciona el elemento con el ID "modelo" y lo almacena en la variable "modeloSeleccionado"
let modeloSeleccionado = document.getElementById("modelo");
// Selecciona el elemento con el ID "descripcion" y lo almacena en la variable "descripSeleccionada"
let descripSeleccionada = document.getElementById("descripcion");
// Selecciona el elemento con el ID "precio" y lo almacena en la variable "precioSeleccionado"
let precioSeleccionado = document.getElementById("precio");

// Función "cargar" que se ejecuta cuando se hace clic en un elemento con la clase "item"
function cargar(item){
    // Llama a la función "quitarBordes" para eliminar los bordes de los elementos "item"
    quitarBordes();
    // Cambia el ancho del elemento con el ID "mostrador" al 60%
    mostrador.style.width = "60%";
    // Cambia el ancho del elemento con el ID "seleccion" al 40%
    seleccion.style.width = "40%";
    // Establece la opacidad del elemento con el ID "seleccion" en 1 para mostrarlo
    seleccion.style.opacity = "1";
    // Agrega un borde rojo al elemento "item" que se ha seleccionado
    item.style.border = "2px solid red";

    // Cambia la fuente de la imagen seleccionada por la imagen del "item" seleccionado
    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;

    // Cambia el contenido del elemento con el ID "modelo" al texto del primer párrafo dentro del "item" seleccionado
    modeloSeleccionado.innerHTML =  item.getElementsByTagName("p")[0].innerHTML;

    // Cambia el contenido del elemento con el ID "descripcion" al texto "Precio"
    descripSeleccionada.innerHTML = "Precio ";

    // Cambia el contenido del elemento con el ID "precio" al precio dentro del "item" seleccionado
    precioSeleccionado.innerHTML =  item.getElementsByTagName("span")[0].innerHTML;
}

// Función "cerrar" que se ejecuta cuando se hace clic en el elemento con la clase "cerrar"
function cerrar(){
    // Restablece el ancho del elemento con el ID "mostrador" al 100%
    mostrador.style.width = "100%";
    // Establece el ancho del elemento con el ID "seleccion" en 0% para ocultarlo
    seleccion.style.width = "0%";
    // Establece la opacidad del elemento con el ID "seleccion" en 0 para ocultarlo completamente
    seleccion.style.opacity = "0";
    // Llama a la función "quitarBordes" para eliminar los bordes de los elementos "item"
    quitarBordes();
}

// Función "quitarBordes" que elimina los bordes de todos los elementos con la clase "item"
function quitarBordes(){
    // Obtiene todos los elementos con la clase "item"
    var items = document.getElementsByClassName("item");
    // Itera a través de los elementos y elimina sus bordes
    for(i=0;i <items.length; i++){
        items[i].style.border = "none";
    }
}


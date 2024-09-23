const form = document.getElementById("form");
const nombre = document.getElementById("name");
const email = document.getElementById("email");
const telefono = document.getElementById("phone");
const mensaje = document.getElementById("message");
const parrafo = document.getElementById("warnings");

form.addEventListener("submit", e => {
   // e.preventDefault();

    let warnings = "";
    let regexName = /^([A-Za-zÑñÁáÉéÍíÓóÚú]+['-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+)(n+([A-Za-zÑñÁáÉéÍíÓóÚú]+['-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+))*$/;
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    let regexPhone = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    let entrar = false;
    parrafo.innerHTML = "";

    if(nombre == "") {
        alert("el campo 'nombre' es obligatorio");
        document.querySelector("#name").focus();
        warnings += `El Nombre no es valido <br>`;
        entrar=true;
    } else

    if(!regexEmail.test(email.value)){
        alert("El campo 'email' es obligatorio y debe contener '@' y '.' ");
        document.querySelector("#email").focus();
        warnings += `El Email no es valido <br>`;
        entrar=true;
    } else

    if(!regexPhone.test(telefono.value)) {
        alert("el campo 'telefono' es obligatorio");
        document.querySelector("#phone").focus();
        warnings += `El Teléfono no es valido <br>`;
        entrar=true;
    } else

    if(mensaje.value.length < 7) {
        alert("el campo 'mensaje' es obligatorio");
        document.querySelector("#message").focus();
        warnings += `El Mensaje no es valido <br>`;
        entrar=true;
    }

    if (entrar) {
        parrafo.innerHTML = warnings;
    } else {
        //alert("el mensaje ha sido enviado correctamente");
        Swal.fire({
            icon: "success",
            title: "Exito!",
            text: "El mensaje ha sido enviado correctamente",
            timer: 15000
          });
        parrafo.innerHTML = "Enviado";
    }

})
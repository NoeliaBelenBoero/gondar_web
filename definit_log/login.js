function validarDatos() {
    window.event.preventDefault();
    const email = document.querySelector("#email.sesion").value;
    const password = document.querySelector("#password.sesion").value;
    if (email == "" || email.indexOf("@") == -1 || email.indexOf(".") == -1) {
        alert("El campo 'email' es obligatorio y debe contener '@' y '.' ");
        document.querySelector("#email").focus();
    } else if (password == "") {
        alert("El campo 'password' es obligatorio");
        document.querySelector("#password").focus();
    } else if (email == "marceloalejandrolofiego@hotmail.com.ar" && password == "12345678") {
        location.href = "consult.php";
       
    } else {
        alert("El email o contraseña es inválido")
    }
}
var botonPonerProducto = document.querySelector(".sesion__btn");
botonPonerProducto.addEventListener("click", validarDatos);
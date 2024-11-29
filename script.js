let iconUser= document.querySelector('.fa-user');


document.getElementById("btn iniciar sesion").addEventListener("click", IniciarSesion);
document.getElementById("btn registrarse").addEventListener("click", registrer);

var contenedor_login_registrer = document.querySelector(".contenedor_login-registrer");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registrer = document.querySelector(".formulario_registrer");
var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_registrer = document.querySelector(".caja_trasera-registrer");

function IniciarSesion (){
    formulario_registrer.style.display = "none";
    contenedor_login_registrer.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_registrer.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
}

function registrer (){
    formulario_registrer.style.display = "block";
    contenedor_login_registrer.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_registrer.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}
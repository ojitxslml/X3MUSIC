console.log("hola");

// Get the modal for login or register
const modalLogin = document.getElementById("modalLogin");
const modalRegister = document.getElementById("modalRegister");

// Get the button that opens the modal
const btnLog = document.getElementById("btnLogin");
const btnIniciar = document.getElementById("btnIniciar");


// Get the button to send the form
const btnRegistro = document.getElementById("btnRegistro");
const btnRegister = document.getElementById("btnRegistrar");

//login

// When the user clicks on the button, open the modal
btnLog.onclick = function() {
  modalLogin.style.display = "block";
  console.log("hola");
  ul.classList.toggle('show')
}
//send the form
btnIniciar.onclick = () =>{
  modalLogin.style.display = "none";
}

//sign up

// When the user clicks on the button, open the modal
btnRegistro.onclick = function() {
  modalRegister.style.display = "block";
  console.log("hola");
  ul.classList.toggle('show')
}
//send the form
btnRegister.onclick = () =>{
  modalRegister.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  console.log(event);
  if (event.target == modalLogin || event.target == modalRegister) {
    modalRegister.style.display = "none";
    modalLogin.style.display = "none";
  }
}
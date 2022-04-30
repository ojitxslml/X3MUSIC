console.log("hola");

// Get the modal
const modal = document.getElementById("modalLogin");

// Get the button that opens the modal
const btn = document.getElementById("btnLogin");

const btnIniciar = document.getElementById("btnIniciar");
const btn_menu = document.querySelector('.btn_menu');
const ul = document.querySelector('ul');
// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  console.log("hola");
  ul.classList.toggle('show')
}

btnIniciar.onclick = () =>{
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  console.log(event);
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

addEventListener('DOMContentLoaded', () => {
  
  if(btn_menu){
    btn_menu.addEventListener('click', () => {
    
    ul.classList.toggle('show')
  })
 }
})
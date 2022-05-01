const btn_menu = document.querySelector('.btn_menu');
const ul = document.querySelector('ul');
addEventListener('DOMContentLoaded', () => {

    if(btn_menu){
      btn_menu.addEventListener('click', () => {
      
      ul.classList.toggle('show')
    })
   }
  })
let menuBox = document.querySelector('#menu-box');
let navbar = document.querySelector('.navbar');

menuBox.onclick = () => {
    navbar.classList.toggle('active');
};


const botonesMenu = document.querySelectorAll(".boton-menu");
const contenedorAvance = document.querySelectorAll(".contenedor-avance");

botonesMenu.forEach( (everyDot, i)=>{
    botonesMenu[i].addEventListener('click', ()=>{
        let position = i 
        botonesMenu.forEach( (everyDot, i)=>{
            botonesMenu[i].classList.remove('active')
            contenedorAvance[i].classList.remove('active')
        })
        botonesMenu[i].classList.add('active')
        contenedorAvance[i].classList.add('active')
    }) 
})


let menuBox = document.querySelector('#menu-box');
let navbar = document.querySelector('.navbar');

menuBox.onclick = () => {
    navbar.classList.toggle('active');
};


const botonesMenu = document.querySelectorAll(".boton-menu");
const contenedorAvance = document.querySelectorAll(".contenedor-avance");

botonesMenu.forEach( (everyDot, i)=>{
    botonesMenu[i].addEventListener('click', ()=>{

        botonesMenu.forEach( (everyDot, i)=>{
            botonesMenu[i].classList.remove('active')
            contenedorAvance[i].classList.remove('active')
        })
        botonesMenu[i].classList.add('active')
        contenedorAvance[i].classList.add('active')
    }) 
})

const botonesSecundarios = document.querySelectorAll(".boton-menu-secundario")
const contenidoSecundario = document.querySelectorAll(".contenido-secundario")

botonesSecundarios.forEach( (everyButtom, j)=>{
    botonesSecundarios[j].addEventListener('click', ()=>{

        botonesSecundarios.forEach( (everyButtom, j)=>{
            botonesSecundarios[j].classList.remove('active')
            contenidoSecundario[j].classList.remove('active')
        })
        botonesSecundarios[j].classList.add('active')
        contenidoSecundario[j].classList.add('active')
    }) 
})
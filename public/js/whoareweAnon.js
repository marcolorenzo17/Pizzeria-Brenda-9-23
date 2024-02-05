'use strict'

const enlaces = document.querySelectorAll('.alb');
const lightbox = document.querySelector('.lightbox');
const grande = document.querySelector('.grande');
const cerrar = document.querySelector('.cerrar');

enlaces.forEach(( cadaEnlace, i )=>{
  enlaces[i].addEventListener('click', (e)=>{
    e.preventDefault();
    let ruta = cadaEnlace.querySelector('.img_ensi').src;

    lightbox.classList.add('activo');
    grande.setAttribute('src', ruta);
    lightbox.setAttribute('style', 'transition:all .5s ease;');
  })
})

cerrar.addEventListener('click', ()=>{
  lightbox.classList.remove('activo');
})

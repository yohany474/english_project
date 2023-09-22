function ocultarContenedoresMenu() {
    const contenidos = document.querySelectorAll('.paginas');
    contenidos.forEach(contenedor => {
        contenedor.style.display = 'none';
    });
    const botones = document.querySelectorAll('.button');
    botones.forEach(boton => {
        boton.classList.remove('btnActive');
    });
}

function mostrarContenedoresMenu(contenedor, elemento) {
    ocultarContenedoresMenu();
    document.getElementById(contenedor).style.display = 'flex';
    mostrarRuta(contenedor)
    elemento.classList.add('btnActive');

    // Guardar el nombre del contenedor y el ID del botón en localStorage
    localStorage.setItem('contenedorVisible', contenedor);
    localStorage.setItem('botonVisibleId', elemento.id);
}

function mostrarRuta(contenedor) {

    if (contenedor === 'Inicio') {
        document.getElementById('ruta').innerText = '';
    } else {
        document.getElementById('ruta').innerText = ' ' + contenedor;
    }
}

ocultarContenedoresMenu();

const contenedorGuardado = localStorage.getItem('contenedorVisible');
const botonIdGuardado = localStorage.getItem('botonVisibleId');

if (contenedorGuardado) {
    // Mostrar el contenedor guardado si existe
    document.getElementById(contenedorGuardado).style.display = 'flex';
    mostrarRuta(contenedorGuardado)
    // Obtener el botón por su ID y mostrarlo
    const botonGuardado = document.getElementById(botonIdGuardado);
    if (botonGuardado) {
        botonGuardado.classList.add('btnActive');
    }
} else {
    mostrarRuta('Inicio')
    document.getElementById('Inic').style.display = 'flex';
    document.getElementById('Inicio').style.display = 'flex';

}




// 
// Desplegar menu al dar click 
const desplegarMenu = document.getElementById('desplegarMenu');
const cerrarMenu = document.getElementById('cerrarMenu');

desplegarMenu.addEventListener('click', ()=>{
    desplegarMenu.classList.add('animacionMenu');
    cerrarMenu.classList.add('animacionCerrar');
    document.getElementById('asideMenu').classList.add('mostrarMenu')
})

cerrarMenu.addEventListener('click', ()=>{
    
    cerrarMenu.classList.remove('animacionCerrar');
    desplegarMenu.classList.remove('animacionMenu');
    document.getElementById('asideMenu').classList.remove('mostrarMenu')
})


botones_del_aside = document.querySelectorAll('.button');
botones_del_aside.forEach(boton =>{
    boton.addEventListener('click', ()=>{
        cerrarMenu.classList.remove('animacionCerrar');
        desplegarMenu.classList.remove('animacionMenu');
        document.getElementById('asideMenu').classList.remove('mostrarMenu')
    })
}) 
    
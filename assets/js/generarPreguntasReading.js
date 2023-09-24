const ventanaFormReadingg = document.getElementById('ventanaFormReading');
ventanaFormReadingg.addEventListener('submit', (event) => {

    event.preventDefault();
    FormDataaa = new FormData(ventanaFormReadingg);
    fetch('controller/crearReading.php', {
        method: 'POST',
        body: FormDataaa,
    }).then((response) => response.json())
        .then((data) => {
            if(data.success === true){
                alert('Actividad guardada correctamente')
            }
            ventanaFormReadingg.reset(); 

        })
        .catch((error) => {
            alert(error)
        })
})
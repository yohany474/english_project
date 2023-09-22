const ventanaFormListening = document.getElementById('ventanaFormListening');
ventanaFormListening.addEventListener('submit', (event) => {

    event.preventDefault();
    FormDataa = new FormData(ventanaFormListening);
    fetch('controller/crearListening.php', {
        method: 'POST',
        body: FormDataa,
    }).then((response) => response.json())
        .then((data) => {
            if(data.success === true){
                alert('Actividad guardada correctamente')
            }
            ventanaFormListening.reset(); 

        })
        .catch((error) => {
            alert(JSON.stringify(error))
        })
})
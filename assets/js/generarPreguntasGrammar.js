const ventanaFormGrammar = document.getElementById('ventanaFormGrammar');
ventanaFormGrammar.addEventListener('submit', (event) => {

    event.preventDefault();
    FormDataa = new FormData(ventanaFormGrammar);
    fetch('controller/crearGrammar.php', {
        method: 'POST',
        body: FormDataa,
    }).then((response) => response.json())
        .then((data) => {
            if (data.success === true) {
                alert('Actividad guardada correctamente')
            }
            ventanaFormGrammar.reset();

        })
        .catch((error) => {
            alert(JSON.stringify(error))
        })
})
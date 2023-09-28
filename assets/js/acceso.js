$(document).ready(function () {
    $("#acceso").submit(function (e) {
        e.preventDefault(); // Prevenir el comportamiento de envío predeterminado del formulario
      
        var formData = new FormData(this);
        formData.append('acceso', true);
        
        $.ajax({
            url: 'controller/acceso.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json', 
            success: function (response) {
                if (response.success) {
                    alert('Acceso concedido');
                    window.location.href = 'Panel.php';
                } else if (response.error) {
                    alert(response.error);
                } else {
                    console.error('Respuesta JSON inesperada');
                }
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
 });
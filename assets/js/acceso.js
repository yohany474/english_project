$(document).ready(function () {
   $("#acceso").submit(function (e) {
       e.preventDefault(); // Prevenir el comportamiento de envío predeterminado del formulario
     
       var formData = new FormData(this);
       formData.append('acceso', true);
       
       $.ajax({
           url: './controllers/acceso.php',
           type: 'POST',
           data: formData,
           contentType: false,
           processData: false,
           dataType: 'json', // Especifica que esperas una respuesta en formato JSON
           success: function (response) {
               if (response.success) {
                   // El acceso se concedió, muestra un mensaje de éxito
                   alert('Acceso concedido');
                   // Aquí puedes redireccionar a la página deseada si es necesario
                   // window.location.href = './pagina_destino.html';
               } else if (response.error) {
                   // Hubo un error, muestra un mensaje de error
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

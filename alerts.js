// Para el botón del formulario
document.addEventListener('DOMContentLoaded', function() {
    var submitButton = document.getElementById('submit-button');
    if (submitButton) {
      submitButton.addEventListener('click', function(event) {
        event.preventDefault();
    
        Swal.fire({
          title: '¿Estás seguro?',
          text: 'Estás apunto de editar el registro',
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, continuar',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById('my-form').submit();
          }
        });
      });
    }
  });
  
  // Para los enlaces
  document.addEventListener('DOMContentLoaded', function() {
    var links = document.getElementsByClassName('my-link');
    Array.from(links).forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
    
        Swal.fire({
          title: '¿Estás seguro?',
          text: 'Esta acción no se puede deshacer',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, continuar',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = event.target.href;
          }
        });
      });
    });
  });
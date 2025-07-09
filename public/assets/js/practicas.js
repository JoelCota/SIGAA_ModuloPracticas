$(document).ready(function () {
  const tabla = $('#tablaPracticas').DataTable({
    language: {
      url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
    }
  });

 $('#tablaPracticas tbody').on('click', '.btn-eliminar', function () {
    const fila = $(this).closest('tr');
    const id = fila.data('id');
    console.log('ID de la práctica a eliminar:', id);
    if (confirm('¿Estás seguro de eliminar esta práctica?')) {
      $.ajax({
        url: baseUrl + 'practicas/eliminar/' + id,
        method: 'POST',
        success: function (respuesta) {
          if (respuesta.status === 'ok') {
            tabla.row(fila).remove().draw();
          } else {
            alert('No se pudo eliminar la práctica.');
          }
        },
        error: function () {
          alert('Error al eliminar la práctica.');
        }
      });
    }
  }); 



  const ctx = document.getElementById('graficaDistribucion').getContext('2d');
  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['Introducción', 'Aproximación', 'Simulación'],
      datasets: [{
        data: [35, 35, 30],
        backgroundColor: ['#006db6', '#0066cc', '#cbd5e1'],
        borderColor: '#ffffff',
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { display: false },
        tooltip: {
          callbacks: {
            label: (context) => `${context.label}: ${context.parsed}%`
          }
        }
      }
    }
  });
});


//Se necesita registrar alumnos de cada semestre y tipo de práctica con el fin de que se pueda generar un reporte de cumplimiento por semestre y tipo de práctica.
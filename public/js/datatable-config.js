$(function () {


    $(document).on('click', '.btn-danger', function() {
        $form = $(this).closest("form");
         
        $($form).submit(function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Eliminar',
                text: "¿Seguro que desea eliminar el registro?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, bórralo!',
                allowOutsideClick: false
            }).then((result) => {
                if (result.isConfirmed) {
                    $($form).unbind().submit();
                }
            })
        });
    });


    $('#example').DataTable({
        order: ['0', 'desc'],
        responsive: true,
        autoWidth: false,
        "language": {
            // "lengthMenu": "Mostrar _MENU_ Registros por página",
            "lengthMenu": "Mostrar " + `
       <select class="custon-select custon-select-sm form-control form-control-sm">
           <option value='10'>10</option>
           <option value='25'>25</option>
           <option value='50'>50</option>
           <option value='100'>100</option>
           <option value='-1'>Todos</option>
       </select>
   ` + " Registros por página",
            "zeroRecords": "Nada encontado - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate": {
                "next": "siguiente",
                "previous": "Anterior"
            }
        },


    });
});

$(document).ready(function () {
    listar();
});

/*$("#addempresa").on("click", function(){
  var parametros = $('#newEmpresa').serialize();
  console.log(parametros);
  $.ajax({
    method:"POST",
    url: 'footer/insertEmpresa',
    data: parametros
  }).done( function(){
    $('#Empresas').DataTable().ajax.reload(null,false);
    correcte('Afegida correctament!');
  });
});
*/
$("#removeEmpresa").on("click", function(){
  id = $('#idEmpresaEliminar').val();
  console.log(id);
  $.ajax({
    method:"GET",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: 'footer/deleteEmpresa/'+id,
  }).done( function(){
    $('#empresas').DataTable().ajax.reload(null,false);
    correcte('Eliminat correctament!');
  }).fail( function(){
    //notificar(toastr.error('La connexió ha fallat!'));
  });
});
/*
$("#modificarEmpresa").on("click", function(){
  var parametros = $('#modificarEmpresaForm').serialize();
  console.log(parametros);
  $.ajax({
    method:"POST",
    url: 'footer/updateEmpresa',
    data: parametros
  }).done( function(){
    $('#Empresas').DataTable().ajax.reload(null,false);
    correcte('Modificada correctament!');
  }).fail( function(){
    //notificar(toastr.error('La connexió ha fallat!'));
  });
});*/

//Funció per carregar la DataTable a partir d'un arxiu json
//La funció listar serveix per carregar la Datatable cada cop que fas una acció per poder mostrar les dades actualitzades de la datatable.
var listar = function(){
  var table = $('#empresas').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'empresas/datatableEmpresas',
        pageLength: 10,
        responsive: true,
        language: idioma_espanol,
        dom: '<"html5buttons"B>lTfgitp',
        columns: [
          { data: 'nom_empresa'},
          { data: 'direccio_empresa'},
          { data: 'test_empresa'},
          { data: 'testing_empresa'},
          {data: 'edit', name: 'edit', orderable: false, searchable: false},
          {data: 'delete', name: 'delete', orderable: false, searchable: false}
        ],
        buttons: [

        ]
  });
  obtener_data_editar("#empresas tbody", table);
  obtener_data_eliminar("#empresas tbody", table);
}


//Funció per obtenir els valors d'una row de la Datatable per desprès mostrar-ho en una modal
var obtener_data_eliminar = function(tbody, table){
  $(tbody).on("click", "button.eliminar", function(){
    var data = table.row( $(this).parents("tr") ).data();
    $("#idEmpresaEliminar").val( data.id );
  });
}

var obtener_data_editar = function(tbody, table){
  $(tbody).on("click", "button.editar", function(){
    var data = table.row( $(this).parents("tr") ).data();
    $("#idEmpresa").val( data.id );
    $("#NomEmpresa").val( data.nom );
  });
}

var correcte = function(text){
      toastr.success(text);
      toastr.options = {
           'closeButton': true,
           'debug': false,
           'progressBar': false,
           'preventDuplicates': false,
           'positionClass': 'toast-top-right',
           'onclick': null,
           'showDuration': '400',
           'hideDuration': '1000',
           'timeOut': '7000',
           'extendedTimeOut': '1000',
           'showEasing': 'swing',
           'hideEasing': 'linear',
           'showMethod': 'fadeIn',
           'hideMethod': 'fadeOut'
    }
}

//Plugin de la DataTable que serveix per canviar l'idioma
var idioma_espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

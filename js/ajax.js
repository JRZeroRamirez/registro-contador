window.onload = function () {
    Cargar();    
}
function Registrar()
{    
    var nom = $("#nombre").val();
    var fech = $("#edad").val();
   
    $("#respuesta").html("favor espera un momento");
    $.ajax({
        type: "POST",
        dataType: 'html',
        url: "index.php",
        data: "&nombre="+nom+"&edad="+edad,
        success: function(resp){
            $('#respuesta').html(resp);
            Limpiar();
            Cargar();
        }
    });
}   
function Cargar()
{
    $('#datagrid').load('consulta.php');    
}
function Limpiar()
{
    $("#nombre").val("");
    $("#edad").val("");
}

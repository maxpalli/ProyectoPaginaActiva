<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<div id="mensaje" class="ocultar"></div>
<a href="#" id="saludar" data-nombre="Max">Saludar</a>
<style>
#mensaje {
    position: absolute;
    background: #5AA09B;
    width: 300px;
    height: 200px;
    color: white;
    border-radius: 10px;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    margin: 0 auto;
}
.ocultar{
    display: none;
}
</style>
<script>
$(document).ready( function(){
    $("#saludar").on('click',function(e){
        e.preventDefault();
        var nombre = $(this).attr('data-nombre');
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "procesar.php",
            data: { nombreProcesada: nombre },
            cache: false,
            success: function(respuesta) {
                $("#mensaje").html(respuesta.mensaje);
                $("#mensaje").removeClass("ocultar");
            }
        });
        return false;
    });
});
</script>
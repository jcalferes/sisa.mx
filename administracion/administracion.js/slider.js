$(document).ready(function() {
    var fileExtension = "";
    $(".messages").hide();
    $(':file').change(function()
    {
        //obtenemos un array con los datos del archivo
        var file = $("#imagen")[0].files[0];
        //obtenemos el nombre del archivo
        var fileName = file.name;
        //obtenemos la extensión del archivo
        fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
        //obtenemos el tamaño del archivo
        var fileSize = file.size;
        //obtenemos el tipo de archivo image/png ejemplo
        var fileType = file.type;
        //mensaje con la información del archivo
    });
    $('#subirImagen').click(function() {
        var nombre = $('#titulo').val();
        var descripcion = $('#descripcion').val();
        //información del formulario
//        var formData = new FormData($(".formulario")[0]);
        var formData = new FormData($("form#formu")[0]);
        var message = "";
        $.ajax({
            url: 'upload.php',
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false});
    });


    function isImage(extension)
    {
        switch (extension.toLowerCase())
        {
            case 'jpg':
            case 'gif':
            case 'png':
            case 'jpeg':
                return true;
                break;
            default:
                return false;
                break;
        }
    }


});
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
        alert(descripcion);
        //información del formulario
//        var formData = new FormData($(".formulario")[0]);
        var formData = new FormData($("form#formu")[0]);
        var message = "";
        alert("salio");
        //hacemos la petición ajax 
//        if (nombre !== "" && descripcion !== "") {

//            if (isImage(fileExtension)) {
                alert("entro");
                $.ajax({
                    url: 'upload.php',
                    type: 'POST',
                    // Form data
                    //datos del formulario
                    data: formData,
                    //necesario para subir archivos via ajax
                    cache: false,
                    contentType: false,
                    processData: false
                });
                //mientras enviamos el archivo
//                    beforeSend: function() {
//                        message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
//                        showMessage(message)
//                    },
//                    //una vez finalizado correctamente
//                    success: function(data) {
//                        message = $("<span class='success'>La imagen se ha subido correctamente.</span>");
//                        showMessage(message);
//                        if (isImage(fileExtension))
//                        {
//                            $(".showImage").html("<img class=\"img-responsive\" style=\"margin: 0 auto; width: 300px\" src='../images/" + data + "' />");
//                        }
//                    },
//                    //si ha ocurrido un error
//                    error: function() {
//                        message = $("<span class='error'>Ha ocurrido un error.</span>");
//                        showMessage(message);
//                    }

//            } else {
//                showMessage("<span class='error'>El formato no es correcto</span>");
//            }
//        } else {
//            alert("todos los campos son obligatorios");
//        }
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
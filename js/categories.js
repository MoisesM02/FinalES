$(document).ready(function () {
    $(window).on('load', function(){
        CKEDITOR.replace('informacion')
    })


    fetchCategories()
    function fetchCategories(){
        $.ajax({
            url: 'Backend/fetchCategories.php',
            type: 'GET',
            success: function(response){
                console.log(response)
                let categories = JSON.parse(response);
                
              
                
                $('#category').append(template);
            }
        })
    }
    //Guardar la info del lugar en la base de datos
    $('#addPlaces').submit(function(e){
        e.preventDefault();
        let nombre = $('#nombre').val();
        let desc = $('#description').val();
        let imageData = $('#image').prop('files')[0];
        var formData = new FormData();
        formData.append('image',imageData);
        formData.append('desc', desc);
        formData.append('name', nombre);
        
        $.ajax({
            url         :   'Backend/uploadCat.php',
            dataType    :   'text',
            cache       :   false,
            contentType :   false,
            processData :   false,
            data        :   formData,
            type        :   'post',
            success     :   function(response){
            let res = response;
            console.log(res);
            alert(res);
            $('#nombre').val("");
            $('#description').val("");
            $('#image').val("");
            }
        })
    })

})

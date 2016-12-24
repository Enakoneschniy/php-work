(function($){
    $('#feedback').submit(function(event){
        event.preventDefault();

        var formData = $(this).serializeArray();
        console.log(formData);

        $.ajax({
            url: '/24/ajax.php',
            method: 'post',
            data: formData,
            dataType: 'html',
            success: function(response){
                $('#list').append(response);
            },
            error: function(error){
                console.log(error);
            }
        });
    });
})(jQuery);

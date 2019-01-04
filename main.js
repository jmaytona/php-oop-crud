$(document).ready(function(){

    load_data();
    $('#action').val("INSERT");//Set default action Insert

    function load_data() //Load Table function
    {
        var action = "LOAD";
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {action:action},
            success: function(data)
            {
                $('#user_table').html(data);
            }
        });
    }

    $('#user_form').on('submit', function(e){ //Submitfile
        e.preventDefault();
        var gameTitle = $('#gameTitle').val();
        var score = $('#score').val();
        var extension = $('#userImage').val().split('.').pop().toLowerCase();
        if(extension != '')
        {
            if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) //Validation for type of image
            {
                alert("Invalid Image File");
                $('#userImage').val('');
                return false;
            }
            $.ajax({
                url:"action.php",
                method:"POST",
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(Data)
                {
                    alert(Data);
                    $('#user_form')[0].reset();
                    load_data();
                }
            })

        }
    });

});//End Ready Function
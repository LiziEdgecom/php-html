

function deleteUser(){
    $(document).ready(function () {
        $('.deleteButton').click(function (e) {
            e.preventDefault();

            var id =  $(this).data('id');

            $.ajax({
                url: 'includes/delete.inc.php',
                method : 'POST',
                data : {method :'delete',id},
                success: function(result){
                    location.reload();
                    alert("User deleted");
                }
            })

        })
    })

}

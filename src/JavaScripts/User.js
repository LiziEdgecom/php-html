

function deleteUser(){
    $(document).ready(function () {
        $('.deleteButton').click(function (e) {
            e.preventDefault();

            var id =  $(this).data('id');

            $.ajax({
                url: 'includes/usersAdmin.inc.php',
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

function banUser(){
    $(document).ready(function () {
        $('.banButton').click(function (e) {
            e.preventDefault();
            var reason = prompt("Please state your reason:", "Inappropriate behavior");
            var id =  $(this).data('id');
            $.ajax({
                url: 'includes/usersAdmin.inc.php',
                method : 'POST',
                data : {method :'ban', id , reason},
                success: function(result){
                    location.reload();
                }
            })

        })
    })

}
function unbanUser(){
    $(document).ready(function () {
        $('.unbanButton').click(function (e) {
            e.preventDefault();

            var id =  $(this).data('id');

            $.ajax({
                url: 'includes/usersAdmin.inc.php',
                method : 'POST',
                data : {method :'unban',id },
                success: function(result){
                    location.reload();
                    alert("User banned");
                }
            })

        })
    })

}

<?php





function modal(){
    echo"<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">UPDATE</button>

   


<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Update your profile</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <form action='updateProfile.inc.php'>
      <div class=\"modal-body\">
         <div class=\"col - 75\">
            <input type=\"text\" name='name' placeholder='Name..' >
            </div>
             <div class=\"col - 75\">
            <input type=\"text\" name='email' placeholder='Email..' >           
            </div>
             <div class=\"col - 75\">
             <input type=\"text\" name='UID' placeholder='Username..' >            
            </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary pull-right\" data-dismiss=\"modal\">Close</button>
        <button type=\"submit\" class=\"btn btn-primary pull-left\">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
";
}


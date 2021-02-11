<?php
include_once 'Header.php';
require_once 'includes/dbd.inc.php';
require_once 'includes/functions.inc.php';

$text = getData($conn,(int)$_GET['articleID']);

?>

<div class = "login-form">
    <h2>Edit your text</h2>

    <form action="includes/updateArticle.inc.php?articleID=<?php echo $_GET['articleID'];?>" method="post">

        <div class="col-75">
            <textarea name="data" style="resize: none; height: 200px;" ><?php echo $text;?></textarea>
        </div>
        <input type="text" name="ID" hidden value="<?php echo $_GET['articleID'];?>">

        <button type="submit" name="submit" class="btn btn-primary" >
            UPDATE
        </button>
</div>

</form>






<?php
include_once 'Footer.php'
?>

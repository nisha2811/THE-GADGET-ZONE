<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel=stylesheet href=css/bootstrap.min.css>
<?php
include "includes/cust_header_dash.html";

include"connect.php";
session_start();
if(!isset($_SESSION['ebcuser']))
{
    header("location:login.php");
}

?>

<br><br><br>
<div class="container my-4"  > 
    <div class=row>
        <div class=col-4></div>
        <div class="col-4" style="margin-top:200px; padding:60px;">
                  


        </div>
        <div class=col-4>
</div>
</div>
</div>




<?php
include"includes/footer.html";


?>

<?php 
    header ("Expires: on, 01 Jan 2000 00:00:00 GMT");
    header ("Cache-Control: no-store, no-cache, must-revalidate");
    header ("Cache-Control: post-check=0, pre-check=0", false);
    header ("Pragma: no-cache");

    include "includes/header.php";
    include "DB/config/config.php";
    include "DB/queries/CRUD.php";
    include "DB/queries/form.php";
    include "includes/footer.php";    
?>
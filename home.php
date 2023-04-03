<?php
    require base_path("navbar.php");
    require base_path("htmlHeader.php");
?>
<h1>Welcome
    <span class="text-primary ms-2">
        <?= $_SESSION['user']['email'] ?>
    </span>
</h1>
<?php 
    require base_path("htmlFooter.php"); 
?>

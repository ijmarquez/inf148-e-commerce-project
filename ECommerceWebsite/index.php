<?php include('header.php'); ?>

<?php
    if($_GET['page'])
    {
        $page = $_GET['page'];
        $display = $page.'.php';
        include($display);
    }
    else
    {
        include('home.php');
    }
?>

<?php include('footer.php'); ?>


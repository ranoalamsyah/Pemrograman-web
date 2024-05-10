<?php
session_start();
if(!$_SESSION ['email']){
    header('location: index.html');
}
include_once('top.php');
include_once('menu.php');
?>
<?php
include_once('main_content.php')
?>
<?php
include_once('bottom.php');
?>
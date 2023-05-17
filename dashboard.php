<?php
session_start();
if(isset($_SESSION['username'])){
    if(isset($_POST['add_purchase'])){
        header("Location: form.php");
    }
    if(isset($_POST['View_All_Purchases'])){
        header("Location: retrieve.php");
    }
}
if(isset($_POST['Search Purchase'])){
    header("Location: search_purchase.php");
}

else{
    echo'username not set';
    header('Location: login.php');
}
?>
<form method ='post'>
<input type='submit' value= 'Add Purchase' name='add_purchase'>

<input type='submit' value='View All Purchase Record' name= 'View_All_Purchases'>

<input type='submit' value='Search Purchases' name = 'search_purchase'>
</form>



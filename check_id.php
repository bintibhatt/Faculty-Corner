<?php
    if(isset($_POST['login_enter']))
    {
        $id_entered = $_POST['id_entered'];
        header('Location: dashboard.php?id_entered='.$id_entered);
        
    }
?>
<?php

include_once 'helpers.php';
include_once 'loader.php';      

if (!$_GET) {
    header('Location: dogo.php?pagina=perfil');
}

if ($auth->check() == false)
{
    redirect('login.php');
} else 
{
    if($_SESSION)

    {
        $usuario = $usersDb->dbEmailSearch($_SESSION['logged']);
        $id = $usuario['id'];
        $avatarPath = $usersDb->retrieveAvatar($id);      
        
    }
}
   

    



?>      
<div class="avatar">
<img src="<?=$avatarPath?>">
</div>

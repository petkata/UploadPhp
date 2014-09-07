<?php
$pageTitle='Вход в системата';
include 'includes/header.php';
if(isset($_SESSION['Login'])==TRUE){
    header('Location:files.php');
}
 else {
    if($_POST){
        

    $username=  trim($_POST['username']);
    $pass=  trim($_POST['pass']);
    if($username=='user' && $pass=='qwerty') {
        $_SESSION['Login']=TRUE;
        header('Location: index.php');
        exit();
        }
    else{
        echo 'Грешен потребител или парола <n>';
    }
}
?>
<form method="POST">
    <div>
        Потребител: <input type="text" name="username" />
    </div>
    <div>
        Парола: <input type="password" name="pass" />
    </div>
    <div>
        <input type="submit" value="Вход" />
        <a href="reg.php">
   </a>
    </div>
</form>
<?php
 }


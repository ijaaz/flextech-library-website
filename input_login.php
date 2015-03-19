<?php 
session_start();
if(isset($_SESSION['loggedin'])){
    header('Location: input.php');
}

$wrong_pass = false;
$query_string = $_SERVER['QUERY_STRING'];

//This is really bad and hacky, will rewrite later
if(@($_GET['action']) == "login"){
    if($_POST['pass'] == "ftlb_login"){
        $_SESSION['loggedin'] = TRUE;
        header('Location: input.php');
    }
    else{
        $wrong_pass = true;
    }
}


?>
<form action="input_login.php?action=login" method="post" name="login" id="login">
    <?php 
    if($wrong_pass){
        echo '<p>Wrong password. Please ask a teacher for the correct one and try again<p>';
    }
    ?>
    <p>Login Pass:</p>
    <input type="password" name="pass" id="pass"><br>
</form>

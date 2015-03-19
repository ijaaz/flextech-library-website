<?php 
session_start;
if($_SESSION['loggedin']){
    echo('<script> window.open("input.php", _self)');
}
$query_string = $_SERVER['QUERY_STRING'];
if($query == "action=login"){
    if($_POST['pass'] == "ftlb_login"){
        $_SESSION['loggedin'] == TRUE;
        echo('<script> window.open("input.php", _self) </script>');
    }
    else{
        echo('<script> window.open("input_login.php", _self) </script>');
        $_SESSION['wrongpass'] = true;
    }
}


?>
<form action="input_login.php?action=login" method="post" name="login" id="login">
    <?php 
    if($_SESSION['wrongpass']){
        echo '<p>Wrong password. Please ask a teacher for the correct one and try again<p>';
        $_SESSION['wrongpass'] = false;
}
    ?>
    <p>Login Pass:</p>
    <input type="password" name="pass" id="pass"><br>
</form>
<!--Note: This section is for the English class to input books/others. There will be one username and password to have access to this resource-->
<?php 
session_start;
if($_SESSION['loggedin'] == FALSE){
    echo('<script> window.open("input_login.php", _self)');
}
$query = $_SERVER('QUERY_STRING');
if($query == "action=submit"){
    
}
?>
<form action="input.php?action=submit" method="post" name="register" id="register">
    <h4><font size="10">Sign Up</font></h4>
    <br>
    <br>
    <p>Title:</p>
    <input type="text" name="" id="username"><br>
    <p>Edition:</p>
    <input type="text" name="" id="username"><br>
    <p>Author:</p>
    <input type="text" name="" id="username"><br>
    <p>Genre:</p>
    <input type="text" name="" id="username"><br>
    <p>Category:</p>
    <input type="text" name="" id="username"><br>
    <p>ISBN(Please remove all '-'s):</p>
    <input type="text" name="" id="username"><br>
    <p>Publisher:</p>
    <input type="text" name="" id="username"><br>
    <p>Year Published:</p>
    <input type="text" name="" id="username"><br>
    <p>Amazon Link:</p>
    <input type="text" name="" id="username"><br>
    <p>Page Count:</p>
    <input type="text" name="" id="username"><br>
    <p>Link to image cover: (Should be a .jpg, .png, or .gif)</p>
    <input type="text" name="" id="username"><br>
    <br>
    <br>
    <input type="submit" value="Submit" autofocus>
</form>
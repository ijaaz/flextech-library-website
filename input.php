<!--Note: This section is for the English class to input books/others. There will be one username and password to have access to this resource-->
<?php 
session_start;
if($_SESSION['loggedin'] == FALSE){
    echo('<script> window.open("input_login.php", _self)');
}
$query_string = $_SERVER('QUERY_STRING');
if($query_string == "action=submit"){
    //Just double checking :P
    if($_SESSION['loggedin']){
        $title = mysqli_escape_string($_POST['title']); 
        $edition = mysqli_escape_string($_POST['edition']);
        $author = mysqli_escape_string($_POST['author']);
        $genre = mysqli_escape_string($_POST['category']);
        $isbn = mysqli_escape_string($_POST['isbn']);
        $publisher = mysqli_escape_string($_POST['publisher']);
        $year_published = mysqli_escape_string($_POST['publishyear']);
        $amazon = mysqli_escape_string($_POST['amazon']);
        $pagenum = mysqli_escape_string($_POST['pagenum']);
        $loc = mysqli_escape_string($_POST['location']);
        $cover = mysqli_escape_string($_POST['cover']);
        //End of SQL variable
        //Connect to MySQL Database.
        $db = new mysqli_connect($SQL_Host, $SQL_Username, $SQL_Password, $SQL_Database);
        //Insert values.
        mysqli_query($db, "INSERT INTO `book` (`ID`, `title`, `edition`, `author`, `genre`, `category`, `isbn`, `publisher`, `year_published`, `amazon_href`, `ebook_href`, `location`, `pages`, `cover`) VALUES ('$title', '$edition', '$author', '$genre', '$category', '$isbn', '$publisher', '$year_published', '$amazon', '$ebook', '$loc', '$pagenum', '$cover')");
    
    
    }
}
?>
<form action="input.php?action=submit" method="post" name="database" id="database">
    <br>
    <p>Title:</p>
    <input type="text" name="title" id="title"><br>
    <p>Edition:</p>
    <input type="text" name="edition" id="edition"><br>
    <p>Author:</p>
    <input type="text" name="author" id="author"><br>
    <p>Genre:</p>
    <input type="text" name="genre" id="genre"><br>
    <p>Category:</p>
    <input type="text" name="category" id="category"><br>
    <p>ISBN(Optional, Please remove all '-'s):</p>
    <input type="text" name="ISBN" id="isbn"><br>
    <p>Publisher:</p>
    <input type="text" name="publisher" id="publisher"><br>
    <p>Year Published:</p>
    <input type="text" name="publishyear" id="publishyear"><br>
    <p>Amazon Link:</p>
    <input type="text" name="amazon" id="amazon"><br>
    <p>Ebook URL:</p>
    <input type="text" name="ebook" id="ebook"><br>
    <p>Page Count:</p>
    <input type="text" name="pagenum" id="pagenum"><br>
    <p>Location (Either PDF link, or room that it's in.):</p>
    <input type="text" name="location" id="location"><br>
    <p>Link to image cover: (Should be a .jpg, .png, or .gif)</p>
    <input type="text" name="coverlink" id="coverlink"><br>
    <br>
    <br>
    <input type="submit" value="Submit" autofocus>
</form>
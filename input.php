<!--Note: This section is for the English class to input books/others. There will be one username and password to have access to this resource-->
<?php 
include_once('database-info.php');

function dbtype($var) {
    switch(gettype($var)) {
        case 'string':
            return 's';
            break;

        case 'integer':
        case 'double':
        case 'float':
            return 'i';
            break;
    }
}

//Temporary shortcut(s)
function clean($var) {
    return htmlentities(mysqli_escape_string($var));
}

function post($name) {
    if(isset($_POST[$name])) {
        return clean($_POST[$name]);
    }

    return null;
}

session_start();
if(!isset($_SESSION['loggedin'])){
    header('Location: input_login.php');
}

if(@($_GET['action']) == 'submit'){
    //Just double checking :P
    if($_SESSION['loggedin'] && $_POST) {
        //This is really hacky, will rewrite later
        $binds = [
            'title' => post('title'),
            'edition' => post('edition'),
            'author' => post('author'),
            'genre' => post('genre'),
            'isbn' => str_replace('-', '', post('isbn')),
            'publisher' => post('publisher'),
            'year_published' => post('year_published'),
            'amazon' => post('amazon'),
            'pagenum' => post('pagenum'),
            'location' => post('location'),
            'cover' => post('cover')
        ];
        //Connect to MySQL Database.
        $db = new mysqli_connect($SQL_Host, $SQL_Username, $SQL_Password, $SQL_Database);
        //Insert values.
        $stmt = mysqli_prepare($db, 'INSERT INTO `book` VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?');

        foreach($binds as $name => $value) {
            mysqli_stmt_bind_param($stmt, dbtype($value), $value);
        }
    
        mysqli_stmt_execute($stmt);
>>>>>>> origin/master
    }
mysql_close;
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
    <p>ISBN(Optional):</p>
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
    <input type="text" name="cover" id="cover"><br>
    <br>
    <br>
    <input type="submit" value="Submit" autofocus>
</form>

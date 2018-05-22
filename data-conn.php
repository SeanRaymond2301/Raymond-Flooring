<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "floor-web-content";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* ---------- DB functions ---------- */

/* ---------- Add (create) a page ---------- */
function addPage($HTML, $Keywords, $Description, $Title, $Nav_Name) {
    global $conn;
    $sql = "INSERT INTO content (HTML, Keywords, Description, Title, Nav_Name) VALUES ('$HTML', '$Keywords', '$Description', '$Title', '$Nav_Name')";

    if ($conn->query($sql) === TRUE) {
        echo "New page created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit (update) a page ---------- */
function updatePage($HTML, $Keywords, $Description, $Title, $Nav_Name, $pid) {
    global $conn;
    $sql = "UPDATE content SET HTML='$HTML', Keywords='$Keywords', Description='$Description', Title='$Title', Nav_Name='$Nav_Name' WHERE ContentID=$pid";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete a page ---------- */
function deletePage($ContentID) {
    global $conn;
    $sql = "DELETE FROM content WHERE ContentID=$ContentID LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo "Page deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Login ---------- */

function doLogin($un,$pw){
    $adminun = "us3r"; // this is not a secure way to handle login! The is bad and lazy for demo purposes...
    $adminpw = "passw0rd"; // do not do this for a production website
    if( $un == $adminun && $pw == $adminpw){
        $_SESSION['isadmin'] = 1;
        header('Location: db_list.php');
        //echo "Login Success";
    } else {
        $_SESSION['isadmin'] = 0;
        header('Location: login.php');
        //echo "Login Fail";
    }

}

function doLogout() {
    $_SESSION['isadmin'] = 0;
}

//Credit to Mr. Fast

?>

<?php
session_start();
echo password_hash("7aD421859DH12C9n");
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
    $sql = "INSERT INTO `floor-web-content` (Pros, Cons, Content, PageTitle, NavTitle) VALUES ('$Pros', '$Cons', '$Content', '$PageTitle', '$NavTitle')";

    if ($conn->query($sql) === TRUE) {
        echo "New page created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit (update) a page ---------- */
function updatePage($HTML, $Keywords, $Description, $Title, $Nav_Name, $pid) {
    global $conn;
    $sql = "UPDATE content SET HTML='$Cons', Keywords='$Pros', Description='$Content', Title='$PageTitle', NavTitle='$NavTitle' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete a page ---------- */
function deletePage($ContentID) {
    global $conn;
    $sql = "DELETE FROM `floor-web-content` WHERE ID=$ID LIMIT 1";

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
        header('Location: data-list.php');
        //echo "Login Success";
    } else {
        $_SESSION['isadmin'] = 0;
        header('Location: login.php');
        echo "Login Failed";
    }

}

function doLogout() {
    $_SESSION['isadmin'] = 0;
}

//Credit to Mr. Fast

?>

<?php
session_start();
//echo password_hash("7aD421859DH12C9n", PASSWORD_DEFAULT);
$servername = "web01.cart.ads";
$username = "cartweb";
$password = "wC4tJ3pRKzvXSn4X";
$dbname = "floor-web-content";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}

/* ---------- DB functions ---------- */

/* ---------- Add (create) a page ---------- */
function addPage($Pros, $Cons, $PageContent, $PageTitle, $NavTitle) {
    global $conn;

    $sql = "INSERT INTO `floor-web-content` (Pros, Cons, PageContent, PageTitle, NavTitle) VALUES ('$Pros', '$Cons', '$PageContent', '$PageTitle', '$NavTitle')";

    if ($conn->query($sql) === TRUE) {
        echo "New page created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

/* ---------- Edit (update) a page ---------- */
function updatePage($Cons, $Pros, $PageContent, $PageTitle, $NavTitle, $ID) {
    global $conn;
    $sql = "UPDATE `floor-web-content` SET Cons='$Cons', Pros='$Pros', PageContent='$PageContent', PageTitle='$PageTitle', NavTitle='$NavTitle' WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo("Page updated.");
    } else {
        echo("Error: " . $sql . "<br>" . $conn->error);
    }
}

/* ---------- Delete a page ---------- */
function deletePage($ContentID) {
    global $conn;
    $sql = "DELETE FROM `floor-web-content` WHERE ID=$ContentID LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo "Page deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Login ---------- */

function doLogin($un,$pw){
    $adminun = "mattray67";
    $adminpw = "thing";
    if($un == $adminun && $pw == $adminpw){
        $_SESSION['isadmin'] = 1;
        header('Location: ?page=data-list');
        //echo "Login Success";
    } else {
        $_SESSION['isadmin'] = 0;
        header('Location: ?page=login');
        echo "Login Failed";
    }

}

function doLogout() {
    $_SESSION['isadmin'] = 0;
}

//Credit to Mr. Fast

?>

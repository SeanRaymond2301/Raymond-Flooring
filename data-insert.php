<?php
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        if (isset($_POST['Title'])){
            addPage($_POST['HTML'], $_POST['Keywords'], $_POST['Description'], $_POST['Title'], $_POST['Nav_Name']);
        }
    } else {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Demos</title>
</head>
<body>
  <?php require('header.php'); ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_insert.php" method="post">
           <label for="Title">Title</label>
           <input name="Title" id="Title" type="text" required>

           <label for="Nav_Name">Navigation Name</label>
           <input name="Nav_Name" id="Nav_Name" type="text" required>

           <label for="Keywords">Keywords</label>
           <input name="Keywords" id="Keywords" type="text" required>

           <label for="Description">Description</label>
           <input name="Description" id="Description" type="text" required>

           <label for="HTML">HTML</label>
           <textarea name="HTML" id="HTML" cols="30" rows="20" required></textarea>

           <input type="submit"> <input type="reset">
        </form>
    </div>
</div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
<?php $conn->close(); ?>

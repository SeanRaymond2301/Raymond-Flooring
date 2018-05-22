<?php
    require('data-conn.php');
    if ($_SESSION['isadmin'] == 1){
        if (isset($_POST['PageTitle'])){
            addPage($_POST['Pros'], $_POST['Cons'], $_POST['Content'], $_POST['PageTitle'], $_POST['NavTitle']);
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
        <form action="data-insert.php" method="post">

              <label for="PageTitle">Page Title</label>
              <input name="PageTitle" id="PageTitle" type="text" required value="<?php echo $row['PageTitle'];?>">

              <label for="NavTitle">Navigation Name</label>
              <input name="NavTitle" id="NavTitle" type="text" required value="<?php echo $row['NavTitle'];?>">

              <label for="Page Content">Page Content</label>
              <input name="Page Content" id="Page Content" type="text" required value="<?php echo $row['Page Content'];?>">

              <label for="Pros">Pros</label>
              <input name="Pros" id="Pros" type="text" required value="<?php echo $row['Pros'];?>">

              <label for="Cons">Cons</label>
              <textarea name="Cons" id="Cons" type="text" required><?php echo $row['Cons'];?></textarea>

              <input type="submit"><input type="reset">
        </form>
    </div>
</div>

</body>
</html>
<?php $conn->close(); ?>

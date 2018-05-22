<?php
    require('data-conn.php');
    if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data-Edit </title>
</head>
<body>
  <?php require('header.php'); ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_list.php" method="post">
          <?php
            if (isset($_GET['pid'])) {
                $ContentID = $_GET['pid'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM content WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ID" value="<?php echo $row['ID'];?>" >

           <label for="PageTitle">Title</label>
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
           <?php }
            } else {
                echo "Failed to load content.";
            }
           ?>
        </form>
    </div>
</div>
</body>
</html>
<?php $conn->close(); ?>

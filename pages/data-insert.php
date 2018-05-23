<?php
    require('data-conn.php');
    if ($_SESSION['isadmin'] == 1){
        if (isset($_POST['PageTitle'])){
            addPage($_POST['Pros'], $_POST['Cons'], $_POST['PageContent'], $_POST['PageTitle'], $_POST['NavTitle']);
        }
    } else {
        header('Location: ?page=login');
    }
?>

  <?php require('../header.php'); ?>
  <div class="row">
    <div class="large-12 columns">
        <form action="data-insert.php" method="post">

              <label for="PageTitle">Page Title</label>
              <input name="PageTitle" id="PageTitle" type="text" required value="<?php echo $row['PageTitle'];?>">

              <label for="NavTitle">Navigation Name</label>
              <input name="NavTitle" id="NavTitle" type="text" required value="<?php echo $row['NavTitle'];?>">

			  <label for="PageContent">Page Content</label>
              <textarea name="PageContent" id="PageContent" type="text" required rows="30"><?php echo $row['PageContent'];?></textarea>

              <label for="Pros">Pros</label>
              <textarea name="Pros" id="Pros" type="text" required rows="30"><?php echo $row['Pros'];?></textarea>

              <label for="Cons">Cons</label>
              <textarea name="Cons" id="Cons" type="text" required rows="30"><?php echo $row['Cons'];?></textarea>

              <input type="submit"><input type="reset">
        </form>
    </div>
</div>
<?php $conn->close(); ?>

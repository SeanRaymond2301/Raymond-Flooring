<?php
    if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: ?page=login');
    }

?>

  <div class="row">
    <div class="large-12 columns">
        <form action="?page=data-list" method="post">
          <?php
            if (isset($_GET['pid'])) {
                $ContentID = $_GET['pid'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM `floor-web-content` WHERE ID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ID" value="<?php echo $row['ID'];?>" >

           <label for="PageTitle">Page Title</label>
           <input name="PageTitle" id="PageTitle" type="text" required value="<?php echo $row['PageTitle'];?>">

           <label for="NavTitle">Navigation Title</label>
           <input name="NavTitle" id="NavTitle" type="text" required value="<?php echo $row['NavTitle'];?>">

           <label for="PageContent">Page Content</label>
           <textarea name="PageContent" id="PageContent" type="text" required rows="30"><?php echo $row['PageContent'];?></textarea>

           <label for="Pros">Pros</label>
           <textarea name="Pros" id="Pros" type="text" required rows="30"><?php echo $row['Pros'];?></textarea>

           <label for="Cons">Cons</label>
           <textarea name="Cons" id="Cons" type="text" required rows="30"><?php echo $row['Cons'];?></textarea>

           <input type="submit"><input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }
           ?>
        </form>
    </div>
</div>
<?php $conn->close(); ?>

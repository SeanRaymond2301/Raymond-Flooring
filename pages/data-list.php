<?php
    require('data-conn.php');
    if ($_SESSION['isadmin'] == 1){




                if (isset($_GET['del'])){
                    deletePage($_GET['del']);
                }
                if (isset($_POST['PageTitle'])){
                    updatePage(
                    $_POST['Cons'],
                    $_POST['Pros'],
					$_POST['PageContent'],
                    $_POST['PageTitle'],
                    $_POST['NavTitle'],
                    $_POST['ID']);
                }


    } else {
        header('Location: login.php');
    }

?>
  <?php require('header.php'); ?>

  <div class="row">
    <div class="large-12 columns">
    <h1>Pages to Edit</h1>
    <?php
        $sql = "SELECT ID, NavTitle FROM `floor-web-content`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='data-edit.php?pid=".$row['ID']."'>".$row['NavTitle']."</a> | <a style='color:red;' href='?del=".$row['ID']."'>(del)</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    <br>
    <a href="data-insert.php" class="button">Add a Page</a>
    <a href="login.php?logout" class="button alert">Logout</a>

    </div>
</div>
<?php $conn->close(); ?>

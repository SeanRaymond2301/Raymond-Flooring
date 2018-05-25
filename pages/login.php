<?php
    if(isset($_GET['logout'])){
        doLogout();
    }
    if(isset($_POST['un'])){
        doLogin($_POST['un'],$_POST['pw']);
    }
?>
  <div class="row">
    <div class="large-4 small-centered columns">
        <form method="post" action="?page=login">
            <br>
            <input name="un" type="text" placeholder="username">
            <input name="pw" type="password" placeholder="password">
            <input class="button" type="submit" value="Login">
        </form>
    </div>
</div>
<?php $conn->close(); ?>

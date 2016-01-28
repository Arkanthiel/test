  <?php
      //if (!isset($_SESSION['user'])
      //  {
      //    header("location:main_login.php");
      //  }
      session_start();
if (!(isset($_SESSION['user']) && $_SESSION['user'] != '')) {
  header ("Location: main_login.php");
}
  ?>

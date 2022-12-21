<?php
session_start();

if(!isset($_SESSION['un_id'])){

    header("location:login.php");
}
?>

<?php

include_once("adminnav.php");

?>

<?php
include_once("container.php");

?>

<div class="right_container">
<?php

?>
</div>





</body>

</html>
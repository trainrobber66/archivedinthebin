<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  echo 'done!';
  echo '<a href="http://www.website.com/page.html">go back</a>';
   // do logic
  $com = $_GET['com'];
}
?>

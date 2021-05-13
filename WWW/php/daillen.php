<!DOCTYPE html>
<html>
<header>
    <meta chars
</header>
<head>
</head>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['user_name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

?>
</body>
</html>
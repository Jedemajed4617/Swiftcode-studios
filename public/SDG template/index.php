<?php
include('db_conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG CARDS</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="app.js" ></script>
</head>
<body>
<ul class="gallery">
  <?php include('sdg.php'); ?>
</ul>
</body>
</html>

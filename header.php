<!DOCTYPE html>
<html lang="en">
<head>
    <title>
      <?php 
          if(empty($title)) {
          echo "My page!";
        }
          else {
          echo $title;
        }
      ?>
    </title>

    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>
</head>
<body>
<h1>PHP-Site</h1>
<a href="index.php"> Start </a> | <a href="about.php"> om oss</a>
    
</body>
</html>
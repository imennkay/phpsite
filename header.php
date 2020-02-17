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
    
</body>
</html>
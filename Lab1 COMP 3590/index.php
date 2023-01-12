<!-- <?php include("header.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action='language.php' method='post'>
        <label for="language">Choose a language:</label>
  <select name="language" id="language">
    <option value="eng">English</option>
    <option value="french">French</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
        </form>
</body>
</html>
<?php include("footer.php"); ?> -->
<?php
  include 'header.php';
?>

<form method="post" action="language.php">
  <label for="language">Select a language:</label><br>
  <select name="language">
    <option value="english">English</option>
    <option value="french">French</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<?php
  include 'footer.php';
?>


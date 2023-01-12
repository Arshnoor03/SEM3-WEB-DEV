<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php
  include 'header.php';

  $DaysEnglish = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
  $DaysFrench = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

  if (isset($_POST['language']) && $_POST['language'] == "english") {
    $days = $DaysEnglish;
  } else {
    $days = $DaysFrench;
  }
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Day</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($days as $day) {
        echo "<tr><td>" . $day . "</td></tr>";
      }
    ?>
  </tbody>
</table>

<?php
  include 'footer.php';
?>

</html>

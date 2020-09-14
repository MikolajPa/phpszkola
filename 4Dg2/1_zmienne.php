<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
    $name='Krystyna';
      echo 'Imię: $name<br>';
      echo "Imię: $name<br>";
      #typy danych
      $prawda = true;
      $falsz = false;
      echo $prawda;
      echo $falsz;
      $bin = 0b1010;
      echo " $bin";
      $dex = 10;
      $oct = 0432;
      $hex= 0x10;
      echo " $hex";

      $name = 'Anna';
      $text = <<<LABEL
        Imię: $name
      LABEL;

      echo <<<LABEL
        <br>Herdoc2<br>
        Imię: $name
      LABEL;

      echo $text;

      echo '<br>';

      $city='Poznań';
      echo "Nazwa miasta \$city";
     ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Print URL</title>
  </head>
  <body>

    <?php
    //get json file
     $json_contant = file_get_contents('contant.json');

    //decode it
     $items = json_decode($json_contant, true);
     //print items url
     echo $items['items'][0]["url"];
     echo "</br>";
     echo $items['items'][1]["url"];
    ?>

  </body>
</html>

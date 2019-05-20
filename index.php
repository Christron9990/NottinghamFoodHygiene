<?php
include_once ('database/createDatabase.php');
$database = new Database();
$database->CreateTables();
?>
<!doctype html>
<html lang = "en-UK">
    <head>
      <meta charset = "UTF-8" />
      <meta http-equiv="u-xa-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Nottingham City Food Hygiene Statistics</title>

      <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>

      <header>
        <h1>Nottingham City Food Hygiene Statistics</h1>
        <p>This website provides Food Hygiene stats for the Nottingham City area,
          as provided by http://data.gov.uk</p>
      </header>

      <div id ="container">
      <nav>
        <p>Nav</p>
      </nav>
      <section>
        <p>Space for tables/piecharts/etc.</p>
      </section>
      <aside>
        <p>notes and shit</p>
      </aside>
      <div>

      <footer>
        <p>This is the footer - links to other sites and that jive</p>
      </footer>

    </body>
</html>

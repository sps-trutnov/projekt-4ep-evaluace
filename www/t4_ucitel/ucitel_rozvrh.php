<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Učitelský rozvrh</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="ucitel_rozvrh.js"></script>
</head>
<body>
  <?php
    require_once "../../config.php";
    $spojeni = mysqli_connect(dbhost, dbuser, dbpass, dbname);
    session_start();
    if ($_SESSION['idUcitel'] == NULL) {
      header("location:ucitel_prihlaseni.html");
    }
  ?>
  <header>
    <h1>Učitelský rozvrh</h1>
  </header>
  <div id="stranka">
    
  <button id="upravy">Upravit</button>
  &nbsp;
  <button id="sudyLichy"></button>
  &nbsp;
  <form method="post" action="ucitel_odhlaseni.php">
    <input type="submit" value="Odhlásit se" />
    <!--<button>Odhlásit se</button>-->
  </form>
  <div id="ucitel">
  <table>
    <thead>
      <tr>
        <th></th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
      </tr>
    </thead>
    <tbody id="rozvrh">
    </tbody>
  </table>
</div>
  <div id="popup" style="display: none;">
    <select id="predmet">
    </select><br>
    <select id="trida">
    </select><br>
    <select id="skupina">
      <option value="" selected disabled hidden>Vyberte skupinu</option>
      <option value="0">celá třída</option>
      <option value="1">1. skupina</option>
      <option value="2">2. skupina</option>
    </select><br>
    <input type="submit" value="Potvrdit" id="potvrdit">
  </div>
  <div id="datum" style="display: none;">
    <div id='startdate'>
        <label for="start">Počáteční datum výběru:</label>
        <input onchange="zmenacasu()" type="date" id="start" name="end" value="">
    </div>
    <div id='enddate'>
        <label for="end">Konečné datum výběru:</label>
        <input onchange="zmenacasu()" type="date" id="end" name="end" value="" min="" max=""><br>
    </div>
    <div>
        <input type="submit" value="Reset" onclick="reset()">
    </div>
  </div>
  <div id="temata">
  </div>
  <div id="popupTema" style="display: none;">
  
  </div>
</body>
<footer>
  <address> &copy; 2020-2021 | 4.EP | #SPŠ101 </address>
  *Image by <a href="https://pixabay.com/users/chiplanay-1971251/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4232859">chiplanay</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4232859">Pixabay</a>
</footer>
</html>
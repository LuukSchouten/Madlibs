<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Madlibs.css">
    <title>Document</title>
</head>
<body>

<div class="main">

    <div class="logo">
        <h1>MAD LIBS</h1>
    </div>

    <div class="header">
        <a href="paniek.php"><p class="links" id="Paniek">Er heerst paniek...</p></a>
        <a href="onkunde.php"><p class="links" id="Onkunde">Onkunde</p></a>
    </div>
    
    <div class="middle">
        <div class="wrapper">
            <h1>Onkunde</h1>
                Er heerst paniek in het koninkrijk <?php echo $_POST["land"];?>, Koning <?php echo $_POST["docent"];?> is ten einde 
                raad en als koning <?php echo $_POST["docent"];?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer
                <?php echo $_POST["persoon"];?>.
                </br>
                </br>
                "<?php echo $_POST["persoon"];?>! Het is een ramp! Het is een schande!"
                </br>
                </br>
                "Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"
                </br>
                </br>
                "Mijn <?php echo $_POST["huisdier"];?> is verdwenen! Zo maar, zonder waarschuwing.
                 En ik had net <?php echo $_POST["speelgoed"];?> voor hem gekocht!"
                </br>
                </br>
                "Majesteit, uw <?php echo $_POST["huisdier"];?> komt vast vanzelf weer terug?"
                </br>
                </br>
                "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"];?> leren?"
                </br>
                </br>
                "Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"];?> voor gebruiken."
                </br>
                </br>
                "<?php echo $_POST["persoon"];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
                </br>
                </br>
                "<?php echo $_POST["verveelt"];?>, Sire."
        </div>
    </div>

    <div class="footer">
        <p>&copy; Luuk Schouten 2021</p>
    </div>

</div>

<?php 

$name = "";
$nameErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Vul iets in";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Alleen letters en witregels zijn toegestaan";
      }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
?>

</body>
</html>
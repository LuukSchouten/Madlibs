<?php 

$huisdierErr = $persoonErr = $landErr = $verveeltErr = $speelgoedErr = $spijbelErr = $geldErr = $bezigheidErr = "";
$huisdier = $persoon = $land = $verveelt = $speelgoed = $spijbel = $geld = $bezigheid = "";
$validated = true;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["huisdier"])) {
      $huisdierErr = "Vul iets in";
      $validated = false;
    } else {
      $huisdier = test_input($_POST["huisdier"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$huisdier)) {
        $huisdierErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }
  
    if (empty($_POST["persoon"])) {
      $persoonErr = "Vul iets in";
      $validated = false;
    } else {
      $persoon = test_input($_POST["persoon"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$persoon)) {
        $persoonErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }
  
    if (empty($_POST["land"])) {
      $landErr = "Vul iets in";
      $validated = false;
    } else {
      $land = test_input($_POST["land"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$land)) {
        $landErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }
  
    if (empty($_POST["verveelt"])) {
      $verveeltErr = "Vul iets in";
      $validated = false;
    } else {
      $verveelt = test_input($_POST["verveelt"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$verveelt)) {
        $verveeltErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }
  
    if (empty($_POST["speelgoed"])) {
      $speelgoedErr = "Vul iets in";
      $validated = false;
    } else {
      $speelgoed = test_input($_POST["speelgoed"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$speelgoed)) {
        $speelgoedErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }

    if (empty($_POST["spijbel"])) {
        $spijbelErr = "Vul iets in";
        $validated = false;
    } else {
        $spijbel = test_input($_POST["spijbel"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$spijbel)) {
          $spijbelErr = "Alleen letters en witregels toegestaan";
          $validated = false;
        }
    }

    if (empty($_POST["geld"])) {
        $geldErr = "Vul iets in";
        $validated = false;
    } else {
        $geld = test_input($_POST["geld"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$geld)) {
          $geldErr = "Alleen letters en witregels toegestaan";
          $validated = false;
        }
    }

    if (empty($_POST["bezigheid"])) {
        $bezigheidErr = "Vul iets in";
        $validated = false;
    } else {
        $bezigheid = test_input($_POST["bezigheid"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$bezigheid)) {
          $bezigheidErr = "Alleen letters en witregels toegestaan";
          $validated = false;
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
        <h1>Er heerst paniek...</h1>
        
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" and $validated == true){?>
          <style> .formpie{display: none;}</style>
          Er heerst paniek in het koningkrijk <?php echo $_POST["land"];?>. Koning <?php echo $_POST["spijbel"];?> is ten einde raad en als koning
          </br>
          <?php echo $_POST["spijbel"];?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"];?>.
          </br>
          </br>
          "<?php echo $_POST["persoon"];?> Het is een ramp! Het is een schande!"
          </br>
          </br>
          "Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"
          </br>
          </br>
          "Mijn <?php echo $_POST["huisdier"];?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"];?> voor hem 
          </br>
          gekocht!"
          </br>
          </br>
          "Majesteit, uw <?php echo $_POST["huisdier"];?> komt vast vanzelf weer terug?"
          </br>
          </br>
          "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["bezigheid"];?> leren?"
          </br>
          </br>
          "Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"];?> voor gebruiken?"
          </br>
          </br>
          "<?php echo $_POST["persoon"];?>, je hebt helemaal gelijk!, Wat zou ik doen als ik jou niet had"
          </br>
          </br>
          "<?php echo $_POST["verveelt"];?>, Sire"

          
        <?php } ?>

            <div class="formpie">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="formdivs">
                    <label for="text">Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" name="huisdier" class="inputstuff" value="<?php echo $huisdier;?>"/>
                    <span class="error">* <?php echo $huisdierErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" name="persoon" class="inputstuff" value="<?php echo $persoon;?>"/>
                    <span class="error">* <?php echo $persoonErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">In welk land zou je graag willen wonen?</label>
                    <input type="text" name="land" class="inputstuff" value="<?php echo $land;?>"/>
                    <span class="error">* <?php echo $landErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wat doe je als je je verveelt?</label>
                    <input type="text" name="verveelt" class="inputstuff" value="<?php echo $verveelt;?>"/>
                    <span class="error">* <?php echo $verveeltErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" name="speelgoed" class="inputstuff" value="<?php echo $speelgoed;?>"/>
                    <span class="error">* <?php echo $speelgoedErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Bij welke docent spijbel je het liefst?</label>
                    <input type="text" name="spijbel" class="inputstuff" value="<?php echo $spijbel;?>"/>
                    <span class="error">* <?php echo $spijbelErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Als je € 100.000,- had, wat zou je dan kopen?</label>
                    <input type="text" name="geld" class="inputstuff" value="<?php echo $geld;?>"/>
                    <span class="error">* <?php echo $geldErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wat is je favoriete bezigheid?</label>
                    <input type="text" name="bezigheid" class="inputstuff" value="<?php echo $bezigheid;?>"/>
                    <span class="error">* <?php echo $bezigheidErr;?></span>
                </div>
                <div class="submitdiv">
                    <input type="submit" value="Submit" class="submitbtn">
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; Luuk Schouten 2021</p>
    </div>

</div>


</body>
</html>
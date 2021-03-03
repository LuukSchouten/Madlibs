<?php 

$kunnenErr = $persoonErr = $getalErr = $vakantieErr = $eigenschapgoedErr = $eigenschapslechtErr = $overkomenErr = "";
$kunnen = $persoon = $getal = $vakantie = $eigenschapgoed = $eigenschapslecht = $overkomen = "";
$validated = true;


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["kunnen"])) {
      $kunnenErr = "Vul iets in";
      $validated = false;
    } else {
      $kunnen = test_input($_POST["kunnen"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$kunnen)) {
        $kunnenErr = "Alleen letters en witregels toegestaan";
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
  
    if (empty($_POST["getal"])) {
      $getalErr = "Vul iets in";
      $validated = false;
    } else {
      $getal = test_input($_POST["getal"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$getal)) {
        $getalErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }
  
    if (empty($_POST["vakantie"])) {
      $vakantieErr = "Vul iets in";
      $validated = false;
    } else {
      $vakantie = test_input($_POST["vakantie"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$vakantie)) {
        $vakantieErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }
  
    if (empty($_POST["eigenschapgoed"])) {
      $eigenschapgoedErr = "Vul iets in";
      $validated = false;
    } else {
      $eigenschapgoed = test_input($_POST["eigenschapgoed"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$eigenschapgoed)) {
        $eigenschapgoedErr = "Alleen letters en witregels toegestaan";
        $validated = false;
      }
    }

    if (empty($_POST["eigenschapslecht"])) {
        $eigenschapslechtErr = "Vul iets in";
        $validated = false;
      } else {
        $eigenschapslecht = test_input($_POST["eigenschapslecht"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$eigenschapslecht)) {
          $eigenschapslechtErr = "Alleen letters en witregels toegestaan";
          $validated = false;
        }
      }

    if (empty($_POST["overkomen"])) {
        $overkomenErr = "Vul iets in";
        $validated = false;
    } else {
        $overkomen = test_input($_POST["overkomen"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$overkomen)) {
          $overkomen = "Alleen letters en witregels toegestaan";
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
        <div class="wrapper" name="wrap">
            <h1>Onkunde</h1>

          <?php if ($_SERVER["REQUEST_METHOD"] == "POST" and $validated == true){?>

            <style> .formpie{display: none;}</style>
            Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"];?>, 
            Neem nou <?php echo $_POST["persoon"];?>, Zelfs met de hulp van een <?php echo $_POST["vakantie"];?> of zelfs 
            <?php echo $_POST["getal"];?> kan <?php echo $_POST["persoon"];?> niet <?php echo $_POST["kunnen"];?>. Dat heeft niet te maken met 
            een gebrek aan <?php echo $_POST["eigenschapgoed"];?> maar met een te veel aan <?php echo $_POST["eigenschapslecht"];?>.
            Te veel <?php echo $_POST["eigenschapslecht"];?> leid tot <?php echo $_POST["overkomen"];?> en dat is niet goed als je wilt
            <?php echo $_POST["kunnen"];?>. Helaas voor <?php echo $_POST["persoon"];?>.
          
          <?php } ?>
          
            <div class="formpie">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="formdivs">
                    <label for="text">Wat zou je graag willen kunnen?</label>
                    <input type="text" name="kunnen" class="inputstuff" value="<?php echo $kunnen;?>"/>
                    <span class="error">* <?php echo $kunnenErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Met welke persoon kun je goed opschieten?</label>
                    <input type="text" name="persoon" class="inputstuff" value="<?php echo $persoon;?>"/>
                    <span class="error">* <?php echo $persoonErr;?></span>
                    
                </div>
                <div class="formdivs">
                    <label for="text">Wat is je favoriete getal?</label>
                    <input type="text" name="getal" class="inputstuff" value="<?php echo $getal;?>"/>
                    <span class="error">* <?php echo $getalErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" name="vakantie" class="inputstuff" value="<?php echo $vakantie;?>"/>
                    <span class="error">* <?php echo $vakantieErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" name="eigenschapgoed" class="inputstuff" value="<?php echo $eigenschapgoed;?>"/>
                    <span class="error">* <?php echo $eigenschapgoedErr;?></span>
                  
                </div>
                <div class="formdivs">
                    <label for="text">Wat is je slechtste persoonlijke eigenschap?</label>
                    <input type="text" name="eigenschapslecht" class="inputstuff" value="<?php echo $eigenschapslecht;?>"/>
                    <span class="error">* <?php echo $eigenschapslechtErr;?></span>
                
                </div>
                <div class="formdivs">
                    <label for="text">Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" name="overkomen" class="inputstuff" value="<?php echo $overkomen;?>"/>
                    <span class="error">* <?php echo $overkomenErr;?></span>
                   
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
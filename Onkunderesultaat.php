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

<?php 

$kunnen = "";
$kunnenErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kunnen"])) {
      $kunnenErr = "Vul iets in";
    } else {
      $kunnen = test_input($_POST["kunnen"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$kunnen)) {
        $kunnenErr = "Alleen letters en witregels zijn toegestaan";
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
                Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"];?>, 
                Neem nou <?php echo $_POST["persoon"];?>, Zelfs met de hulp van een <?php echo $_POST["vakantie"];?> of zelfs 
                <?php echo $_POST["getal"];?> kan <?php echo $_POST["persoon"];?> niet <?php echo $_POST["kunnen"];?>. Dat heeft niet te maken met 
                een gebrek aan <?php echo $_POST["eigenschapgoed"];?> maar met een te veel aan <?php echo $_POST["eigenschapslecht"];?>.
                Te veel <?php echo $_POST["eigenschapslecht"];?> leid tot <?php echo $_POST["overkomen"];?> en dat is niet goed als je wilt
                <?php echo $_POST["kunnen"];?>. Helaas voor <?php echo $_POST["persoon"];?>.
        </div>
    </div>

    <div class="footer">
        <p>&copy; Luuk Schouten 2021</p>
    </div>

</div>


</body>
</html>
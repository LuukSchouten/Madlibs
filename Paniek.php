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
            <form action="<?php echo htmlspecialchars($_SERVER["Paniekresultaat.php"]);?>" method="post">
                <div class="formdivs">
                    <label for="text">Welk dier zou je nooit als huisdier willen hebben?</label>
                    <input type="text" name="huisdier" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wie is de belangrijkste persoon in je leven?</label>
                    <input type="text" name="persoon" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">In welk land zou je graag willen wonen?</label>
                    <input type="text" name="land" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wat doe je als je je verveelt?</label>
                    <input type="text" name="verveelt" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Met welk speelgoed speelde je als kind het meest?</label>
                    <input type="text" name="speelgoed" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Bij welke docent spijbel je het liefst?</label>
                    <input type="text" name="docent" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Als je € 100.000,- had, wat zou je dan kopen?</label>
                    <input type="text" name="geld" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="formdivs">
                    <label for="text">Wat is je favoriete bezigheid?</label>
                    <input type="text" name="bezigheid" class="inputstuff"/>
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>
                <div class="submitdiv">
                    <input type="submit" value="Submit" class="submitbtn">
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; Luuk Schouten 2021</p>
    </div>

</div>

</body>
</html>
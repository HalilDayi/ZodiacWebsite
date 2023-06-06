<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Zodiacs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="ZodiacCss.css" />
</head>
<body>
    <table id="ZodiacTable">
        <?php
        $zodiacs = array("CAPRICORN","AQUARIUS","PISCES","ARIES","TAURUS","GEMINI","CANCER","LEO","VIRGO","LIBRA"
        ,"SCORPIO","SAGITTARIUS");

        for($i = 0 ; $i < count($zodiacs) ; $i++){
            if($i % 3 == 0){
                ?>
                    <tr>
                        <form action="http://localhost/Zodiac/info.php" method="get">
                            <td id= <?=$zodiacs[$i] ?> onclick="changeBackGround(this)" >
                            <input type="submit" value=<?= $zodiacs[$i]?> name="btn" class="colorify"></td>
                        </form>
                <?php
            }
            else if($i % 3 == 1){
                ?>
                        <form action="http://localhost/Zodiac/info.php" method="get">
                             <td id= <?= $zodiacs[$i] ?> onclick="changeBackGround(this)"> 
                             <input type="submit" value=<?= $zodiacs[$i]?> name="btn" class="colorify"></td>
                        </form>
                <?php           
            }
            else{
                ?>
                        <form action="http://localhost/Zodiac/info.php" method="get">
                            <td id= <?= $zodiacs[$i] ?> onclick="changeBackGround(this)"> 
                            <input type="submit" value=<?= $zodiacs[$i]?> name="btn" class="colorify"></td>                      
                        </form>
                    </tr>
                <?php
            }
        }
        ?>
    </table>
        <script src="Script1.js"></script>
</body>
</html>
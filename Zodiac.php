<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Zodiacs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="ZodiacCss.css" />
</head>
<body>
    <table>
        <?php
        $zodiacs = array("CAPRICORN","AQUARIUS","PISCES","ARIES","TAURUS","GEMINI","CANCER","LEO","VIRGO","LIBRA"
        ,"SCORPIO","SAGITTARIUS");

        for($i = 0 ; $i < count($zodiacs) ; $i++){
            if($i % 3 == 0){
                ?>
                    <tr>
                        <td id= <?=$zodiacs[$i] ?> onclick="changeBackGround(this)" ><a href="http://localhost/Zodiac/info.php"> <?= $zodiacs[$i] ?></a></td>
                <?php
            }
            else if($i % 3 == 1){
                ?>
                        <td id= <?= $zodiacs[$i] ?> onclick="changeBackGround(this)"><a href="http://localhost/Zodiac/info.php"> <?= $zodiacs[$i] ?></a></td>
                <?php           
            }
            else{
                ?>
                        <td id= <?= $zodiacs[$i] ?> onclick="changeBackGround(this)"><a href="http://localhost/Zodiac/info.php"> <?= $zodiacs[$i] ?></a></td>
                        </tr>
                <?php
            }
        }
        ?>
    </table>
        
        <script src="Script1.js"></script>
</body>
</html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$server = "localhost" ;
$username = "root" ;
$password = "empty" ;
$dbname = "zodiacs_database" ;

$connection = new mysqli($server , $username , $password , $dbname) ;
if($connection->connect_error){
    die("There is a problem" . $connection->connection_error);
}

$username = $_REQUEST["name"];
$userpassword = $_REQUEST["password"];
$mail = $_REQUEST["mail"];
$birthday = $_REQUEST["birthday"];
$zodiac = $_REQUEST["zodiac"];

if($mail != "" && $birthday != ""){
    $query0 = "INSERT INTO users VALUES('$zodiac' , '$username' , '$mail' , '$userpassword' , '$birthday') ;" ;
    $result0 = $connection->query($query0);
    }
if($mail == "" && $birthday == ""  && $username != "" && $userpassword != "" && $zodiac != ""){    
    $query2 = "SELECT username , password FROM users WHERE userzodiac = '$zodiac' ;" ;
    $result2 = $connection->query($query2) ;
    $nomatch = true ;

    while($record1 = $result2->fetch_assoc()){
        if($record1["username"] == $username && $record1["password"] == $userpassword){
            $nomatch = false ;
            $query1 = "SELECT userzodiac , username , gmail , birthday FROM users WHERE userzodiac = '$zodiac' ;" ;
            $result1 = $connection->query($query1) ;

            if($result1->num_rows > 0){
                ?>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">user_zodiac</th>
                        <th scope="col">username</th>
                        <th scope="col">gmail</th>
                        <th scope="col">birthday</th>
                    </tr>
                 </thead>
                <?php
               while($record = $result1->fetch_assoc()){
                ?>
                <tr>
                <td><?= $record["userzodiac"] ?></td>
                <td><?= $record["username"] ?></td>
                <td><?= $record["gmail"] ?></td>
                <td><?= $record["birthday"] ?></td>
                </tr>
                <?php
                }
                ?>
                </table>
                <?php
                }
        }
    }
    if($nomatch == true){
        echo("Your id or password not correct !");
    }
}
else{
    echo("You should login to see people!");
}
?>
</body>
</html>
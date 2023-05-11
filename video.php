<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link href="styl3.css" rel="stylesheet">
</head>

<body>

    <div id=banerlewy>
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id=banerprawy>
        <table>
            <tr>
                <td>kryminał</td>
                <td>horror</td>
                <td>przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>

    <div id=polecamy>
        <h3>Polecamy</h3>
        
        <?php

        $conn = mysqli_connect("localhost","root","","dane2");

        $sql = "SELECT id, nazwa, opis, zdjecie 
        from produkty
        where produkty.id = 18 or produkty.id = 22 or produkty.id = 23 or produkty.id = 25";

        $result = mysqli_query($conn,$sql);


        while($row = mysqli_fetch_assoc($result)){

            $zdj = $row['zdjecie'];

            echo "<div class='film'";
            echo "<h4>";
            echo $row['id'];
            echo $row['nazwa'];
            echo "</h4>";
            echo "<img src='$zdj' alt='film'";
            echo "<p>", $row['opis'] ,"</p>"; 
            echo "</div>";
        }





        mysqli_close($conn);



         ?>

    </div>
    <div id=filmyfantastyczne>
        <h3>Filmy fantastyczne</h3>
        <?php

$conn = mysqli_connect("localhost","root","","dane2");

$sql = "SELECT produkty.id , produkty.nazwa , produkty.opis, produkty.zdjecie 
from produkty 
WHERE produkty.Rodzaje_id = 12";

$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_assoc($result)){

    $zdj = $row['zdjecie'];

    echo "<div class='film'";
    echo "<h4>";
    echo $row['id']. " ";
    echo $row['nazwa'];
    echo "</h4>";
    echo "<img src='$zdj' alt='film'";
    echo "<p>", $row['opis'] ,"</p>"; 
    echo "</div>";
}





mysqli_close($conn);



 ?>
    </div>

    <div id=stopka>
        <form action="" method="post">

            Usuń film nr.:<input type="number" name=numer>
            <input type="submit" value="usuń film"><br> Stronę wykonał: <a href="ja@poczta.com">MaTEUSZ ŚleDŹ</a>











            <?php

if(isset($_POST['numer'])){

        $conn = mysqli_connect("localhost","root","","dane2");

        $nn = $_POST['numer'];


        $sql = "DELETE from produkty WHERE produkty.id = '$nn'";

        $result = mysqli_query($conn,$sql);


        




        
        mysqli_close($conn);

    }
?>
        </form>



    </div>
</body>

</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "prognoza";


$connect = mysqli_connect('localhost', 'root', '', 'prognoza');
$result = mysqli_query($connect, "SELECT * FROM pogoda WHERE miasta_id=2 ORDER BY data_prognozy DESC");
?>

<table border = 1px dotted green><tr><th>ID</th><th>DATA</th><th>NOC - TEMPERATURA></th><th>DZIEN - TEMPERATURA</th><th> OPADY[mm/h]</th><th>CISNIENIE[hpa]</th>
<?php while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>.$row[id].</td>
    <td>.$row[data_prognozy].</td>
    <td>.$row[temperatura_noc].</td>
    <td>.$row[temperatura_dzien].</td>
    <td>.$row[opady].</td>
    <td>.$row[cisnienie].</td></tr>";
}?>

</table>

<style>
body{
    background-color: lightblue;
    display: flex;
    justify-content: center;
    align-items: center
    overflow: hidden;
}


table{
    border: 1px dotted green;
}

th{
    background-color: green;
    color: yellow;
}

td{
    border: 1px dotted green;
    transition: 1s linear;
}

td:hover {
    background-color: snow;
    color: lightblue;
    transition: 0s linear;
}

</style>



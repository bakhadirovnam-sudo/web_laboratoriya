<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mahsulotlar ro'yxati</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Mahsulotlar ro'yxati</h2>

<?php
// Assotsiativ massiv (ko‘p o‘lchamli)
$mahsulotlar = array(
    array("nomi" => "Noutbuk", "narx" => 5500000, "miqdor" => 5),
    array("nomi" => "Telefon", "narx" => 3000000, "miqdor" => 10),
    array("nomi" => "Planshet", "narx" => 2500000, "miqdor" => 7)
);
?>

<table>
    <tr>
        <th>Nomi</th>
        <th>Narx (so'm)</th>
        <th>Miqdor</th>
        <th>Jami summa</th>
    </tr>

    <?php
    foreach($mahsulotlar as $mahsulot) {
        $jami = $mahsulot["narx"] * $mahsulot["miqdor"];
        echo "<tr>";
        echo "<td>".$mahsulot["nomi"]."</td>";
        echo "<td>".$mahsulot["narx"]."</td>";
        echo "<td>".$mahsulot["miqdor"]."</td>";
        echo "<td>".$jami."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

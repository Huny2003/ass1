<?php
$arr = [
    "green" => "Dòng màu xanh",
    "red" => "Dòng màu đỏ",
    "blue" => "Dòng màu xanh da trời",
    "brown" => "Dòng màu nâu",
    "yellow" => "Dòng màu vàng",
    "purple" => "Dòng màu tím",
    "gray" => "Dòng màu xám"
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bảng màu</title>
    <style>
        .container {
            width: 500px;
            margin: auto;
            text-align: center;
        }

        table {
            width: 500px;
            margin: auto;
        }
        table tr{
            height: 30px;
            
        }
        table th{
            font-size: 25px;
            text-transform: uppercase;
        }
        table tr td{
            line-height: 30px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Color Table</h2>
        <table border="1">
            <thead>
                <th>color</th>
            </thead>
            <tbody>
                <?php
                foreach ($arr as $keys => $items) :
                ?>
                    <tr>
                        <td style="background-color: <?php echo $keys; ?>;"><?php echo $keys; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>
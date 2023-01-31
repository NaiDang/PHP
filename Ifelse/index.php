<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tet</title>
</head>
<body>
    <?php
        $Mong = "Mong7";
        switch ($Mong)
        {
            case "Dem30" :
                echo 'Giao thừa';
                break;
            case "Mong1":
                echo 'Tết Nội';
                break;
            case "Mong2":
                echo 'Tết Ngoại';
                break;
            case "Mong3":
                echo 'Tết Thầy';
                break;
            case "Mong4" :
                echo 'Tết bồ';
                break;
            case "Mong5" :
                echo 'Ngủ';
                break;
            case "Mong6" :
                echo 'Lên xe';
                break;
            case "Mong7" :
                echo 'I am learning at PNV';
                break;
            default:
                echo 'Không tìm thấy';
                break;
        }
    ?>
</body>
</html>
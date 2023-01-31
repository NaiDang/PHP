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
        $number = 7;
        switch ($number)
        {
            case 0 :
                echo 'Giao thừa';
                break;
            case 1:
                echo 'Tết Nội';
                break;
            case 2:
                echo 'Tết Ngoại';
                break;
            case 3:
                echo 'Tết Thầy';
                break;
            case 4 :
                echo 'Tết bồ';
                break;
            case 5 :
                echo 'Ngủ';
                break;
            case 6 :
                echo 'Lên xe';
                break;
            case 7 :
                echo 'I am learning at PNV';
                break;
            default:
                echo 'Không tìm thấy';
                break;
        }
    ?>
</body>
</html>
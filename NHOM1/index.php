<h1>Day la file php</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buoi1</title>
</head>
<body>
    <?php 
    // 1.Cú pháp in ra màn hình
    echo "Hello World! <br>";

    echo "PHP <br>"; 


    // 2.Biến
    // cú pháp: $ + tên biến = giá trị của biến
    $ten = "Van Ho";
    $tuoi = 22;

    echo "Xin chao" . $ten . " " . $tuoi . "tuoi" . "<br>";

    // 3.Hang so
    define("soPi","3.14");
    echo soPi . "<br>";

    //4.Phân biệt '' và ""
    echo "$ten" . "<br>";
    echo '$ten' . "<br>";

    // 5.Chuỗi
    // 5.1 Kiem tra do dai cua chuoi
    echo strlen($ten) . "<br>";
    //  5.2Dếm số từ trong chuỗi
    echo str_word_count($ten) . "<br>";
    // 5.3tìm kíếm kí tự trong chuỗi
    echo strpos($ten,"H") . "<br>";
    // 5.4 thay the ki tu trong chuoi
    echo str_replace("Ho" , "Hoo" , $ten . "<br>");



    // 6.Toán Tử
    #phep cong +
    #phep tru -
    #phep nhan *
    #phep chia /
    $soThuNhat=10;
    $soThuHai=5;
    echo $soThuNhat + $soThuHai . "<br>";

    // += -= *= /= %= 
    #so sanh == !== > < >= <= === 
    // echo $soThuNhat %= $soThuHai;

    // 7.Cau dieu kien
    $tong = $soThuNhat + $soThuHai;
    if($tong >15){
        echo "Tổng là" . $tong . "Lớn hơn 15";
    }
    elseif($tong ==15){
        echo "Tổng là" . $tong;
    }
    else{
        echo "Tổng là" . $tong  . "Nhỏ hơn 15" . "<br>";
    }
    
    




    ?>
    
</body>
</html>
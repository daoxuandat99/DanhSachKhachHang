<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .thumbnail{
            height: 60px;
            width: 100px;
            overflow: hidden;
        }
        .thumbnail img{
            width:100%;
        }
    </style>
</head>
<body>
<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "luffy", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "images/luffy.jpg"),
        "2" =>array("ten" => "zoro", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "images/zoro.jpg"),
        "3" =>array("ten" => "ace", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "images/D.Ace.jpg"),
        "4" =>array("ten" => "nami", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "images/nami.jpg"),
        "5" =>array("ten" => "sanji", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "images/sanji.jpg")
    );
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><div class='thumbnail'><image src = '".$values['anh']."'/></div></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
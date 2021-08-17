<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include '../conect/conect.php';

    $younName = $_POST['youName'];
    $younText = $_POST['youText'];
    $regTime = time();

    // echo $younName;
    // echo $younText;
    
    $sql="INSERT INTO myComment4(youName, youText, regTime) VALUES('$younName','$younText','$regTime')";

    $result = $connect -> query($sql);

    // if($result){
    //     echo 'good';
    // }else{
    //     echo 'bad';
    // }


?>

<script>
    location.href='../page/javascript.html'
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP -4</title>
</head>
<body>
    <?php session_start();
    
    echo "Nama Anda adalah".$_SESSION['nama'];
    echo "<br/><a href='session01.php'>Kembali ke hal pertama</a>";
    ?>  
</body>
</html>

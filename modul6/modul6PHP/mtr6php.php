<?php
    // $nama = "budi";
    // $umur = 20;

    // // if($umur > 17){
    // //     echo "dewasa";
    // // }else{
    // //     echo "belum dewasa";
    // // }

    // for($i=0; $i < 5; $i++){
    //     echo "perulangan ke- $i <br>";
    // }

    // function luasPersegi(){
    //     $panjang = 8;
    //     $lebar = 10;

    //     $total = $panjang * $lebar;
    //     return $total;
    // }


    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $total = $harga * $jumlah;
        echo $total;
    }



    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 6</title>
</head>
<body>
    <h1> Hitung Total Belanja </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td> Nama Barang </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td> Harga </td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td> Jumlah </td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php if(isset($_POST['submit'])): ?>
    <table>
        <tr>
            <td> Nama Barang </td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td> Harga </td>
            <td><?php echo $harga; ?></td>
        </tr>
        <tr>
            <td> Jumlah </td>
            <td><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <td> Total </td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
    <?php endif; ?>

</body>
</html>
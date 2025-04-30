<?php
    //pengulangan for, while, do..whila, foreach
    //pengkondisian if..else, if-else if-else, ternary, switch 
    // untuk ternary dan switch belajar di JS aja

    # pengulangan for
    // for( $i = 0; $i < 5; $i++ ) {
    //     echo "hello world <br>";
    // }

    # pengulangan while..do
    /*
    $i = 0;
    while( $i < 5) {
        echo "Hello world <br>";
    $i++;
    }
    */

    # pengulangan do..while
    /* $i = 0;
    do {
        echo "hello World <br>";
        $i++;
    } while( $i < 10); 

    $i = 0;
    do {
        echo "hello World <br>";
    } while( $i++ < 10); */
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN PENGULANGAN</title>
</head>
<body>
    <!-- cara pertama membuat table -->
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr>
        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr>
        <tr>
            <td>1.1</td>
            <td>1.2</td>
            <td>1.3</td>
            <td>1.4</td>
            <td>1.5</td>
        </tr> 
    </table> <br>

    <!-- buat table pake pengulangan php -->
    <p>table ini menggunakan pengulangan php</p>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php                
            for ($i = 1; $i <= 5; $i++) {
                echo "<tr>";
                    for ($j = 1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table> <br>  
    
    <!-- cara lain membuat table menggunakan php -->
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for( $i = 1; $i <= 5; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td>
                        <?php echo "$i,$j";?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table> <br>

    <!-- perbedaan php disini adalah mengganti kurung kurawal di bagian for awal nya dan di <php }>, menjadi : dan endfor; -->

    <!-- endfor; bisa disesuaikan dengan pengkondisian yang dibuat, bisa saja endif; endfor; endforeach; -->

    <!-- php echo bisa disingkat menjadi "=" ketika hanya menampilkan echo atau variabel-->
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for( $i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td>
                        <?= "$i,$j"; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table> <br>

    <p>table ini dibuat dengan php while do</p>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php $i = 1; while( $i <= 5) : ?>
            <tr>
                <?php $j = 1; while( $j <= 5) : ?>
                    <td>
                        <?= "$i,$j"; ?>
                    </td>
                <?php $j++; endwhile; ?>        
            </tr>
        <?php $i++; endwhile; ?>    
    </table> <br>
    

    <!-- khusus untuk do-while, kita tidak bisa menggunakan sintaks alternatif seperti endwhile; atau titikdua (:) sebagai pengganti kurung kurawal {}. gunakan sintak standar do-while agar bisa melakukan perulangan

    https://chatgpt.com/c/67de31d9-5214-800a-8b64-11571f88dc3c -->

    <p>table dengan do while</p>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php $i = 1; do { ?>
            <tr>
                <?php $j = 1; do { ?>
                    <td>
                        <?= "$i,$j"; ?>
                    </td>
                <?php } while( $j++ <= 5); ?>
            </tr>
        <?php } while( $i++ <= 5); ?>
    </table>
    
</body>
</html>
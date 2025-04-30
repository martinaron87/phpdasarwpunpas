<?php 
    // pengkondisian / percabangan
    // if else
    // if else - if else
    // ternary
    // switch
    
// $x = 90;
// if ($x == 10) {
//     echo "hellow world!";
// } 
// else if ($x > 20) {
//     echo 1234567890;
// }
// else {
//     echo "ling gang guli guli";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel dengan percabangan</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <h1>Membuat tabel dengan html + php dengan perulangan dan pengkondisian</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <?php for( $i = 1; $i <= 5; $i++) : ?>
            <?php if( $i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td>
                        <?= "$i,$j"; ?>
                    </td>
                <?php endfor; ?>
                </tr>
        <?php endfor; ?>
    </table>

    <h1>Membuat tabel dengan HTML + PHP menggunakan ternary operator</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($i = 1; $i <= 5; $i++): ?>
        <tr class="<?= ($i % 2 == 1 ? 'warna-baris' : ''); ?>">
            <?php for ($j = 1; $j <= 5; $j++): ?>
            <td><?= "$i,$j" ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
    
</body>
</html>
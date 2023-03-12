<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "<h4>Mengurutkan angka dari terkecil sampai terbesar</h4>";
        $angka = array(5, 3, 1, 4, 2, 7, 9, 6, 8, 10, 11, 14, 13, 18, 17, 19, 20);
        $panjang = count($angka);
        for ($i = 0; $i < $panjang; $i++) {
            
            for ($j = 0; $j < $panjang - 1; $j++) {
                //membandingkan
            if ($angka[$j] > $angka[$j + 1]) {
                //bertukar posisi
                $temp = $angka[$j];
                $angka[$j] = $angka[$j + 1];
                $angka[$j + 1] = $temp;
            }
        }
        }
        foreach ($angka as $nilai) {
        echo $nilai . " ";
        }
        ?>
    </body>
</html>
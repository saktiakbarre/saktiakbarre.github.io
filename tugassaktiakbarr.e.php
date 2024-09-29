<html>
    <head>
        <title> Tabungan </title>
    </head>
        <body>
            <P>Tugas 1</P>
        <?php
            $gaji_pokok=5000000;
            $tunjangan_transportasi=500000;
            $tunjangan_makan=300000;

            $total_gaji=$gaji_pokok+$tunjangan_transportasi+$tunjangan_makan;

            $pajak=0.10*$total_gaji;

            $gaji_bersih=$total_gaji-$pajak;

            echo "Gaji Bersih yang diterima: Rp". number_format($gaji_bersih,0,',','.');
            ?>

            <p>Tugas 2</p>
            <?php
            $tabungan =10000000;

            $harga_laptop =7000000;
            $harga_smartphone = 3500000;

            $diskon_smartphone= 10/100;
            $harga_smartphone_setelah_diskon = $harga_smartphone - ($harga_smartphone*$diskon_smartphone);

            $total_pembelian=$harga_laptop+$harga_smartphone_setelah_diskon;

            $sisa_tabungan=$tabungan-$total_pembelian;

            echo "Sisa tabungan fajar setelah pembelian: Rp", number_format($sisa_tabungan,0,',','.')."\n";
            ?>

            <p>Tugas 3</p>
            <?php
            
            $harga_per_unit = 200000;

            $jumlah_produk = 150;

            $presentase_pemilik = 70/100;
            $presentase_toko = 30/100;

            $total_pendapatan = $harga_per_unit*$jumlah_produk;

            $bagi_hasil_pemilik = $total_pendapatan*$presentase_pemilik;

            $bagi_hasil_toko = $total_pendapatan*$presentase_toko;

            echo "Total bagi hasil yang diterima pemilik produk : Rp ", number_format($bagi_hasil_pemilik,0,',','.')."\n";
            echo "Total bagi hasil yang diterima pihak toko : Rp", number_format($bagi_hasil_toko,0,',','.');

            ?>

            <p>Tugas 4</p>

            <?php

            $nilai_teori=80;
            $nilai_praktik = 78;

            if($nilai_teori >= 70 && $nilai_praktik >=75){
                echo "siswa lulus";
            }else{
                echo "siswa tidak lulus";
            }

            ?>

            <p>Tugas 5</p>

            <?php

            $usia_pemohon = 30;
            $penghasilan_bulanan = 5000000;
            $riwayat_kredit = "tidak macet";

            if($usia_pemohon >=21 && $usia_pemohon <=60 && $penghasilan_bulanan >=5000000 && $riwayat_kredit == "tidak macet"){
                echo "pemohon layak mendapatkan kredit";
            }else{
                echo "pemohon tidak layak mendapatkan kredit";
            }

            ?>
            
        </body>
    
</html>
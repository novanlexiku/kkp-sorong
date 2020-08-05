<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN PENGAMATAN PENYAKIT PADA KLINIK PENGOBATAN SEKITAR PELABUHAN Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
    <link href="<?php echo base_url() . 'assets/plugins/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables.min.css' ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() . 'assets/plugins/datatables/css/jquery.datatables_themeroller.css' ?>" rel="stylesheet" type="text/css" />

</head>

<body onload="window.print()">
    <div id="laporan">
        <table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
            <!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
        </table>

        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
            <tr>
                <td colspan="2" style="width:800px;paddin-left:20px;">
                    <center>
                        <h4>LAPORAN PENGAMATAN PENYAKIT PADA KLINIK PENGOBATAN SEKITAR PELABUHAN </h4>
                    </center>
                    <center>
                        <h4>KANTOR KESEHATAN PELABUHAN KELAS III SORONG</h4>
                    </center>
                    <center>
                        <h4>BULAN : <?php echo $b['laporan_tanggal_bulan']; ?> TAHUN : <?php echo $b['laporan_tanggal_tahun']; ?></h4>
                    </center>

                </td>
            </tr>
            <tr>
                <td><br /><br /><br /></td>
                <td colspan="11" style="text-align: right;">PKSE-6</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th style="text-align:center;" scope="col" width="210px" rowspan="2">Jenis Penyakit</th>
                    <th style="text-align:center;" scope="col" colspan="8">Jumlah Kasus Berdasarkan Wilayah Kerja</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Jumlah</th>

                </tr>
                <tr>
                    <th style="text-align:center;" scope="col">Bandar Udara DEO</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Fak-Fak</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Kaimana</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Sorong</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Raja Ampat</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Arar</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Khusus Sele</th>
                    <th style="text-align:center;" scope="col">Pelabuhan Laut Teminabuan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:left;" scope="col">A. PENYAKIT MENULAR</th>
                    <th style="text-align:center;" scope="col" colspan="8"></th>
                    <th style="text-align:center;" scope="col"></th>
                </tr>
                <tr>
                    <?php
                    $p1w1 = $p1wil1->row_array();
                    $p1w2 = $p1wil2->row_array();
                    $p1w3 = $p1wil3->row_array();
                    $p1w4 = $p1wil4->row_array();
                    $p1w5 = $p1wil5->row_array();
                    $p1w6 = $p1wil6->row_array();
                    $p1w7 = $p1wil7->row_array();
                    $p1w8 = $p1wil8->row_array();
                    $j1 = array_sum($p1w1 + $p1w2 + $p1w3 + $p1w4 + $p1w5 + $p1w6 + $p1w7 + $p1w8);
                    ?>
                    <td>1</td>
                    <td style="text-align:left;">Kolera</td>
                    <td style="text-align:center;"><?php echo $p1w1['kolera_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w2['kolera_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w3['kolera_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w4['kolera_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w5['kolera_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w6['kolera_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w7['kolera_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p1w8['kolera_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j1; ?></td>
                </tr>
                <tr>
                    <?php
                    $p2w1 = $p2wil1->row_array();
                    $p2w2 = $p2wil2->row_array();
                    $p2w3 = $p2wil3->row_array();
                    $p2w4 = $p2wil4->row_array();
                    $p2w5 = $p2wil5->row_array();
                    $p2w6 = $p2wil6->row_array();
                    $p2w7 = $p2wil7->row_array();
                    $p2w8 = $p2wil8->row_array();
                    $j2 = array_sum($p2w1 + $p2w2 + $p2w3 + $p2w4 + $p2w5 + $p2w6 + $p2w7 + $p2w8);
                    ?>
                    <td>2</td>
                    <td style="text-align:left;">Demam Berdarah/DBD/DHF</td>
                    <td style="text-align:center;"><?php echo $p2w1['db_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w2['db_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w3['db_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w4['db_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w5['db_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w6['db_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w7['db_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p2w8['db_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j2; ?></td>
                </tr>
                <tr>
                    <?php
                    $p3w1 = $p3wil1->row_array();
                    $p3w2 = $p3wil2->row_array();
                    $p3w3 = $p3wil3->row_array();
                    $p3w4 = $p3wil4->row_array();
                    $p3w5 = $p3wil5->row_array();
                    $p3w6 = $p3wil6->row_array();
                    $p3w7 = $p3wil7->row_array();
                    $p3w8 = $p3wil8->row_array();
                    $j3 = array_sum($p3w1 + $p3w2 + $p3w3 + $p3w4 + $p3w5 + $p3w6 + $p3w7 + $p3w8);
                    ?>
                    <td>3</td>
                    <td style="text-align:left;">Campak</td>
                    <td style="text-align:center;"><?php echo $p3w1['campak_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w2['campak_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w3['campak_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w4['campak_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w5['campak_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w6['campak_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w7['campak_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p3w8['campak_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j3; ?></td>
                </tr>
                <tr>
                    <?php
                    $p4w1 = $p4wil1->row_array();
                    $p4w2 = $p4wil2->row_array();
                    $p4w3 = $p4wil3->row_array();
                    $p4w4 = $p4wil4->row_array();
                    $p4w5 = $p4wil5->row_array();
                    $p4w6 = $p4wil6->row_array();
                    $p4w7 = $p4wil7->row_array();
                    $p4w8 = $p4wil8->row_array();
                    $j4 = array_sum($p4w1 + $p4w2 + $p4w3 + $p4w4 + $p4w5 + $p4w6 + $p4w7 + $p4w8);
                    ?>
                    <td>4</td>
                    <td style="text-align:left;">Polio</td>
                    <td style="text-align:center;"><?php echo $p4w1['polio_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w2['polio_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w3['polio_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w4['polio_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w5['polio_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w6['polio_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w7['polio_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p4w8['polio_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j4; ?></td>
                </tr>
                <tr>
                    <?php
                    $p5w1 = $p5wil1->row_array();
                    $p5w2 = $p5wil2->row_array();
                    $p5w3 = $p5wil3->row_array();
                    $p5w4 = $p5wil4->row_array();
                    $p5w5 = $p5wil5->row_array();
                    $p5w6 = $p5wil6->row_array();
                    $p5w7 = $p5wil7->row_array();
                    $p5w8 = $p5wil8->row_array();
                    $j5 = array_sum($p5w1 + $p5w2 + $p5w3 + $p5w4 + $p5w5 + $p5w6 + $p5w7 + $p5w8);
                    ?>
                    <td>5</td>
                    <td style="text-align:left;">Difteri</td>
                    <td style="text-align:center;"><?php echo $p5w1['difteri_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w2['difteri_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w3['difteri_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w4['difteri_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w5['difteri_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w6['difteri_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w7['difteri_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p5w8['difteri_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j5; ?></td>
                </tr>
                <tr>
                    <?php
                    $p6w1 = $p6wil1->row_array();
                    $p6w2 = $p6wil2->row_array();
                    $p6w3 = $p6wil3->row_array();
                    $p6w4 = $p6wil4->row_array();
                    $p6w5 = $p6wil5->row_array();
                    $p6w6 = $p6wil6->row_array();
                    $p6w7 = $p6wil7->row_array();
                    $p6w8 = $p6wil8->row_array();
                    $j6 = array_sum($p6w1 + $p6w2 + $p6w3 + $p6w4 + $p6w5 + $p6w6 + $p6w7 + $p6w8);
                    ?>
                    <td>6</td>
                    <td style="text-align:left;">Pertusis</td>
                    <td style="text-align:center;"><?php echo $p6w1['pertusis_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w2['pertusis_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w3['pertusis_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w4['pertusis_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w5['pertusis_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w6['pertusis_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w7['pertusis_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p6w8['pertusis_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j6; ?></td>
                </tr>
                <tr>
                    <?php
                    $p7w1 = $p7wil1->row_array();
                    $p7w2 = $p7wil2->row_array();
                    $p7w3 = $p7wil3->row_array();
                    $p7w4 = $p7wil4->row_array();
                    $p7w5 = $p7wil5->row_array();
                    $p7w6 = $p7wil6->row_array();
                    $p7w7 = $p7wil7->row_array();
                    $p7w8 = $p7wil8->row_array();
                    $j7 = array_sum($p7w1 + $p7w2 + $p7w3 + $p7w4 + $p7w5 + $p7w6 + $p7w7 + $p7w8);
                    ?>
                    <td>7</td>
                    <td style="text-align:left;">Rabies</td>
                    <td style="text-align:center;"><?php echo $p7w1['rabies_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w2['rabies_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w3['rabies_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w4['rabies_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w5['rabies_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w6['rabies_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w7['rabies_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p7w8['rabies_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j7; ?></td>
                </tr>
                <tr>
                    <?php
                    $p8w1 = $p8wil1->row_array();
                    $p8w2 = $p8wil2->row_array();
                    $p8w3 = $p8wil3->row_array();
                    $p8w4 = $p8wil4->row_array();
                    $p8w5 = $p8wil5->row_array();
                    $p8w6 = $p8wil6->row_array();
                    $p8w7 = $p8wil7->row_array();
                    $p8w8 = $p8wil8->row_array();
                    $j8 = array_sum($p8w1 + $p8w2 + $p8w3 + $p8w4 + $p8w5 + $p8w6 + $p8w7 + $p8w8);
                    ?>
                    <td>8</td>
                    <td style="text-align:left;">Malaria</td>
                    <td style="text-align:center;"><?php echo $p8w1['malaria_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w2['malaria_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w3['malaria_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w4['malaria_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w5['malaria_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w6['malaria_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w7['malaria_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p8w8['malaria_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j8; ?></td>
                </tr>
                <tr>
                    <?php
                    $p9w1 = $p9wil1->row_array();
                    $p9w2 = $p9wil2->row_array();
                    $p9w3 = $p9wil3->row_array();
                    $p9w4 = $p9wil4->row_array();
                    $p9w5 = $p9wil5->row_array();
                    $p9w6 = $p9wil6->row_array();
                    $p9w7 = $p9wil7->row_array();
                    $p9w8 = $p9wil8->row_array();
                    $j9 = array_sum($p9w1 + $p9w2 + $p9w3 + $p9w4 + $p9w5 + $p9w6 + $p9w7 + $p9w8);
                    ?>
                    <td>9</td>
                    <td style="text-align:left;">Chikungunya</td>
                    <td style="text-align:center;"><?php echo $p9w1['chikungunya_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w2['chikungunya_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w3['chikungunya_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w4['chikungunya_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w5['chikungunya_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w6['chikungunya_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w7['chikungunya_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p9w8['chikungunya_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j9; ?></td>
                </tr>
                <tr>
                    <?php
                    $p10w1 = $p10wil1->row_array();
                    $p10w2 = $p10wil2->row_array();
                    $p10w3 = $p10wil3->row_array();
                    $p10w4 = $p10wil4->row_array();
                    $p10w5 = $p10wil5->row_array();
                    $p10w6 = $p10wil6->row_array();
                    $p10w7 = $p10wil7->row_array();
                    $p10w8 = $p10wil8->row_array();
                    $j10 = array_sum($p10w1 + $p10w2 + $p10w3 + $p10w4 + $p10w5 + $p10w6 + $p10w7 + $p10w8);
                    ?>
                    <td>10</td>
                    <td style="text-align:left;">Hepatitis</td>
                    <td style="text-align:center;"><?php echo $p10w1['hepatitis_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w2['hepatitis_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w3['hepatitis_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w4['hepatitis_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w5['hepatitis_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w6['hepatitis_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w7['hepatitis_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p10w8['hepatitis_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j10; ?></td>
                </tr>
                <tr>
                    <?php
                    $p11w1 = $p11wil1->row_array();
                    $p11w2 = $p11wil2->row_array();
                    $p11w3 = $p11wil3->row_array();
                    $p11w4 = $p11wil4->row_array();
                    $p11w5 = $p11wil5->row_array();
                    $p11w6 = $p11wil6->row_array();
                    $p11w7 = $p11wil7->row_array();
                    $p11w8 = $p11wil8->row_array();
                    $j11 = array_sum($p11w1 + $p11w2 + $p11w3 + $p11w4 + $p11w5 + $p11w6 + $p11w7 + $p11w8);
                    ?>
                    <td>11</td>
                    <td style="text-align:left;">TB Paru</td>
                    <td style="text-align:center;"><?php echo $p11w1['paru_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w2['paru_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w3['paru_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w4['paru_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w5['paru_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w6['paru_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w7['paru_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p11w8['paru_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j11; ?></td>
                </tr>
                <tr>
                    <?php
                    $p12w1 = $p12wil1->row_array();
                    $p12w2 = $p12wil2->row_array();
                    $p12w3 = $p12wil3->row_array();
                    $p12w4 = $p12wil4->row_array();
                    $p12w5 = $p12wil5->row_array();
                    $p12w6 = $p12wil6->row_array();
                    $p12w7 = $p12wil7->row_array();
                    $p12w8 = $p12wil8->row_array();
                    $j12 = array_sum($p12w1 + $p12w2 + $p12w3 + $p12w4 + $p12w5 + $p12w6 + $p12w7 + $p12w8);
                    ?>
                    <td>12</td>
                    <td style="text-align:left;">ISPA</td>
                    <td style="text-align:center;"><?php echo $p12w1['ispa_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w2['ispa_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w3['ispa_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w4['ispa_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w5['ispa_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w6['ispa_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w7['ispa_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p12w8['ispa_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j12; ?></td>
                </tr>
                <tr>
                    <?php
                    $p13w1 = $p13wil1->row_array();
                    $p13w2 = $p13wil2->row_array();
                    $p13w3 = $p13wil3->row_array();
                    $p13w4 = $p13wil4->row_array();
                    $p13w5 = $p13wil5->row_array();
                    $p13w6 = $p13wil6->row_array();
                    $p13w7 = $p13wil7->row_array();
                    $p13w8 = $p13wil8->row_array();
                    $j13 = array_sum($p13w1 + $p13w2 + $p13w3 + $p13w4 + $p13w5 + $p13w6 + $p13w7 + $p13w8);
                    ?>
                    <td>13</td>
                    <td style="text-align:left;">Infeksi Menular Seksual(IMS)</td>
                    <td style="text-align:center;"><?php echo $p13w1['ims_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w2['ims_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w3['ims_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w4['ims_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w5['ims_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w6['ims_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w7['ims_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p13w8['ims_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j13; ?></td>
                </tr>
                <tr>
                    <?php
                    $p14w1 = $p14wil1->row_array();
                    $p14w2 = $p14wil2->row_array();
                    $p14w3 = $p14wil3->row_array();
                    $p14w4 = $p14wil4->row_array();
                    $p14w5 = $p14wil5->row_array();
                    $p14w6 = $p14wil6->row_array();
                    $p14w7 = $p14wil7->row_array();
                    $p14w8 = $p14wil8->row_array();
                    $j14 = array_sum($p14w1 + $p14w2 + $p14w3 + $p14w4 + $p14w5 + $p14w6 + $p14w7 + $p14w8);
                    ?>
                    <td>14</td>
                    <td style="text-align:left;">Penyakit Menular Lainnya</td>
                    <td style="text-align:center;"><?php echo $p14w1['lain1_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w2['lain1_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w3['lain1_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w4['lain1_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w5['lain1_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w6['lain1_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w7['lain1_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p14w8['lain1_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j14; ?></td>
                </tr>
                <tr style="background-color: rgb(217, 217, 217);">
                    <?php
                    $jumlahA = $j1 + $j2 + $j3 + $j4 + $j5 + $j6 + $j7 + $j8 + $j9 + $j10 + $j11 + $j12 + $j13 + $j14;
                    ?>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col">JUMLAH</th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"><?php echo $jumlahA; ?></th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:left;" scope="col">B. PENYAKIT TIDAK MENULAR</th>
                    <th style="text-align:center;" scope="col" colspan="8"></th>
                    <th style="text-align:center;" scope="col"></th>
                </tr>
                <tr>
                    <?php
                    $p15w1 = $p15wil1->row_array();
                    $p15w2 = $p15wil2->row_array();
                    $p15w3 = $p15wil3->row_array();
                    $p15w4 = $p15wil4->row_array();
                    $p15w5 = $p15wil5->row_array();
                    $p15w6 = $p15wil6->row_array();
                    $p15w7 = $p15wil7->row_array();
                    $p15w8 = $p15wil8->row_array();
                    $j15 = array_sum($p15w1 + $p15w2 + $p15w3 + $p15w4 + $p15w5 + $p15w6 + $p15w7 + $p15w8);
                    ?>
                    <td>1</td>
                    <td style="text-align:left;">Jantung</td>
                    <td style="text-align:center;"><?php echo $p15w1['jantung_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w2['jantung_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w3['jantung_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w4['jantung_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w5['jantung_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w6['jantung_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w7['jantung_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p15w8['jantung_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j15; ?></td>
                </tr>
                <tr>
                    <?php
                    $p16w1 = $p16wil1->row_array();
                    $p16w2 = $p16wil2->row_array();
                    $p16w3 = $p16wil3->row_array();
                    $p16w4 = $p16wil4->row_array();
                    $p16w5 = $p16wil5->row_array();
                    $p16w6 = $p16wil6->row_array();
                    $p16w7 = $p16wil7->row_array();
                    $p16w8 = $p16wil8->row_array();
                    $j16 = array_sum($p16w1 + $p16w2 + $p16w3 + $p16w4 + $p16w5 + $p16w6 + $p16w7 + $p16w8);
                    ?>
                    <td>2</td>
                    <td style="text-align:left;">Diabetes Mellitus dan Penyakit Metabolik</td>
                    <td style="text-align:center;"><?php echo $p16w1['diabetes_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w2['diabetes_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w3['diabetes_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w4['diabetes_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w5['diabetes_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w6['diabetes_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w7['diabetes_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p16w8['diabetes_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j16; ?></td>
                </tr>
                <tr>
                    <?php
                    $p17w1 = $p17wil1->row_array();
                    $p17w2 = $p17wil2->row_array();
                    $p17w3 = $p17wil3->row_array();
                    $p17w4 = $p17wil4->row_array();
                    $p17w5 = $p17wil5->row_array();
                    $p17w6 = $p17wil6->row_array();
                    $p17w7 = $p17wil7->row_array();
                    $p17w8 = $p17wil8->row_array();
                    $j17 = array_sum($p17w1 + $p17w2 + $p17w3 + $p17w4 + $p17w5 + $p17w6 + $p17w7 + $p17w8);
                    ?>
                    <td>3</td>
                    <td style="text-align:left;">Hipertensi</td>
                    <td style="text-align:center;"><?php echo $p17w1['hipertensi_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w2['hipertensi_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w3['hipertensi_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w4['hipertensi_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w5['hipertensi_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w6['hipertensi_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w7['hipertensi_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p17w8['hipertensi_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j17; ?></td>
                </tr>
                <tr>
                    <?php
                    $p18w1 = $p18wil1->row_array();
                    $p18w2 = $p18wil2->row_array();
                    $p18w3 = $p18wil3->row_array();
                    $p18w4 = $p18wil4->row_array();
                    $p18w5 = $p18wil5->row_array();
                    $p18w6 = $p18wil6->row_array();
                    $p18w7 = $p18wil7->row_array();
                    $p18w8 = $p18wil8->row_array();
                    $j18 = array_sum($p18w1 + $p18w2 + $p18w3 + $p18w4 + $p18w5 + $p18w6 + $p18w7 + $p18w8);
                    ?>
                    <td>4</td>
                    <td style="text-align:left;">Kecelakaan Akibat Kerja</td>
                    <td style="text-align:center;"><?php echo $p18w1['kecelakaan_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w2['kecelakaan_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w3['kecelakaan_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w4['kecelakaan_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w5['kecelakaan_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w6['kecelakaan_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w7['kecelakaan_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p18w8['kecelakaan_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j18; ?></td>
                </tr>
                <tr>
                    <?php
                    $p19w1 = $p19wil1->row_array();
                    $p19w2 = $p19wil2->row_array();
                    $p19w3 = $p19wil3->row_array();
                    $p19w4 = $p19wil4->row_array();
                    $p19w5 = $p19wil5->row_array();
                    $p19w6 = $p19wil6->row_array();
                    $p19w7 = $p19wil7->row_array();
                    $p19w8 = $p19wil8->row_array();
                    $j19 = array_sum($p19w1 + $p19w2 + $p19w3 + $p19w4 + $p19w5 + $p19w6 + $p19w7 + $p19w8);
                    ?>
                    <td>5</td>
                    <td style="text-align:left;">Penyakit Tidak Menular Lainnya</td>
                    <td style="text-align:center;"><?php echo $p19w1['lain2_wil1']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w2['lain2_wil2']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w3['lain2_wil3']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w4['lain2_wil4']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w5['lain2_wil5']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w6['lain2_wil6']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w7['lain2_wil7']; ?></td>
                    <td style="text-align:center;"><?php echo $p19w8['lain2_wil8']; ?></td>
                    <td style="text-align:center;"><?php echo $j19; ?></td>
                </tr>
                <tr style="background-color: rgb(217, 217, 217);">
                    <?php
                    $jumlahB = $j15 + $j16 + $j17 + $j18 + $j19;
                    ?>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col">JUMLAH</th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"><?php echo $jumlahB; ?></th>
                </tr>
                <tr style="background-color: rgb(217, 217, 217);">
                    <?php
                    $total = $jumlahA + $jumlahB;
                    ?>
                    <th style="text-align:center;" scope="col" colspan="2">TOTAL</th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"><?php echo $total; ?></th>
                </tr>

            </tbody>
        </table>

        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td></td>
        </table>
        <table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
            <?php
            $b = $laporan->row_array();
            ?>
            <tr>
                <td align="center">Mengetahui</td>
                <td align="center">Sorong,<?php echo date("d-m-Y"); ?></td>
            </tr>
            <tr>
                <td align="center">Kepala Kantor</td>
                <td align="center">Kasi PKSE</td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /><br /></td>
            </tr>
            <tr>
                <td align="center">( UMAR FAHMI, SKM, MKM )</td>
                <td align="center">( ABDUL RASYID, SKM )</td>
            </tr>
            <tr>
                <td align="center">( NIP. 197310071998031003 )</td>
                <td align="center">( NIP. 196212181985031006 )</td>
            </tr>
            <tr>
                <td align="center"></td>
            </tr>

        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <th><br /><br /></th>
            </tr>
            <tr>
                <th align="left"></th>
            </tr>
        </table>
    </div>
</body>

</html>
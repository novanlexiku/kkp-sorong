<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN STOK DOKUMEN KESEHATAN KAPAL Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
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
                        <h4>LAPORAN STOK DOKUMEN KESEHATAN KAPAL</h4>
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
                <td colspan="11" style="text-align: right;">PKSE-7</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Wilayah Kerja</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Satuan</th>
                    <th style="text-align:center;" scope="col" colspan="4">CoP</th>
                    <th style="text-align:center;" scope="col" colspan="4">SSCC/SSCEC</th>
                    <th style="text-align:center;" scope="col" colspan="4">Health Book</th>
                    <th style="text-align:center;" scope="col" colspan="4">PHQC</th>
                    <th style="text-align:center;" scope="col" colspan="4">P3K</th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col">Stok Awal</th>
                    <th style="text-align:center;" scope="col">Tambah</th>
                    <th style="text-align:center;" scope="col">Pakai</th>
                    <th style="text-align:center;" scope="col">Sisa</th>
                    <th style="text-align:center;" scope="col">Stok Awal</th>
                    <th style="text-align:center;" scope="col">Tambah</th>
                    <th style="text-align:center;" scope="col">Pakai</th>
                    <th style="text-align:center;" scope="col">Sisa</th>
                    <th style="text-align:center;" scope="col">Stok Awal</th>
                    <th style="text-align:center;" scope="col">Tambah</th>
                    <th style="text-align:center;" scope="col">Pakai</th>
                    <th style="text-align:center;" scope="col">Sisa</th>
                    <th style="text-align:center;" scope="col">Stok Awal</th>
                    <th style="text-align:center;" scope="col">Tambah</th>
                    <th style="text-align:center;" scope="col">Pakai</th>
                    <th style="text-align:center;" scope="col">Sisa</th>
                    <th style="text-align:center;" scope="col">Stok Awal</th>
                    <th style="text-align:center;" scope="col">Tambah</th>
                    <th style="text-align:center;" scope="col">Pakai</th>
                    <th style="text-align:center;" scope="col">Sisa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $wil1 = $pkse1->row_array();
                    $wil2 = $pkse2->row_array();
                    $wil3 = $pkse3->row_array();
                    $wil4 = $pkse4->row_array();
                    $wil5 = $pkse5->row_array();
                    $wil6 = $pkse6->row_array();
                    $wil7 = $pkse7->row_array();
                    $wil8 = $pkse8->row_array();

                    $wil1_awal1 = $wil1['laporan_awal1'];
                    $wil1_tambah1 = $wil1['laporan_tambah1'];
                    $wil1_pakai1 = $wil1['laporan_pakai1'];

                    $wil1_awal2 = $wil1['laporan_awal2'];
                    $wil1_tambah2 = $wil1['laporan_tambah2'];
                    $wil1_pakai2 = $wil1['laporan_pakai2'];

                    $wil1_awal3 = $wil1['laporan_awal3'];
                    $wil1_tambah3 = $wil1['laporan_tambah3'];
                    $wil1_pakai3 = $wil1['laporan_pakai3'];

                    $wil1_awal4 = $wil1['laporan_awal4'];
                    $wil1_tambah4 = $wil1['laporan_tambah4'];
                    $wil1_pakai4 = $wil1['laporan_pakai4'];

                    $wil1_awal5 = $wil1['laporan_awal5'];
                    $wil1_tambah5 = $wil1['laporan_tambah5'];
                    $wil1_pakai5 = $wil1['laporan_pakai5'];


                    $wil1_sisa1 = $wil1_awal1 + $wil1_tambah1 - $wil1_pakai1;
                    $wil1_sisa2 = $wil1_awal2 + $wil1_tambah2 - $wil1_pakai2;
                    $wil1_sisa3 = $wil1_awal3 + $wil1_tambah3 - $wil1_pakai3;
                    $wil1_sisa4 = $wil1_awal4 + $wil1_tambah4 - $wil1_pakai4;
                    $wil1_sisa5 = $wil1_awal5 + $wil1_tambah5 - $wil1_pakai5;

                    ?>
                    <td>1</td>
                    <td style="text-align:center;">Bandar Udara DEO Sorong</td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1_sisa5; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil2_awal1 = $wil2['laporan_awal1'];
                    $wil2_tambah1 = $wil2['laporan_tambah1'];
                    $wil2_pakai1 = $wil2['laporan_pakai1'];

                    $wil2_awal2 = $wil2['laporan_awal2'];
                    $wil2_tambah2 = $wil2['laporan_tambah2'];
                    $wil2_pakai2 = $wil2['laporan_pakai2'];

                    $wil2_awal3 = $wil2['laporan_awal3'];
                    $wil2_tambah3 = $wil2['laporan_tambah3'];
                    $wil2_pakai3 = $wil2['laporan_pakai3'];

                    $wil2_awal4 = $wil2['laporan_awal4'];
                    $wil2_tambah4 = $wil2['laporan_tambah4'];
                    $wil2_pakai4 = $wil2['laporan_pakai4'];

                    $wil2_awal5 = $wil2['laporan_awal5'];
                    $wil2_tambah5 = $wil2['laporan_tambah5'];
                    $wil2_pakai5 = $wil2['laporan_pakai5'];


                    $wil2_sisa1 = $wil2_awal1 + $wil2_tambah1 - $wil2_pakai1;
                    $wil2_sisa2 = $wil2_awal2 + $wil2_tambah2 - $wil2_pakai2;
                    $wil2_sisa3 = $wil2_awal3 + $wil2_tambah3 - $wil2_pakai3;
                    $wil2_sisa4 = $wil2_awal4 + $wil2_tambah4 - $wil2_pakai4;
                    $wil2_sisa5 = $wil2_awal5 + $wil2_tambah5 - $wil2_pakai5;
                    ?>
                    <td>2</td>
                    <td style="text-align:center;">Pelabuhan Laut Fak-Fak</td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2_sisa5; ?></td>

                </tr>
                <tr>
                    <?php
                    $wil3_awal1 = $wil3['laporan_awal1'];
                    $wil3_tambah1 = $wil3['laporan_tambah1'];
                    $wil3_pakai1 = $wil3['laporan_pakai1'];

                    $wil3_awal2 = $wil3['laporan_awal2'];
                    $wil3_tambah2 = $wil3['laporan_tambah2'];
                    $wil3_pakai2 = $wil3['laporan_pakai2'];

                    $wil3_awal3 = $wil3['laporan_awal3'];
                    $wil3_tambah3 = $wil3['laporan_tambah3'];
                    $wil3_pakai3 = $wil3['laporan_pakai3'];

                    $wil3_awal4 = $wil3['laporan_awal4'];
                    $wil3_tambah4 = $wil3['laporan_tambah4'];
                    $wil3_pakai4 = $wil3['laporan_pakai4'];

                    $wil3_awal5 = $wil3['laporan_awal5'];
                    $wil3_tambah5 = $wil3['laporan_tambah5'];
                    $wil3_pakai5 = $wil3['laporan_pakai5'];


                    $wil3_sisa1 = $wil3_awal1 + $wil3_tambah1 - $wil3_pakai1;
                    $wil3_sisa2 = $wil3_awal2 + $wil3_tambah2 - $wil3_pakai2;
                    $wil3_sisa3 = $wil3_awal3 + $wil3_tambah3 - $wil3_pakai3;
                    $wil3_sisa4 = $wil3_awal4 + $wil3_tambah4 - $wil3_pakai4;
                    $wil3_sisa5 = $wil3_awal5 + $wil3_tambah5 - $wil3_pakai5;
                    ?>
                    <td>3</td>
                    <td style="text-align:center;">Pelabuhan Laut Kaimana</td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3_sisa5; ?></td>

                </tr>
                <tr>
                    <?php
                    $wil4_awal1 = $wil4['laporan_awal1'];
                    $wil4_tambah1 = $wil4['laporan_tambah1'];
                    $wil4_pakai1 = $wil4['laporan_pakai1'];

                    $wil4_awal2 = $wil4['laporan_awal2'];
                    $wil4_tambah2 = $wil4['laporan_tambah2'];
                    $wil4_pakai2 = $wil4['laporan_pakai2'];

                    $wil4_awal3 = $wil4['laporan_awal3'];
                    $wil4_tambah3 = $wil4['laporan_tambah3'];
                    $wil4_pakai3 = $wil4['laporan_pakai3'];

                    $wil4_awal4 = $wil4['laporan_awal4'];
                    $wil4_tambah4 = $wil4['laporan_tambah4'];
                    $wil4_pakai4 = $wil4['laporan_pakai4'];

                    $wil4_awal5 = $wil4['laporan_awal5'];
                    $wil4_tambah5 = $wil4['laporan_tambah5'];
                    $wil4_pakai5 = $wil4['laporan_pakai5'];


                    $wil4_sisa1 = $wil4_awal1 + $wil4_tambah1 - $wil4_pakai1;
                    $wil4_sisa2 = $wil4_awal2 + $wil4_tambah2 - $wil4_pakai2;
                    $wil4_sisa3 = $wil4_awal3 + $wil4_tambah3 - $wil4_pakai3;
                    $wil4_sisa4 = $wil4_awal4 + $wil4_tambah4 - $wil4_pakai4;
                    $wil4_sisa5 = $wil4_awal5 + $wil4_tambah5 - $wil4_pakai5;
                    ?>
                    <td>4</td>
                    <td style="text-align:center;">Pelabuhan Laut Sorong</td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4_sisa5; ?></td>

                </tr>
                <tr>
                    <?php
                    $wil5_awal1 = $wil5['laporan_awal1'];
                    $wil5_tambah1 = $wil5['laporan_tambah1'];
                    $wil5_pakai1 = $wil5['laporan_pakai1'];

                    $wil5_awal2 = $wil5['laporan_awal2'];
                    $wil5_tambah2 = $wil5['laporan_tambah2'];
                    $wil5_pakai2 = $wil5['laporan_pakai2'];

                    $wil5_awal3 = $wil5['laporan_awal3'];
                    $wil5_tambah3 = $wil5['laporan_tambah3'];
                    $wil5_pakai3 = $wil5['laporan_pakai3'];

                    $wil5_awal4 = $wil5['laporan_awal4'];
                    $wil5_tambah4 = $wil5['laporan_tambah4'];
                    $wil5_pakai4 = $wil5['laporan_pakai4'];

                    $wil5_awal5 = $wil5['laporan_awal5'];
                    $wil5_tambah5 = $wil5['laporan_tambah5'];
                    $wil5_pakai5 = $wil5['laporan_pakai5'];


                    $wil5_sisa1 = $wil5_awal1 + $wil5_tambah1 - $wil5_pakai1;
                    $wil5_sisa2 = $wil5_awal2 + $wil5_tambah2 - $wil5_pakai2;
                    $wil5_sisa3 = $wil5_awal3 + $wil5_tambah3 - $wil5_pakai3;
                    $wil5_sisa4 = $wil5_awal4 + $wil5_tambah4 - $wil5_pakai4;
                    $wil5_sisa5 = $wil5_awal5 + $wil5_tambah5 - $wil5_pakai5;
                    ?>
                    <td>5</td>
                    <td style="text-align:center;">Pelabuhan Laut Raja Ampat</td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5_sisa5; ?></td>

                </tr>
                <tr>
                    <?php
                    $wil6_awal1 = $wil6['laporan_awal1'];
                    $wil6_tambah1 = $wil6['laporan_tambah1'];
                    $wil6_pakai1 = $wil6['laporan_pakai1'];

                    $wil6_awal2 = $wil6['laporan_awal2'];
                    $wil6_tambah2 = $wil6['laporan_tambah2'];
                    $wil6_pakai2 = $wil6['laporan_pakai2'];

                    $wil6_awal3 = $wil6['laporan_awal3'];
                    $wil6_tambah3 = $wil6['laporan_tambah3'];
                    $wil6_pakai3 = $wil6['laporan_pakai3'];

                    $wil6_awal4 = $wil6['laporan_awal4'];
                    $wil6_tambah4 = $wil6['laporan_tambah4'];
                    $wil6_pakai4 = $wil6['laporan_pakai4'];

                    $wil6_awal5 = $wil6['laporan_awal5'];
                    $wil6_tambah5 = $wil6['laporan_tambah5'];
                    $wil6_pakai5 = $wil6['laporan_pakai5'];


                    $wil6_sisa1 = $wil6_awal1 + $wil6_tambah1 - $wil6_pakai1;
                    $wil6_sisa2 = $wil6_awal2 + $wil6_tambah2 - $wil6_pakai2;
                    $wil6_sisa3 = $wil6_awal3 + $wil6_tambah3 - $wil6_pakai3;
                    $wil6_sisa4 = $wil6_awal4 + $wil6_tambah4 - $wil6_pakai4;
                    $wil6_sisa5 = $wil6_awal5 + $wil6_tambah5 - $wil6_pakai5;
                    ?>
                    <td>6</td>
                    <td style="text-align:center;">Pelabuhan Laut Arar</td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6_sisa5; ?></td>

                </tr>
                <tr>
                    <?php
                    $wil7_awal1 = $wil7['laporan_awal1'];
                    $wil7_tambah1 = $wil7['laporan_tambah1'];
                    $wil7_pakai1 = $wil7['laporan_pakai1'];

                    $wil7_awal2 = $wil7['laporan_awal2'];
                    $wil7_tambah2 = $wil7['laporan_tambah2'];
                    $wil7_pakai2 = $wil7['laporan_pakai2'];

                    $wil7_awal3 = $wil7['laporan_awal3'];
                    $wil7_tambah3 = $wil7['laporan_tambah3'];
                    $wil7_pakai3 = $wil7['laporan_pakai3'];

                    $wil7_awal4 = $wil7['laporan_awal4'];
                    $wil7_tambah4 = $wil7['laporan_tambah4'];
                    $wil7_pakai4 = $wil7['laporan_pakai4'];

                    $wil7_awal5 = $wil7['laporan_awal5'];
                    $wil7_tambah5 = $wil7['laporan_tambah5'];
                    $wil7_pakai5 = $wil7['laporan_pakai5'];


                    $wil7_sisa1 = $wil7_awal1 + $wil7_tambah1 - $wil7_pakai1;
                    $wil7_sisa2 = $wil7_awal2 + $wil7_tambah2 - $wil7_pakai2;
                    $wil7_sisa3 = $wil7_awal3 + $wil7_tambah3 - $wil7_pakai3;
                    $wil7_sisa4 = $wil7_awal4 + $wil7_tambah4 - $wil7_pakai4;
                    $wil7_sisa5 = $wil7_awal5 + $wil7_tambah5 - $wil7_pakai5;
                    ?>
                    <td>7</td>
                    <td style="text-align:center;">Pelabuhan Laut Khusus Sele</td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7_sisa5; ?></td>

                </tr>
                <tr>
                    <?php
                    $wil8_awal1 = $wil8['laporan_awal1'];
                    $wil8_tambah1 = $wil8['laporan_tambah1'];
                    $wil8_pakai1 = $wil8['laporan_pakai1'];

                    $wil8_awal2 = $wil8['laporan_awal2'];
                    $wil8_tambah2 = $wil8['laporan_tambah2'];
                    $wil8_pakai2 = $wil8['laporan_pakai2'];

                    $wil8_awal3 = $wil8['laporan_awal3'];
                    $wil8_tambah3 = $wil8['laporan_tambah3'];
                    $wil8_pakai3 = $wil8['laporan_pakai3'];

                    $wil8_awal4 = $wil8['laporan_awal4'];
                    $wil8_tambah4 = $wil8['laporan_tambah4'];
                    $wil8_pakai4 = $wil8['laporan_pakai4'];

                    $wil8_awal5 = $wil8['laporan_awal5'];
                    $wil8_tambah5 = $wil8['laporan_tambah5'];
                    $wil8_pakai5 = $wil8['laporan_pakai5'];


                    $wil8_sisa1 = $wil8_awal1 + $wil8_tambah1 - $wil8_pakai1;
                    $wil8_sisa2 = $wil8_awal2 + $wil8_tambah2 - $wil8_pakai2;
                    $wil8_sisa3 = $wil8_awal3 + $wil8_tambah3 - $wil8_pakai3;
                    $wil8_sisa4 = $wil8_awal4 + $wil8_tambah4 - $wil8_pakai4;
                    $wil8_sisa5 = $wil8_awal5 + $wil8_tambah5 - $wil8_pakai5;
                    ?>
                    <td>8</td>
                    <td style="text-align:center;">Pelabuhan Laut Teminabuan</td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_satuan']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_awal1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_tambah1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_pakai1']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8_sisa1; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_awal2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_tambah2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_pakai2']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8_sisa2; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_awal3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_tambah3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_pakai3']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8_sisa3; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_awal4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_tambah4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_pakai4']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8_sisa4; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_awal5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_tambah5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_pakai5']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8_sisa5; ?></td>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col" colspan="2">JUMLAH</th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>
                    <th style="text-align:center;" scope="col"></th>

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
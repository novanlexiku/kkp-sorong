<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN PENGAMATAN PENGANGKUTAN/PENGIRIMAN JENAZAH Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
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
                        <h4>LAPORAN PENGAMATAN PENGANGKUTAN/PENGIRIMAN JENAZAH </h4>
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
                <td colspan="11" style="text-align: right;">PKSE-5</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Wilayah Kerja</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Jumlah</th>
                    <th style="text-align:center;" scope="col" colspan="2">Sex</th>
                    <th style="text-align:center;" scope="col" colspan="2">Kewarganegaraan</th>
                    <th style="text-align:center;" scope="col" colspan="2">Penyebab Kematian</th>
                    <th style="text-align:center;" scope="col" colspan="2">Tujuan Akhir Pengiriman Jenazah</th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col">Pria</th>
                    <th style="text-align:center;" scope="col">Wanita</th>
                    <th style="text-align:center;" scope="col">Asing</th>
                    <th style="text-align:center;" scope="col">WNI</th>
                    <th style="text-align:center;" scope="col">Menular</th>
                    <th style="text-align:center;" scope="col">Tidak Menular</th>
                    <th style="text-align:center;" scope="col">Dalam Negeri</th>
                    <th style="text-align:center;" scope="col">Luar Negeri</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $wil1 = $pkse1->row_array();
                    $pria1 = $wil1['laporan_pria'];
                    $wanita1 = $wil1['laporan_wanita'];


                    $jumlah1 = $pria1 + $wanita1;
                    ?>
                    <td>1</td>
                    <td style="text-align:left;">Bandar Udara Domine Eduard Osok Sorong</td>
                    <td style="text-align:center;"><?php echo $jumlah1; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil1['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil2 = $pkse2->row_array();
                    $pria2 = $wil2['laporan_pria'];
                    $wanita2 = $wil2['laporan_wanita'];


                    $jumlah2 = $pria2 + $wanita2;
                    ?>
                    <td>2</td>
                    <td style="text-align:left;">Pelabuhan Laut Fak-Fak</td>
                    <td style="text-align:center;"><?php echo $jumlah2; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil2['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil3 = $pkse3->row_array();
                    $pria3 = $wil3['laporan_pria'];
                    $wanita3 = $wil3['laporan_wanita'];


                    $jumlah3 = $pria3 + $wanita3;
                    ?>
                    <td>3</td>
                    <td style="text-align:left;">Pelabuhan Laut Kaimana</td>
                    <td style="text-align:center;"><?php echo $jumlah3; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil3['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil4 = $pkse4->row_array();
                    $pria4 = $wil4['laporan_pria'];
                    $wanita4 = $wil4['laporan_wanita'];


                    $jumlah4 = $pria4 + $wanita4;
                    ?>
                    <td>4</td>
                    <td style="text-align:left;">Pelabuhan Laut Sorong</td>
                    <td style="text-align:center;"><?php echo $jumlah4; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil4['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil5 = $pkse5->row_array();
                    $pria5 = $wil5['laporan_pria'];
                    $wanita5 = $wil5['laporan_wanita'];


                    $jumlah5 = $pria5 + $wanita5;
                    ?>
                    <td>5</td>
                    <td style="text-align:left;">Pelabuhan Laut Raja Ampat</td>
                    <td style="text-align:center;"><?php echo $jumlah5; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil5['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil6 = $pkse6->row_array();
                    $pria6 = $wil6['laporan_pria'];
                    $wanita6 = $wil6['laporan_wanita'];
                    // $wna = $wil6['laporan_wna'];
                    // $wni = $wil6['laporan_wni'];
                    // $menular = $wil6['laporan_menular'];
                    // $tdkmenular = $wil6['laporan_tidakmenular'];
                    // $dalam = $wil6['laporan_dalam'];
                    // $luar = $wil6['laporan_luar'];

                    $jumlah6 = $pria6 + $wanita6;
                    ?>
                    <td>6</td>
                    <td style="text-align:left;">Pelabuhan Laut Arar</td>
                    <td style="text-align:center;"><?php echo $jumlah6; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil6['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil7 = $pkse7->row_array();
                    $pria7 = $wil7['laporan_pria'];
                    $wanita7 = $wil7['laporan_wanita'];
                    // $wna = $wil7['laporan_wna'];
                    // $wni = $wil7['laporan_wni'];
                    // $menular = $wil7['laporan_menular'];
                    // $tdkmenular = $wil7['laporan_tidakmenular'];
                    // $dalam = $wil7['laporan_dalam'];
                    // $luar = $wil7['laporan_luar'];

                    $jumlah7 = $pria7 + $wanita7;
                    ?>
                    <td>7</td>
                    <td style="text-align:left;">Pelabuhan Laut Khusus Sele</td>
                    <td style="text-align:center;"><?php echo $jumlah7; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil7['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $wil8 = $pkse8->row_array();
                    $pria8 = $wil8['laporan_pria'];
                    $wanita8 = $wil8['laporan_wanita'];
                    // $wna = $wil8['laporan_wna'];
                    // $wni = $wil8['laporan_wni'];
                    // $menular = $wil8['laporan_menular'];
                    // $tdkmenular = $wil8['laporan_tidakmenular'];
                    // $dalam = $wil8['laporan_dalam'];
                    // $luar = $wil8['laporan_luar'];

                    $jumlah8 = $pria8 + $wanita8;
                    ?>
                    <td>8</td>
                    <td style="text-align:left;">Pelabuhan Laut Teminabuan</td>
                    <td style="text-align:center;"><?php echo $jumlah8; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_pria']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_wanita']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_wna']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_wni']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_menular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_tidakmenular']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_dalam']; ?></td>
                    <td style="text-align:center;"><?php echo $wil8['laporan_luar']; ?></td>
                </tr>
                <tr>
                    <?php
                    $total = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6 + $jumlah7 + $jumlah8;
                    ?>
                    <th style="text-align:center;" scope="col" colspan="2">Jumlah</th>
                    <th style="text-align:center;" scope="col"><?php echo $total; ?></th>
                    <th style="text-align:center;" scope="col" colspan="8"></th>

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
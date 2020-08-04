<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN HASIL PEMERIKSAAN KESEHATAN PADA KEDATANGAN KAPAL/PESAWAT Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
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
                        <h4>LAPORAN HASIL PEMERIKSAAN KESEHATAN PADA KEDATANGAN KAPAL/PESAWAT</h4>
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
                <td colspan="11" style="text-align: right;">UKLW-9</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th rowspan="3">No</th>
                    <th style="text-align:center;" scope="col" rowspan="3">Wilayah Kerja</th>
                    <th style="text-align:center;" scope="col" colspan="9">Kapal/Pesawat Dari Luar Negeri</th>
                    <th style="text-align:center;" scope="col" colspan="9">Kapal/Pesawat Dari Dalam Negeri</th>
                    <th style="text-align:center;" scope="col" rowspan="3">Pemberian e-HAC/HAC</th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col" colspan="3">Status Asal Pel</th>
                    <th style="text-align:center;" scope="col" colspan="3">Hasil Pemeriksaan Kapal/Pesawat</th>
                    <th style="text-align:center;" scope="col" colspan="3">Hasil Pemeriksaaan ABK/Crew</th>
                    <th style="text-align:center;" scope="col" colspan="3">Status Asal Pel</th>
                    <th style="text-align:center;" scope="col" colspan="3">Hasil Pemeriksaan Kapal/Pesawat</th>
                    <th style="text-align:center;" scope="col" colspan="3">Hasil Pemeriksaaan ABK/Crew</th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Infected</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Infected</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Infected</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Infected</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Infected</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Infected</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($pkse1->result() as $row) {
                        $laporan_ln_asalsehat = $row->laporan_ln_asalsehat;
                        $laporan_ln_asalinf = $row->laporan_ln_asalinf;
                        $laporan_ln_hpsehat = $row->laporan_ln_hpsehat;
                        $laporan_ln_hpinf = $row->laporan_ln_hpinf;
                        $laporan_ln_abksehat = $row->laporan_ln_abksehat;
                        $laporan_ln_abkinf = $row->laporan_ln_abkinf;
                        $laporan_dn_asalsehat = $row->laporan_dn_asalsehat;
                        $laporan_dn_asalinf = $row->laporan_dn_asalinf;
                        $laporan_dn_hpsehat = $row->laporan_dn_hpsehat;
                        $laporan_dn_hpinf = $row->laporan_dn_hpinf;
                        $laporan_dn_abksehat = $row->laporan_dn_abksehat;
                        $laporan_dn_abkinf = $row->laporan_dn_abkinf;

                        $jumlahln1 = $laporan_ln_asalsehat + $laporan_ln_asalinf;
                        $jumlahln2 = $laporan_ln_hpsehat + $laporan_ln_hpinf;
                        $jumlahln3 = $laporan_ln_abksehat + $laporan_ln_abkinf;
                        $jumlahdn1 = $laporan_dn_asalsehat + $laporan_dn_asalinf;
                        $jumlahdn2 = $laporan_dn_hpsehat + $laporan_dn_hpinf;
                        $jumlahdn3 = $laporan_dn_abksehat + $laporan_dn_abkinf;

                    ?>
                        <td>1</td>
                        <td style="text-align:center;">Bandar Udara Domine Eduard Osok Sorong</td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_asalsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_asalinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahln1; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_hpsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_hpinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahln2; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_abksehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_abkinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahln3; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_asalsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_asalinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahdn1; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_hpsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_hpinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahdn2; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_abksehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_abkinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahdn3; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse2->result() as $row) {
                        $laporan_ln_asalsehat = $row->laporan_ln_asalsehat;
                        $laporan_ln_asalinf = $row->laporan_ln_asalinf;
                        $laporan_ln_hpsehat = $row->laporan_ln_hpsehat;
                        $laporan_ln_hpinf = $row->laporan_ln_hpinf;
                        $laporan_ln_abksehat = $row->laporan_ln_abksehat;
                        $laporan_ln_abkinf = $row->laporan_ln_abkinf;
                        $laporan_dn_asalsehat = $row->laporan_dn_asalsehat;
                        $laporan_dn_asalinf = $row->laporan_dn_asalinf;
                        $laporan_dn_hpsehat = $row->laporan_dn_hpsehat;
                        $laporan_dn_hpinf = $row->laporan_dn_hpinf;
                        $laporan_dn_abksehat = $row->laporan_dn_abksehat;
                        $laporan_dn_abkinf = $row->laporan_dn_abkinf;

                        $jumlahln1 = $laporan_ln_asalsehat + $laporan_ln_asalinf;
                        $jumlahln2 = $laporan_ln_hpsehat + $laporan_ln_hpinf;
                        $jumlahln3 = $laporan_ln_abksehat + $laporan_ln_abkinf;
                        $jumlahdn1 = $laporan_dn_asalsehat + $laporan_dn_asalinf;
                        $jumlahdn2 = $laporan_dn_hpsehat + $laporan_dn_hpinf;
                        $jumlahdn3 = $laporan_dn_abksehat + $laporan_dn_abkinf;

                    ?>
                        <td>2</td>
                        <td style="text-align:center;">Pelabuhan Laut Fak-Fak</td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_asalsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_asalinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahln1; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_hpsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_hpinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahln2; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_abksehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ln_abkinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahln3; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_asalsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_asalinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahdn1; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_hpsehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_hpinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahdn2; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_abksehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_dn_abkinf; ?></td>
                        <td style="text-align:center;"><?php echo $jumlahdn3; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td>3</td>
                    <td style="text-align:center;">Pelabuhan Laut Kaimana</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td style="text-align:center;">Pelabuhan Laut Sorong</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td style="text-align:center;">Pelabuhan Laut Raja Ampat</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td style="text-align:center;">Pelabuhan Laut Arar</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td style="text-align:center;">Pelabuhan Laut Khusus Sele</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td style="text-align:center;">Pelabuhan Laut Teminabuan</td>
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
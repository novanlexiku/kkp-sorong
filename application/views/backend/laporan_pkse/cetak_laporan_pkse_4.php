<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN PENGAMATAN LALU LINTAS PENUMPANG Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
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
                        <h4>LAPORAN PENGAMATAN LALU LINTAS PENUMPANG </h4>
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
                <td colspan="11" style="text-align: right;">PKSE-4</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Wilayah Kerja</th>
                    <th style="text-align:center;" scope="col" colspan="3">Jumlah Penumpang Yang</th>
                    <th style="text-align:center;" scope="col" colspan="2">Hasil</th>
                    <th style="text-align:center;" scope="col" colspan="2">Tindak Lanjut</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Jumlah Ijin Angkut</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Pemberian e-HAC/HAC</th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col">Naik</th>
                    <th style="text-align:center;" scope="col">Turun</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Sakit</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Rujuk ke RS</th>
                    <th style="text-align:center;" scope="col">Tidak Rujuk ke RS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($pkse1->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;
                    ?>
                        <td>1</td>
                        <td style="text-align:left;">Bandar Udara Domine Eduard Osok Sorong</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse2->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;

                    ?>
                        <td>2</td>
                        <td style="text-align:left;">Pelabuhan Laut Fak-Fak</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse3->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;
                    ?>
                        <td>3</td>
                        <td style="text-align:left;">Pelabuhan Laut Kaimana</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse4->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;

                    ?>
                        <td>4</td>
                        <td style="text-align:left;">Pelabuhan Laut Sorong</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse5->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;

                    ?>
                        <td>5</td>
                        <td style="text-align:left;">Pelabuhan Laut Raja Ampat</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse6->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;

                    ?>
                        <td>6</td>
                        <td style="text-align:left;">Pelabuhan Laut Arar</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse7->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;

                    ?>
                        <td>7</td>
                        <td style="text-align:left;">Pelabuhan Laut Khusus Sele</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse8->result() as $row) {
                        $naik = $row->laporan_pnaik;
                        $turun = $row->laporan_pturun;
                        $jumlah = $naik + $turun;

                    ?>
                        <td>8</td>
                        <td style="text-align:left;">Pelabuhan Laut Teminabuan</td>
                        <td style="text-align:center;"><?php echo $row->laporan_pnaik; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pturun; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psakit; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_psehat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_prujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ptidakrujuk; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ijin; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ehac; ?></td>
                    <?php } ?>
                </tr>
                <tr>

                    <th style="text-align:center;" scope="col" colspan="2">Jumlah</th>
                    <?php
                    foreach ($total_naik->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_pnaik; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_turun->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_pturun; ?></th>
                    <?php } ?>
                    <th style="text-align:center;" scope="col"></th>
                    <?php
                    foreach ($total_sakit->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_psakit; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_sehat->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_psehat; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_rujuk->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_prujuk; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_tdkrujuk->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_ptidakrujuk; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_ijin->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_ijin; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_ehac->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_ehac; ?></th>
                    <?php } ?>

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
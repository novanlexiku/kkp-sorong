<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN PENERBITAN DOKUMEN KESEHATAN KAPAL/PESAWAT Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
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
                        <h4>LAPORAN PENERBITAN DOKUMEN KESEHATAN KAPAL/PESAWAT</h4>
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
                <td colspan="11" style="text-align: right;">PKSE-3</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th style="text-align:center;" scope="col" rowspan="2">Wilayah Kerja</th>
                    <th style="text-align:center;" scope="col" colspan="8">Jumlah dan Jenis Dokumen Kesehatan Yang Diterbitkan</th>
                </tr>
                <tr>
                    <th style="text-align:center;" scope="col">CoP</th>
                    <th style="text-align:center;" scope="col">PHQC</th>
                    <th style="text-align:center;" scope="col">Health Book</th>
                    <th style="text-align:center;" scope="col">SSCEC</th>
                    <th style="text-align:center;" scope="col">SSCC</th>
                    <th style="text-align:center;" scope="col">OME SSCEC/SSCC</th>
                    <th style="text-align:center;" scope="col">Sailing Permit</th>
                    <th style="text-align:center;" scope="col">P3K</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($pkse1->result() as $row) {

                    ?>
                        <td>1</td>
                        <td style="text-align:left;">Bandar Udara Domine Eduard Osok Sorong</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse2->result() as $row) {


                    ?>
                        <td>2</td>
                        <td style="text-align:left;">Pelabuhan Laut Fak-Fak</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse3->result() as $row) {

                    ?>
                        <td>3</td>
                        <td style="text-align:left;">Pelabuhan Laut Kaimana</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse4->result() as $row) {


                    ?>
                        <td>4</td>
                        <td style="text-align:left;">Pelabuhan Laut Sorong</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse5->result() as $row) {


                    ?>
                        <td>5</td>
                        <td style="text-align:left;">Pelabuhan Laut Raja Ampat</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse6->result() as $row) {


                    ?>
                        <td>6</td>
                        <td style="text-align:left;">Pelabuhan Laut Arar</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse7->result() as $row) {


                    ?>
                        <td>7</td>
                        <td style="text-align:left;">Pelabuhan Laut Khusus Sele</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <?php
                    foreach ($pkse8->result() as $row) {


                    ?>
                        <td>8</td>
                        <td style="text-align:left;">Pelabuhan Laut Teminabuan</td>
                        <td style="text-align:center;"><?php echo $row->laporan_cop; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_phqc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_hbook; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscec; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sscc; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_ome; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_sail; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_p3k; ?></td>
                    <?php } ?>
                </tr>
                <tr>

                    <th style="text-align:center;" scope="col" colspan="2">Jumlah</th>
                    <?php
                    foreach ($total_cop->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_cop; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_phqc->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_phqc; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_hb->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_hbook; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_sscec->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_sscec; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_sscc->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_sscc; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_ome->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_ome; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_sp->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_sail; ?></th>
                    <?php } ?>
                    <?php
                    foreach ($total_p3k->result() as $row) {
                    ?>
                        <th style="text-align:center;" scope="col"><?php echo $row->laporan_p3k; ?></th>
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
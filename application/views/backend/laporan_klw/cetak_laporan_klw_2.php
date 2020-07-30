<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>LAPORAN PENERBITAN SERTIFIKAT KESEHATAN BAGI MASYARAKAT</title>
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
        <?php
        $b = $laporan->row_array();
        ?>
        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
            <tr>
                <td colspan="2" style="width:800px;paddin-left:20px;">
                    <center>
                        <h4>LAPORAN PENERBITAN SERTIFIKAT KESEHATAN BAGI MASYARAKAT</h4>
                    </center><br />
                </td>
            </tr>
            <tr>
                <th style="text-align:left;width:100px;">WILAYAH KERJA</th>
                <td style="text-align:left;">: <?php echo $b['wilker_nama']; ?></td>

            </tr>
            <tr>
                <th style="text-align:left;">BULAN</th>
                <td style="text-align:left;">: <?php echo $b['laporan_tanggal_bulan']; ?></td>

            </tr>
            <tr>
                <th colspan="0" style="text-align:left;width:200px;">TAHUN</th>
                <td colspan="11" style="text-align:left;width:200px;">: <?php echo $b['laporan_tanggal_tahun']; ?></td>
            </tr>
            <tr>
                <td><br /><br /><br /></td>
                <td colspan="11" style="text-align: right;">UKLW-2</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" colspan="2" class="text-center">Hasil Pemeriksaan</th>
                    <th scope="col"></th>
                </tr>
                <tr>
                    <th>No</th>
                    <th style="text-align:center;" scope="col">Tanggal</th>
                    <th style="text-align:center;" scope="col">Barcode</th>
                    <th style="text-align:center;" scope="col">Nama</th>
                    <th style="text-align:center;" scope="col">Sex</th>
                    <th style="text-align:center;" scope="col">Umur</th>
                    <th style="text-align:center;" scope="col">Alamat</th>
                    <th style="text-align:center;" scope="col">Pekerjaan</th>
                    <th style="text-align:center;" scope="col">Sehat</th>
                    <th style="text-align:center;" scope="col">Carrier</th>
                    <th style="text-align:center;" scope="col">Tujuan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($laporan2->result() as $row) {
                    $no++;
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_barcode; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_nama; ?></td>
                        <td style="text-align:center;">
                            <?php if ($row->laporan_sex == 'laki') {
                                echo 'Laki-Laki'; ?>
                            <?php } else {
                                echo 'Perempuan';
                            } ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_umur; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_alamat; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_pekerjaan; ?></td>
                        <td style="text-align:center;">
                            <?php if ($row->laporan_hasil == 'sehat') {
                                echo '&radic;'; ?>
                            <?php } ?> </td>
                        <td style="text-align:center;">
                            <?php if ($row->laporan_hasil == 'carier') {
                                echo '&radic;'; ?>
                            <?php } ?> </td>
                        <td style="text-align:center;"><?php echo $row->laporan_tujuan; ?></td>
                    </tr>
                <?php } ?>

                <tr>
                    <th scope="col"></th>
                    <th scope="col" style="text-align: center;">JUMLAH</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" style="text-align: center;"></th>
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
                <td align="center"><?php echo $b['wilker_nama']; ?>,<?php echo date("d-m-Y"); ?></td>
            </tr>
            <tr>
                <td align="center">Koordinator Wilayah</td>
                <td align="center">Pembuat Laporan</td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /></td>
            </tr>
            <tr>
                <td align="center">( <?php echo $b['user_name']; ?> )</td>
                <td align="center">( <?php echo $this->session->userdata('name'); ?> )</td>
            </tr>
            <tr>
                <td align="center">( NIP:<?php echo $b['user_nip']; ?> )</td>
                <td align="center">( NIP:<?php echo $this->session->userdata('nip'); ?> )</td>
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
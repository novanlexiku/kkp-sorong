<html lang="en" moznomarginboxes mozdisallowselectionprint>
<?php
$b = $laporan->row_array();
?>

<head>
    <title>LAPORAN PEMAKAIAN / STOK OBAT-OBATAN & VAKSIN Bulan:<?php echo $b['laporan_tanggal_bulan']; ?> Tahun:<?php echo $b['laporan_tanggal_tahun']; ?></title>
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
                        <h4>LAPORAN PEMAKAIAN / STOK OBAT-OBATAN & VAKSIN</h4>
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
                <td colspan="11" style="text-align: right;">UKLW-7</td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th style="text-align:center;" scope="col">Nama Obat</th>
                    <th style="text-align:center;" scope="col">Satuan</th>
                    <th style="text-align:center;" scope="col">Stok Awal</th>
                    <th style="text-align:center;" scope="col">Stok Tambahan</th>
                    <th style="text-align:center;" scope="col">Jumlah</th>
                    <th style="text-align:center;" scope="col">Stok keluar</th>
                    <th style="text-align:center;" scope="col">Stok Sisa</th>
                    <th style="text-align:center;" scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($laporan2->result() as $row) {
                    $no++;
                    $stok_awal = $row->laporan_stokawal;
                    $stok_tambah = $row->laporan_stoktambahan;
                    $stok_keluar = $row->laporan_stokkeluar;
                    $jumlah = $stok_awal + $stok_tambah;
                    $total = $jumlah - $stok_keluar;

                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_nama; ?></td>
                        <td style="text-align:center;">
                            <?php if ($row->laporan_satuan == 'pcs') {
                                echo 'PCS'; ?>
                            <?php } elseif ($row->laporan_satuan == 'lusin') {
                                echo 'Lusin';
                            } ?></td>
                        <td style="text-align:center;"><?php echo $stok_awal; ?></td>
                        <td style="text-align:center;"><?php echo $stok_tambah; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah; ?></td>
                        <td style="text-align:center;"><?php echo $stok_keluar; ?></td>
                        <td style="text-align:center;"><?php echo $total; ?></td>
                        <td style="text-align:center;"><?php echo $row->laporan_keterangan; ?></td>
                    </tr>
                <?php } ?>
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
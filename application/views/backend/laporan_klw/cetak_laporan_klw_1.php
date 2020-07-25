<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title>Laporan Kendaraan Perlintasan</title>
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
                        <h4>LAPORAN KUNJUNGAN PASIEN DAN JENIS PENYAKIT YANG DIDERITA PADA KLINIK KKP</h4>
                    </center><br />
                </td>
            </tr>
            <tr>
                <th style="text-align:left;width:100px;">WILAYAH KERJA</th>
                <td style="text-align:left;">: ini wilker</td>

            </tr>
            <tr>
                <th style="text-align:left;">Bulan</th>
                <td style="text-align:left;">: </td>

            </tr>
            <tr>
                <th colspan="0" style="text-align:left;width:200px;">Tahun</th>
                <td colspan="11" style="text-align:left;width:200px;">: </td>
            </tr>
            <tr>
                <td><br /><br /><br /></td>
            </tr>
        </table>

        <table border="1" align="center" style="width:1000px;margin-bottom:20px;">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" colspan="8" class="text-center">Klasifikasi Pasien/Penderita</th>
                </tr>
                <tr>
                    <th scope="col" style="text-align:center;">#</th>
                    <th scope="col" style="text-align:center;">Jenis Penyakit</th>
                    <th scope="col" style="text-align:center;">ABK</th>
                    <th scope="col" style="text-align:center;">TKBM</th>
                    <th scope="col" style="text-align:center;">Penumpang</th>
                    <th scope="col" style="text-align:center;">Pengantar/Penjemput</th>
                    <th scope="col" style="text-align:center;">KKP</th>
                    <th scope="col" style="text-align:center;">Stackholder</th>
                    <th scope="col" style="text-align:center;">Umum</th>
                    <th scope="col" style="text-align:center;">Jumlah</th>

                </tr>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" style="text-align: left;">A. PENYAKIT MENULAR</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($penyakit1->result_array() as $i) {
                    $no++;
                    $penyakit = $i['penyakit_nama'];
                    $abk = $i['laporan_abk'];
                    $tkbm = $i['laporan_tkbm'];
                    $penumpang = $i['laporan_penumpang'];
                    $pp = $i['laporan_pp'];
                    $kkp = $i['laporan_kkp'];
                    $sh = $i['laporan_sh'];
                    $umum = $i['laporan_umum'];
                    $jumlah1 = $abk + $tkbm + $penumpang + $pp + $kkp + $sh + $umum;
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td style="text-align:center;"><?php echo $penyakit; ?></td>
                        <td style="text-align:center;"><?php echo $abk; ?></td>
                        <td style="text-align:center;"><?php echo $tkbm; ?></td>
                        <td style="text-align:center;"><?php echo $penumpang; ?></td>
                        <td style="text-align:center;"><?php echo $pp; ?></td>
                        <td style="text-align:center;"><?php echo $kkp; ?></td>
                        <td style="text-align:center;"><?php echo $sh; ?></td>
                        <td style="text-align:center;"><?php echo $umum; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah1; ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" style="text-align: left;">B. PENYAKIT TIDAK MENULAR</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                <?php
                $no = 0;
                foreach ($penyakit2->result_array() as $i) {
                    $no++;
                    $penyakit = $i['penyakit_nama'];
                    $abk = $i['laporan_abk'];
                    $tkbm = $i['laporan_tkbm'];
                    $penumpang = $i['laporan_penumpang'];
                    $pp = $i['laporan_pp'];
                    $kkp = $i['laporan_kkp'];
                    $sh = $i['laporan_sh'];
                    $umum = $i['laporan_umum'];
                    $jumlah1 = $abk + $tkbm + $penumpang + $pp + $kkp + $sh + $umum;
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td style="text-align:center;"><?php echo $penyakit; ?></td>
                        <td style="text-align:center;"><?php echo $abk; ?></td>
                        <td style="text-align:center;"><?php echo $tkbm; ?></td>
                        <td style="text-align:center;"><?php echo $penumpang; ?></td>
                        <td style="text-align:center;"><?php echo $pp; ?></td>
                        <td style="text-align:center;"><?php echo $kkp; ?></td>
                        <td style="text-align:center;"><?php echo $sh; ?></td>
                        <td style="text-align:center;"><?php echo $umum; ?></td>
                        <td style="text-align:center;"><?php echo $jumlah1; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td></td>
        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="right">Lokasi, </td>
            </tr>
            <tr>
                <td align="right"></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /></td>
            </tr>
            <tr>
                <td align="right">( Nama )</td>
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
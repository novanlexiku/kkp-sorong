<div class="page-inner">
    <div class="page-title">
        <h3>Laporan Hasil Pemeriksaan Kesehatan Pada Keberangkatan Kapal/Pesawat</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Laporan PKSE</a></li>
                <li class="active">PKSE 2</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-white">
                    <div class="panel-body">
                        <?php if ($this->session->userdata('wilker') != '1') : ?>
                            <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                        <?php else : ?>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table id="data-table" class="display table" style="width: 100%; ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th style="text-align:center;" scope="col">Tanggal</th>
                                        <th style="text-align:center;" scope="col">Wilayah Kerja</th>
                                        <th style="text-align:center;" scope="col">Asal LN Sehat</th>
                                        <th style="text-align:center;" scope="col">Asal LN Infected</th>
                                        <th style="text-align:center;" scope="col">Asal LN Jumlah</th>
                                        <th style="text-align:center;" scope="col">Periksa LN Sehat</th>
                                        <th style="text-align:center;" scope="col">Periksa LN Infected</th>
                                        <th style="text-align:center;" scope="col">Periksa LN Jumlah</th>
                                        <th style="text-align:center;" scope="col">ABK LN Sehat</th>
                                        <th style="text-align:center;" scope="col">ABK LN Infected</th>
                                        <th style="text-align:center;" scope="col">ABK LN Jumlah</th>
                                        <th style="text-align:center;" scope="col">Asal DN Sehat</th>
                                        <th style="text-align:center;" scope="col">Asal DN Infected</th>
                                        <th style="text-align:center;" scope="col">Asal DN Jumlah</th>
                                        <th style="text-align:center;" scope="col">Periksa DN Sehat</th>
                                        <th style="text-align:center;" scope="col">Periksa DN Infected</th>
                                        <th style="text-align:center;" scope="col">Periksa DN Jumlah</th>
                                        <th style="text-align:center;" scope="col">ABK DN Sehat</th>
                                        <th style="text-align:center;" scope="col">ABK DN Infected</th>
                                        <th style="text-align:center;" scope="col">ABK DN Jumlah</th>
                                        <th style="text-align:center;" scope="col">Pemberian e-HAC/HAC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($this->session->userdata('wilker') != '1') : ?>
                                        <?php
                                        $no = 0;
                                        foreach ($laporan2->result() as $row) {
                                            $no++;
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
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
                                                <td style="text-align:center;"><?php echo $row->wilker_nama; ?></td>
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
                                            </tr>
                                        <?php } ?>
                                    <?php else : ?>
                                        <?php
                                        $no = 0;
                                        foreach ($laporan->result() as $row) {
                                            $no++;
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
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
                                                <td style="text-align:center;"><?php echo $row->wilker_nama; ?></td>
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
                                            </tr>
                                        <?php } ?>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($this->session->userdata('wilker') == '1') : ?>
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <form action="<?php echo site_url('backend/laporan_pkse/cetak_laporan_pkse_2'); ?>" method="post" target="_blank">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type='text' name="tgl2" class="form-control datepicker2" placeholder="Bulan" required />
                                    </div>
                                    <div class="col-md-3">
                                        <input type='text' name="tgl3" class="form-control datepicker3" placeholder="Tahun" required />
                                    </div>

                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success m-b-sm">Tampilkan Data</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            <?php else : ?>
            <?php endif; ?>

        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
<div class="page-footer text-center">
    <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by KKP-Sorong.</p>
</div>
</div><!-- Page Inner -->
</main><!-- Page Content -->

<!--ADD RECORD MODAL-->
<form action="<?php echo site_url('backend/laporan_pkse/save_pkse2'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Data Laporan Hasil Pemeriksaan Kesehatan Pada Keberangkatan Kapal/Pesawat Baru</h5>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="myModalLabel">Kapal/Pesawat dari Luar Negeri</h5>
                    <div class="form-group">
                        <input type="number" min="0" name="ln_asalsehat" class="form-control" placeholder="Status Asal Pel Sehat" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="ln_asalinf" class="form-control" placeholder="Status Asal Pel Infected" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="ln_hpsehat" class="form-control" placeholder="Hasil Pemeriksaan Kapal/Pesawat Sehat" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="ln_hpinf" class="form-control" placeholder="Hasil Pemeriksaan Kapal/Pesawat Infected" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="ln_abksehat" class="form-control" placeholder="Hasil Pemeriksaan ABK/Crew Sehat" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="ln_abkinf" class="form-control" placeholder="Hasil Pemeriksaan ABK/Crew Infected" required>
                    </div>
                    <hr>
                    <h5 class="modal-title" id="myModalLabel">Kapal/Pesawat dari Dalam Negeri</h5>
                    <div class="form-group">
                        <input type="number" min="0" name="dn_asalsehat" class="form-control" placeholder="Status Asal Pel Sehat" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="dn_asalinf" class="form-control" placeholder="Status Asal Pel Infected" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="dn_hpsehat" class="form-control" placeholder="Hasil Pemeriksaan Kapal/Pesawat Sehat" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="dn_hpinf" class="form-control" placeholder="Hasil Pemeriksaan Kapal/Pesawat Infected" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="dn_abksehat" class="form-control" placeholder="Hasil Pemeriksaan ABK/Crew Sehat" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="dn_abkinf" class="form-control" placeholder="Hasil Pemeriksaan ABK/Crew Infected" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="number" min="0" name="ehac" class="form-control" placeholder="Pemberian e-HAC/HAC" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>




<!-- Javascripts -->
<script src="<?php echo base_url() . 'assets/plugins/jquery/jquery-2.1.4.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/pace-master/pace.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/jquery-blockui/jquery.blockui.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/switchery/switchery.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/uniform/jquery.uniform.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/classie.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/offcanvasmenueffects/js/main.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/waves/waves.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/3d-bold-navigation/js/main.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/jquery-mockjax-master/jquery.mockjax.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/moment/moment.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables/js/jquery.datatables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/js/modern.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/toastr/jquery.toast.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' ?>"></script>


<script>
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd",
    });
    $('.datepicker2').datepicker({
        format: "mm",
        viewMode: "months",
        minViewMode: "months"
    });
    $('.datepicker3').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
</script>
<script>
    $(document).ready(function() {
        $('#data-table').dataTable();

        //Delete Record
        $('.btn-delete').on('click', function() {
            var id = $(this).data('id');
            $('[name="id"]').val(id);
            $('#DeleteModal').modal('show');
        });

    });
</script>

<!--Toast Message-->
<?php if ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Laporan Tersimpan!",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#7EC857'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'info') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Info',
            text: "Penyakit Diperbarui!",
            showHideTransition: 'slide',
            icon: 'info',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#00C9E6'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-delete') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Penyakit Dihapus!.",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#7EC857'
        });
    </script>
<?php else : ?>

<?php endif; ?>

</body>

</html>
<div class="page-inner">
    <div class="page-title">
        <h3>Laporan Stok Dokumen Kesehatan Kapal</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Laporan PKSE</a></li>
                <li class="active">PKSE 7</li>
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
                                        <th style="text-align:center;" scope="col">Satuan</th>
                                        <th style="text-align:center;" scope="col">Stok Awal CoP</th>
                                        <th style="text-align:center;" scope="col">Tambahan Stok CoP</th>
                                        <th style="text-align:center;" scope="col">Pemakaian CoP</th>
                                        <th style="text-align:center;" scope="col">Stok Awal SSCC/SSCEC</th>
                                        <th style="text-align:center;" scope="col">Tambahan Stok SSCC/SSCEC</th>
                                        <th style="text-align:center;" scope="col">Pemakaian SSCC/SSCEC</th>
                                        <th style="text-align:center;" scope="col">Stok Awal Health Book</th>
                                        <th style="text-align:center;" scope="col">Tambahan Stok Health Book</th>
                                        <th style="text-align:center;" scope="col">Pemakaian Health Book</th>
                                        <th style="text-align:center;" scope="col">Stok Awal PHQC</th>
                                        <th style="text-align:center;" scope="col">Tambahan Stok PHQC</th>
                                        <th style="text-align:center;" scope="col">Pemakaian PHQC</th>
                                        <th style="text-align:center;" scope="col">Stok Awal P3K</th>
                                        <th style="text-align:center;" scope="col">Tambahan Stok P3K</th>
                                        <th style="text-align:center;" scope="col">Pemakaian P3K</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($this->session->userdata('wilker') != '1') : ?>
                                        <?php
                                        $no = 0;
                                        foreach ($laporan2->result() as $row) {
                                            $no++;
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
                                                <td style="text-align:center;"><?php echo $row->wilker_nama; ?></td>
                                                <td style="text-align:center;">
                                                <?php if ($row->laporan_satuan == 'pcs') {
                                                        echo 'PCS'; ?>
                                                    <?php }?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal4; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah4; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai4; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal5; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah5; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai5; ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php else : ?>
                                        <?php
                                        $no = 0;
                                        foreach ($laporan->result() as $row) {
                                            $no++;
                                            
                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
                                                <td style="text-align:center;"><?php echo $row->wilker_nama; ?></td>
                                                <td style="text-align:center;">
                                                <?php if ($row->laporan_satuan == 'pcs') {
                                                        echo 'PCS'; ?>
                                                    <?php }?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal4; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah4; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai4; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_awal5; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tambah5; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_pakai5; ?></td>
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
                            <form action="<?php echo site_url('backend/laporan_pkse/cetak_laporan_pkse_7'); ?>" method="post" target="_blank">
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
<form action="<?php echo site_url('backend/laporan_pkse/save_pkse7'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Data Laporan Stok Dokumen Kesehatan Kapal Baru</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="satuan" required>
                            <option value="pcs">PCS</option>
                        </select>                    
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="awal1" class="form-control" placeholder="Stok Awal CoP" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="tambah1" class="form-control" placeholder="Stok Tambahan CoP" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="pakai1" class="form-control" placeholder="Pemakaian CoP" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="awal2" class="form-control" placeholder="Stok Awal SSCC/SSCEC" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="tambah2" class="form-control" placeholder="Stok Tambahan SSCC/SSCEC" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="pakai2" class="form-control" placeholder="Pemakaian SSCC/SSCEC" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="awal3" class="form-control" placeholder="Stok Awal Health Book" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="tambah3" class="form-control" placeholder="Stok Tambahan Health Book" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="pakai3" class="form-control" placeholder="Pemakaian Health Book" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="awal4" class="form-control" placeholder="Stok Awal PHQC" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="tambah4" class="form-control" placeholder="Stok Tambahan PHQC" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="pakai4" class="form-control" placeholder="Pemakaian PHQC" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="awal5" class="form-control" placeholder="Stok Awal P3K" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="tambah5" class="form-control" placeholder="Stok Tambahan P3K" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="pakai5" class="form-control" placeholder="Pemakaian P3K" required>
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
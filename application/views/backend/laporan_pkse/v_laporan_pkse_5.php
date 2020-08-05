<div class="page-inner">
    <div class="page-title">
        <h3>Laporan Pengamatan Pengangkutan/Pengiriman Jenazah</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Laporan PKSE</a></li>
                <li class="active">PKSE 5</li>
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
                                        <th style="text-align:center;" scope="col">Pria</th>
                                        <th style="text-align:center;" scope="col">Wanita</th>
                                        <th style="text-align:center;" scope="col">WNA</th>
                                        <th style="text-align:center;" scope="col">WNI</th>
                                        <th style="text-align:center;" scope="col">Menular</th>
                                        <th style="text-align:center;" scope="col">Tidak Menular</th>
                                        <th style="text-align:center;" scope="col">Pengiriman Dalam Negeri</th>
                                        <th style="text-align:center;" scope="col">Pengiriman Luar Negeri</th>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_pria; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_wanita; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_wna; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_wni; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_menular; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tidakmenular; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_dalam; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_luar; ?></td>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_pria; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_wanita; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_wna; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_wni; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_menular; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tidakmenular; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_dalam; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_luar; ?></td>
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
                            <form action="<?php echo site_url('backend/laporan_pkse/cetak_laporan_pkse_5'); ?>" method="post" target="_blank">
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
<form action="<?php echo site_url('backend/laporan_pkse/save_pkse5'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Data Laporan Pengamatan Pengangkutan/Pengiriman Jenazah Baru</h5>
                    <hr>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="number" min="0" name="pria" class="form-control" placeholder="Jumlah Pria" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="wanita" class="form-control" placeholder="Jumlah Wanita" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="wna" class="form-control" placeholder="Warga Negara Asing" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="wni" class="form-control" placeholder="Warga Negara Indonesia" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="menular" class="form-control" placeholder="Penyebab Kematian Menular" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="tdkmenular" class="form-control" placeholder="Penyebab Kematian Tidak Menular" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="dalam" class="form-control" placeholder="Tujuan Akhir Dalam Negeri" required>
                    </div>
                    <div class="form-group">
                        <input type="number" min="0" name="luar" class="form-control" placeholder="Tujuan Akhir Luar Negeri" required>
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
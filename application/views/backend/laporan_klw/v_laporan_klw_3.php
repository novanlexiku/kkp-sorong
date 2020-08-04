<div class="page-inner">
    <div class="page-title">
        <h3>Laporan Penerbitan ICV</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Laporan KLW</a></li>
                <li class="active">KLW 3</li>
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
                                        <th style="text-align:center;" scope="col">Seri ICV</th>
                                        <th style="text-align:center;" scope="col">Nama</th>
                                        <th style="text-align:center;" scope="col">Sex</th>
                                        <th style="text-align:center;" scope="col">Umur</th>
                                        <th style="text-align:center;" scope="col">Alamat</th>
                                        <th style="text-align:center;" scope="col">ABK</th>
                                        <th style="text-align:center;" scope="col">TKI/TKW</th>
                                        <th style="text-align:center;" scope="col">Umum</th>
                                        <th style="text-align:center;" scope="col">Meningitis</th>
                                        <th style="text-align:center;" scope="col">YF</th>
                                        <th style="text-align:center;" scope="col">Negara Tujuan</th>
                                        <th style="text-align:center;" scope="col">Keperluan Vaksinasi</th>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_seri; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_nama; ?></td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_sex == 'laki') {
                                                        echo 'Laki-Laki'; ?>
                                                    <?php } else {
                                                        echo 'Perempuan';
                                                    } ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_umur; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_alamat; ?></td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_status == 'abk') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_status == 'tki') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_status == 'umum') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_vaksin == 'meni') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_vaksin == 'yf') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;"><?php echo $row->laporan_negara; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tujuan; ?></td>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_seri; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_nama; ?></td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_sex == 'laki') {
                                                        echo 'Laki-Laki'; ?>
                                                    <?php } else {
                                                        echo 'Perempuan';
                                                    } ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_umur; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_alamat; ?></td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_status == 'abk') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_status == 'tki') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_status == 'umum') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_vaksin == 'meni') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;">
                                                    <?php if ($row->laporan_vaksin == 'yf') {
                                                        echo '&radic;'; ?>
                                                    <?php } ?> </td>
                                                <td style="text-align:center;"><?php echo $row->laporan_negara; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tujuan; ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="panel panel-white">
                    <div class="panel-body">
                        <form action="<?php echo site_url('backend/laporan_klw/cetak_laporan_klw_3'); ?>" method="post" target="_blank">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type='text' name="tgl2" class="form-control datepicker2" placeholder="Bulan" required />
                                </div>
                                <div class="col-md-3">
                                    <input type='text' name="tgl3" class="form-control datepicker3" placeholder="Tahun" required />
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="wilker" required>
                                        <?php
                                        foreach ($wilker->result() as $row) :
                                        ?>
                                            <option value="<?php echo $row->wilker_id; ?>"><?php echo $row->wilker_nama; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-success m-b-sm">Tampilkan Data</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row -->
</div><!-- Main Wrapper -->
<div class="page-footer text-center">
    <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by KKP-Sorong.</p>
</div>
</div><!-- Page Inner -->
</main><!-- Page Content -->

<!--ADD RECORD MODAL-->
<form action="<?php echo site_url('backend/laporan_klw/save_klw3'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Data Penerbitan ICV Baru</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type='text' name="seri" class="form-control" value="" placeholder="No Seri ICV" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="sex" required>
                            <option value="laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="umur" class="form-control" placeholder="Umur" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="status" required>
                            <option value="umum">Umum</option>
                            <option value="abk">ABK</option>
                            <option value="tki">TKI/TKW</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="customRadioInline1" name="vaksin" value="meni" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Meningitis</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" id="customRadioInline2" name="vaksin" value="yf" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">YF</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="negara" class="form-control" placeholder="Negara Tujuan" required>
                    </div>
                    <div class="form-group">
                        <textarea name="tujuan" class="form-control" placeholder="Tujuan" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
            text: "Laporan Diperbarui!",
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
            text: "Laporan Dihapus!.",
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
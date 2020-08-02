<div class="page-inner">
    <div class="page-title">
        <h3>Laporan Keadaan Peralatan Operasional UKLW</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Laporan KLW</a></li>
                <li class="active">KLW 9</li>
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
                                        <th style="text-align:center;" scope="col">Nama Alat</th>
                                        <th style="text-align:center;" scope="col">Satuan</th>
                                        <th style="text-align:center;" scope="col">Stok Awal</th>
                                        <th style="text-align:center;" scope="col">Stok Tambahan</th>
                                        <th style="text-align:center;" scope="col">Stok Akhir</th>
                                        <th style="text-align:center;" scope="col">Kondisi Baik</th>
                                        <th style="text-align:center;" scope="col">Kondisi Rusak Ringan</th>
                                        <th style="text-align:center;" scope="col">Kondisi Rusak Berat</th>
                                        <th style="text-align:center;" scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($this->session->userdata('wilker') != '1') : ?>
                                        <?php
                                        $no = 0;
                                        foreach ($laporan2->result() as $row) {
                                            $no++;
                                            $stok_awal = $row->laporan_stokawal;
                                            $stok_tambah = $row->laporan_stoktambahan;
                                            $jumlah = $stok_awal + $stok_tambah;

                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_stokkon1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_stokkon2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_stokkon3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_keterangan; ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php else : ?>
                                        <?php
                                        $no = 0;
                                        foreach ($laporan2->result() as $row) {
                                            $no++;
                                            $stok_awal = $row->laporan_stokawal;
                                            $stok_tambah = $row->laporan_stoktambahan;
                                            $jumlah = $stok_awal + $stok_tambah;

                                        ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tanggal; ?></td>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_stokkon1; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_stokkon2; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_stokkon3; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_keterangan; ?></td>
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
                        <form action="<?php echo site_url('backend/laporan_klw/cetak_laporan_klw_9'); ?>" method="post" target="_blank">
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
<form action="<?php echo site_url('backend/laporan_klw/save_klw9'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Data Keadaan Peralatan Operasional UKLW Baru</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Alat" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="satuan" required>
                            <option value="pcs">PCS</option>
                            <option value="lusin">Lusin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="stok_awal" class="form-control" placeholder="Stok Awal Bulan" required>
                    </div>

                    <div class="form-group">
                        <input type="number" name="stok_tambahan" class="form-control" placeholder="Penerimaan Bulan Ini" required>
                    </div>

                    <div class="form-group">
                        <input type="number" name="stok_kon1" class="form-control" placeholder="Kondisi Baik" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="stok_kon2" class="form-control" placeholder="Kondisi Rusak Ringan" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="stok_kon3" class="form-control" placeholder="Kondisi Rusak berat" required>
                    </div>
                    <div class="form-group">
                        <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
<div class="page-inner">
    <div class="page-title">
        <h3>Laporan Penerbitan Sertifikat P3K dan Obat di Kapal</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Laporan KLW</a></li>
                <li class="active">KLW 6</li>
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
                                        <th style="text-align:center;" scope="col">Barcode</th>
                                        <th style="text-align:center;" scope="col">Nama Kapal</th>
                                        <th style="text-align:center;" scope="col">Volume</th>
                                        <th style="text-align:center;" scope="col">Datang Dari</th>
                                        <th style="text-align:center;" scope="col">Sertifikat P3K Lama</th>
                                        <th style="text-align:center;" scope="col">Keberangkatan</th>
                                        <th style="text-align:center;" scope="col">Posisi Kapal</th>
                                        <th style="text-align:center;" scope="col">Petugas Pemeriksa</th>
                                        <th style="text-align:center;" scope="col">Agen Pelayaran</th>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_barcode; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_nama; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_volume; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_asal; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tgllama; ?> <?php echo $row->laporan_pellama; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tglbaru; ?> <?php echo $row->laporan_pelbaru; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_posisi; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_petugas; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_agen; ?></td>
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
                                                <td style="text-align:center;"><?php echo $row->laporan_barcode; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_nama; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_volume; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_asal; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tgllama; ?> <?php echo $row->laporan_pellama; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_tglbaru; ?> <?php echo $row->laporan_pelbaru; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_posisi; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_petugas; ?></td>
                                                <td style="text-align:center;"><?php echo $row->laporan_agen; ?></td>
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
                            <form action="<?php echo site_url('backend/laporan_klw/cetak_laporan_klw_6'); ?>" method="post" target="_blank">
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
<form action="<?php echo site_url('backend/laporan_klw/save_klw6'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Data Penerbitan Sertifikat P3K dan Obat di Kapal Baru</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type='text' name="barcode" class="form-control" value="" placeholder="Kode Barcode" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Kapal" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="volume" class="form-control" placeholder="Volume" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="asal" class="form-control" placeholder="Datang Dari" required>
                    </div>
                    <div class="form-group">
                        <input type='text' name="tgl_lama" class="form-control datepicker" placeholder="Tanggal Lama" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="pel_lama" class="form-control" placeholder="Pelabuhan Lama" required>
                    </div>
                    <div class="form-group">
                        <input type='text' name="tgl_baru" class="form-control datepicker" placeholder="Tanggal Keberangkatan" required />
                    </div>
                    <div class="form-group">
                        <input type="text" name="pel_baru" class="form-control" placeholder="Tujuan Keberangkatan" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="posisi" class="form-control" placeholder="Posisi Kapal" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="petugas" class="form-control" placeholder="Petugas Pemeriksa" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="agen" class="form-control" placeholder="Agen Pelayaran" required>
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
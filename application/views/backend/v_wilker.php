<div class="page-inner">
    <div class="page-title">
        <h3>Wilayah Kerja</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Kategori</a></li>
                <li class="active">Wilayah Kerja</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-white">
                    <div class="panel-body">
                        <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Tambah Wilker</button>

                        <div class="table-responsive">
                            <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data->result() as $row) :
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $row->wilker_nama; ?></td>
                                            <td style="text-align: center;">
                                                <a href="javascript:void(0);" class="btn btn-xs btn-edit" data-toggle="modal" data-target="#EditModal<?php echo $row->wilker_id; ?>"><span class="icon-pencil"></span></a>
                                                <a href="javascript:void(0);" class="btn btn-xs btn-delete" data-id="<?php echo $row->wilker_id; ?>"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer text-right">
        <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by KKP-Sorong.</p>
    </div>
</div><!-- Page Inner -->
</main><!-- Page Content -->

<!--ADD RECORD MODAL-->
<form action="<?php echo site_url('backend/wilker/save'); ?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Wilayah Kerja Baru</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Wilayah Kerja" required>
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

<!--EDIT RECORD MODAL-->
<form action="<?php echo site_url('backend/wilker/edit'); ?>" method="post">
    <div class="modal fade" id="EditModal<?php echo $row->wilker_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Wilayah Kerja</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama" value="<?php echo $row->wilker_nama; ?>" class="form-control" placeholder="Nama Wilayah Kerja" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kode" value="<?php echo $row->wilker_id; ?>" required>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!--DELETE RECORD MODAL-->
<form action="<?php echo site_url('backend/wilker/delete'); ?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Wilayah Kerja</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Anda yakin mau menghapus data ini?
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" required>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Delete</button>
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
            text: "Wilayah Kerja Tersimpan!",
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
            text: "Wilayah Kerja Diperbarui!",
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
            text: "Wilayah Kerja Dihapus!.",
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
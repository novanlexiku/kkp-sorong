<div class="page-inner">
    <div class="page-title">
        <h3>Navbar Settings</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Site</a></li>
                <li class="active">Settings</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">

                    <div class="panel-body">
                        <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Menu</button>
                        <?php foreach ($data->result() as $row) : ?>
                            <div class="row">
                                <div class="col-md-8" style="margin-top: 10px;">

                                    <div class="input-group">
                                        <button class="btn btn-secondary btn-block"><?php echo strtoupper($row->navbar_name); ?></button>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                <li><a href="#" class="btn-submenu" data-nav_id="<?php echo $row->navbar_id; ?>">Add Sub Menu</a></li>
                                                <li><a href="#" class="btn-edit-menu" data-nav_id="<?php echo $row->navbar_id; ?>" data-nav_name="<?php echo $row->navbar_name; ?>" data-nav_slug="<?php echo $row->navbar_slug; ?>">Edit</a></li>
                                                <li><a href="#" class="btn-delete-menu" data-nav_id="<?php echo $row->navbar_id; ?>">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php
                            $navbar_id = $row->navbar_id;
                            $query = $this->db->query("SELECT * FROM tbl_navbar WHERE navbar_parent_id='$navbar_id'");
                            foreach ($query->result() as $i) :
                            ?>
                                <div class="row">
                                    <div class="col-md-7 col-md-offset-1 col-sm-offset-1" style="margin-top: 10px;">

                                        <div class="input-group">
                                            <button class="btn btn-secondary btn-block"><?php echo strtoupper($i->navbar_name); ?></button>
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <li><a href="#" class="btn-edit-menu" data-nav_id="<?php echo $i->navbar_id; ?>" data-nav_name="<?php echo $i->navbar_name; ?>" data-nav_slug="<?php echo $i->navbar_slug; ?>">Edit</a></li>
                                                    <li><a href="#" class="btn-delete-menu" data-nav_id="<?php echo $i->navbar_id; ?>">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s"><?php echo date('Y'); ?> &copy; Powered by KKP-Sorong.</p>
    </div>
</div><!-- Page Inner -->
</main><!-- Page Content -->


<!-- Modal Add Menu-->
<form id="add-row-form" action="<?php echo base_url() . 'backend/navbar/insert' ?>" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Menu</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" name="nama" class="form-control" placeholder="Label Name" required>
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <div class="input-group m-b-sm">
                                    <span class="input-group-addon" id="basic-addon1"><?php echo site_url(); ?></span>
                                    <input type="text" name="slug" class="form-control" placeholder="Slug" aria-describedby="basic-addon1">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal Add Menu-->
<form id="add-row-form" action="<?php echo base_url() . 'backend/navbar/insert_submenu' ?>" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="ModalSubmenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Sub Menu</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" name="name_submenu" class="form-control" placeholder="Label Name" required>
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <div class="input-group m-b-sm">
                                    <span class="input-group-addon" id="basic-addon1"><?php echo site_url(); ?></span>
                                    <input type="text" name="slug_submenu" class="form-control" placeholder="Slug" aria-describedby="basic-addon1">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="id_submenu" class="id_submenu" required>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal Edit Menu-->
<form id="add-row-form" action="<?php echo base_url() . 'backend/navbar/update' ?>" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="ModalEditMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Menu</h4>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Label</label>
                                <input type="text" name="name_edit" class="form-control name_edit" placeholder="Label Name" required>
                            </div>
                            <div class="form-group">
                                <label>URL</label>
                                <div class="input-group m-b-sm">
                                    <span class="input-group-addon" id="basic-addon1"><?php echo site_url(); ?></span>
                                    <input type="text" name="slug_edit" class="form-control slug_edit" placeholder="Slug" aria-describedby="basic-addon1">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="navbar_id" class="navbar_id" required>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal Delete Menu-->
<form id="add-row-form" action="<?php echo base_url() . 'backend/navbar/delete' ?>" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="ModalDeleteMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Menu</h4>
                </div>
                <div class="modal-body">

                    <strong>Anda yakin mau menghapus menu ini?</strong>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="hidden" name="id_delete" class="id_delete" required>
                    <button type="submit" class="btn btn-danger">Delete</button>
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
<script src="<?php echo base_url() . 'assets/plugins/summernote-master/summernote.min.js' ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.btn-edit-menu').on('click', function() {
            var navbar_id = $(this).data('nav_id');
            var navbar_name = $(this).data('nav_name');
            var navbar_slug = $(this).data('nav_slug');
            $('#ModalEditMenu').modal('show');
            $('.name_edit').val(navbar_name);
            $('.slug_edit').val(navbar_slug);
            $('.navbar_id').val(navbar_id);
        });

        $('.btn-delete-menu').on('click', function() {
            var navbar_id = $(this).data('nav_id');
            $('#ModalDeleteMenu').modal('show');
            $('.id_delete').val(navbar_id);
        });

        $('.btn-submenu').on('click', function() {
            var navbar_id = $(this).data('nav_id');
            $('#ModalSubmenu').modal('show');
            $('.id_submenu').val(navbar_id);
        });
    });
</script>
<!--Toast Message-->
<?php if ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "New Navbar Saved!",
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
            text: "Navbar updated!",
            showHideTransition: 'slide',
            icon: 'info',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#00C9E6'
        });
    </script>
<?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Navbar Deleted!.",
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
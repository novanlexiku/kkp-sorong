<div class="page-inner">
    <div class="page-title">
        <h3>File Download Management</h3>
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

                        <!-- Display status message -->
                        <?php if (!empty($success_msg)) { ?>
                            <div class="col-xs-12">
                                <div class="alert alert-success"><?php echo $success_msg; ?></div>
                            </div>
                        <?php } elseif (!empty($error_msg)) { ?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                            </div>
                        <?php } ?>

                        <div class="row">
                            <div class="col-md-12 head">
                                <h5><?php echo $title; ?></h5>
                                <!-- Add link -->
                                <div class="float-right">
                                    <a href="<?php echo base_url('backend/manage_download/add'); ?>" class="btn btn-success"><i class="plus"></i> Upload File</a>
                                </div>
                            </div>

                            <!-- Data list table -->
                            <table class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="40%">Title</th>
                                        <th width="19%">Created</th>
                                        <th width="8%">Status</th>
                                        <th width="18%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($download)) {
                                        $i = 0;
                                        foreach ($download as $row) {
                                            $i++;
                                            $image = !empty($row['file_name']) ? '<img width="150" src="' . base_url() . 'uploads/files/' . $row['file_name'] . '" alt="" />' : '';
                                            $statusLink = ($row['status'] == 1) ? site_url('backend/manage_download/block/' . $row['id']) : site_url('backend/manage_download/unblock/' . $row['id']);
                                            $statusTooltip = ($row['status'] == 1) ? 'Click to Inactive' : 'Click to Active';
                                    ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['created']; ?></td>
                                                <td><a href="<?php echo $statusLink; ?>" title="<?php echo $statusTooltip; ?>"><span class="badge <?php echo ($row['status'] == 1) ? 'badge-success' : 'badge-danger'; ?>"><?php echo ($row['status'] == 1) ? 'Active' : 'Inactive'; ?></span></a></td>
                                                <td>
                                                    <a href="<?php echo base_url('uploads/files/' . $row['file_name']); ?>" class="btn btn-primary">download</a>
                                                    <a href="<?php echo base_url('backend/manage_download/delete/' . $row['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')?true:false;">delete</a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="6">No file(s) found...</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>


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
        $('#summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['view', ["fullscreen", "codeview", "help"]],
            ]

        });
    });
</script>
<!--Toast Message-->
<?php if ($this->session->flashdata('msg') == 'success') : ?>
    <script type="text/javascript">
        $.toast({
            heading: 'Success',
            text: "Sambutan Information Saved!",
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
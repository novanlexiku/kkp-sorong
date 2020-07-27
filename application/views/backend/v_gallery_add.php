<div class="page-inner">
    <div class="page-title">
        <h3>Gallery Images Management</h3>
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

                        <h1><?php echo $title; ?></h1>
                        <hr>

                        <!-- Display status message -->
                        <?php if (!empty($error_msg)) { ?>
                            <div class="col-xs-12">
                                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
                            </div>
                        <?php } ?>

                        <div class="row">
                            <div class="col-md-6">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <input type="text" name="title" class="form-control" placeholder="Enter title" value="<?php echo !empty($image['title']) ? $image['title'] : ''; ?>">
                                        <?php echo form_error('title', '<p class="help-block text-danger">', '</p>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Images:</label>
                                        <input type="file" name="image" class="form-control" multiple>
                                        <?php echo form_error('image', '<p class="help-block text-danger">', '</p>'); ?>
                                        <?php if (!empty($image['file_name'])) { ?>
                                            <div class="img-box">
                                                <img src="<?php echo base_url('uploads/images/' . $image['file_name']); ?>">
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <a href="<?php echo base_url('backend/manage_gallery'); ?>" class="btn btn-secondary">Back</a>
                                    <input type="hidden" name="id" value="<?php echo !empty($image['id']) ? $image['id'] : ''; ?>">
                                    <input type="submit" name="imgSubmit" class="btn btn-success" value="SUBMIT">
                                </form>
                            </div>
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
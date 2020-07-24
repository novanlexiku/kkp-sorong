<div class="page-inner">
    <div class="page-title">
        <h3>Sambutan Information</h3>
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
            <form class="form-horizontal" action="<?php echo base_url() . 'backend/about_setting/update' ?>" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="panel panel-white">

                        <div class="panel-body">

                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_about" class="form-control" id="input1">
                                    <p class="help-block">Image Heading harus beresolusi 456 x 470 Pixels.</p>
                                    <img src="<?php echo base_url() . 'theme/images/' . $about_img; ?>" width="300" class="thumbnail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" id="summernote" placeholder="Description"><?php echo $about_desc; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="about_id" value="<?php echo $about_id ?>" required>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success btn-lg">UPDATE</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </form>
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
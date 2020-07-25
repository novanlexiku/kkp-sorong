<div class="page-inner">
    <div class="page-title">
        <h3>Profile Information</h3>
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
            <form class="form-horizontal" action="<?php echo base_url() . 'backend/profile_setting/update' ?>" method="post" enctype="multipart/form-data">
                <div class="col-md-12">
                    <div class="panel panel-white">

                        <div class="panel-body">

                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Image Visi & Misi</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_profile" class="form-control" id="input1">
                                    <p class="help-block">Image Heading harus beresolusi 456 x 470 Pixels.</p>
                                    <img src="<?php echo base_url() . 'theme/images/' . $profile_img; ?>" width="300" class="thumbnail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Image Struktur Organisasi</label>
                                <div class="col-sm-10">
                                    <input type="file" name="img_struktur" class="form-control" id="input1">
                                    <p class="help-block">Image Heading harus beresolusi 456 x 470 Pixels.</p>
                                    <img src="<?php echo base_url() . 'theme/images/' . $profile_img2; ?>" width="300" class="thumbnail">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Visi</label>
                                <div class="col-sm-10">
                                    <textarea name="visi" class="form-control" id="summernote1" placeholder="Visi"><?php echo $profile_visi; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Misi</label>
                                <div class="col-sm-10">
                                    <textarea name="misi" class="form-control" id="summernote2" placeholder="Misi"><?php echo $profile_misi; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input1" class="col-sm-2 control-label">Nilai</label>
                                <div class="col-sm-10">
                                    <textarea name="nilai" class="form-control" id="summernote3" placeholder="Nilai"><?php echo $profile_nilai; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="profile_id" value="<?php echo $profile_id ?>" required>
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
    <div class="page-footer text-right">
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
        $('#summernote1').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['view', ["fullscreen", "codeview", "help"]],
            ]

        });
        $('#summernote2').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['view', ["fullscreen", "codeview", "help"]],
            ]

        });
        $('#summernote3').summernote({
            height: 200,
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
            text: "Profile Information Saved!",
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
<div class="page-inner">
    <div class="page-title">
        <h3>Add New Post</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('backend/dashboard'); ?>">Dashboard</a></li>
                <li><a href="#">Post</a></li>
                <li class="active">Add New</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <form action="<?php echo base_url() . 'backend/post/publish' ?>" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="panel panel-white">

                        <div class="panel-body">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control title" placeholder="Title" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="slug" class="form-control slug" placeholder="Permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Contents</label>
                                <textarea name="contents" id="summernote"></textarea>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-white">

                        <div class="panel-body">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="filefoto" class="dropify" data-height="190" required>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" required>
                                    <option value="">-Select Option-</option>
                                    <?php foreach ($category->result() as $row) : ?>
                                        <option value="<?php echo $row->category_id; ?>"><?php echo $row->category_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <label>Tags</label>
                            <div style="overflow-y:scroll;height:150px;margin-bottom:30px;">
                                <?php foreach ($tag->result() as $row) : ?>
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" name="tag[]" value="<?php echo $row->tag_name; ?>"> <?php echo $row->tag_name; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="btn-group btn-group-justified" role="group">
                                <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> PUBLISH</button>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="description" cols="6" rows="6" class="form-control" placeholder="Meta Description"></textarea>
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
<script src="<?php echo base_url() . 'assets/js/dropify.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/summernote-master/summernote.min.js' ?>"></script>
<script>
    $(document).ready(function() {

        $('#summernote').summernote({
            height: 590,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ["fullscreen", "codeview", "help"]],
            ],

            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            }

        });

        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo site_url() ?>backend/post/upload_image",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, url);
                }
            });
        }



        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove: 'Hapus',
                error: 'error'
            }
        });

        $('.title').keyup(function() {
            var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g, '-');
            $('.slug').val(title);
        });


    });
</script>

</body>

</html>
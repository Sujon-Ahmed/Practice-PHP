        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="../admin/summernote/summernote-bs4.min.js"></script>

        <!-- form validation -->
        <script src="js/additional-methods.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>

        <script>
            function profilePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#profile + img').remove();
                    $('#test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="400px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#file-img").change(function () {
                    profilePreview(this);
            });
        </script>
            
        

        <script>

        // parsley for profile
            $(function(){
                $('#profile').parsley();
            });
      
        // parsley for change password
            $(function(){
                $('#change_password').parsley();
            });
    
        // parsley for create category
            $(function(){
                $('#create_category').parsley();
            });
        </script>   

         <!-- //post table -->
         <script>
            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#post + img').remove();
                    $('#post-test-img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="400px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#post-file-img").change(function () {
                    filePreview(this);
                });
        </script>

        <script>
            function imgPreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                    $('#add_image + img').remove();
                    $('#test_img').html('<img class="img-fluid img-thumbnail" src="'+e.target.result+'" width="400px" height="auto" />');
                }
                reader.readAsDataURL(input.files[0]);
                }
                }
                $("#add_img").change(function () {
                    imgPreview(this);
                });
        </script>
      
        <script>
            // post description
            $('#description').summernote({
                placeholder: 'Write Post Description Here..',
                tabsize: 2,
                height: 250
            });


            // post validation
            $(document).ready(function () {
                $('#post').validate({
                    rules: {
                        title: {
                            required: true,
                        },
                        category_id: {
                            required: true,
                        },
                        tag: {
                            required: true,
                        }
                    
                    },
                      messages: {
                        title: {
                        required: "Please Enter Post Title",
                      },
                      category_id: {
                        required: "Please Select Category",
                      },
                      tag: {
                        required: "Please Enter Tag"
                      }
                    
                    },
                    errorElement: 'span',
                    errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                    },
                    highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                    }
                });
            });
        </script>

        
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="KWMMswnV"></script>
        
    </body>
</html>
 </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $(document).ready(function() {
            $('#tblMember, #tblWajib, #tblSukarela').DataTable();
        });

        $('#dir_img').on('change',function(){
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        });

        var fileuploadinit = function(){
            $('#dir_img').change(function(){
                var pathwithfilename = $('#dir_img').val();
                var filename = pathwithfilename.substring(12);
                $('.addmember').html(filename).css({
                    'display':'block'
                });
            });
        };
        var fileuploadinit2 = function(){
            $('#dir_imgg').change(function(){
                var pathwithfilename = $('#dir_imgg').val();
                var filename = pathwithfilename.substring(12);
                $('.editphoto').html(filename).css({
                    'display':'block'
                });
            });
        };
        $('#add_admin, #add_member, #userAdd', '#edit_admin').on('hidden.bs.modal', function () {
            $(this).find('form').trigger('reset');
        });
        window.reset = function(e) {
            e.wrap('<form>').closest('form').get(0).reset();
            e.unwrap();
            $('#dir_imgg').val('')
        }
        $(document).ready(function () {
            fileuploadinit();
            fileuploadinit2();
        });

        $(document).ready(function() {
            $('#datausr').DataTable();
        });
        $(document).ready(function() {
            $('#usertbl').DataTable();
        });

    </script>
</body>
</html>
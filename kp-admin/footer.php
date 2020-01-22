    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script> -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.js"></script>
    <!-- JS form validation library -->
    <script src="../js/jquery.validate.min.js"></script>
    <!-- CKEditor for post page on dashboard -->
    <script src="../js/ckeditor/ckeditor.js"></script>

    <!-- <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script> -->
    <!-- <script src="//cdn.ckeditor.com/4.11.3/full/ckeditor.js"></script> -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script> -->

    <script>
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
            }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>

    <!--Here is a script for sidebar -->
    <script>
        jQuery(function ($) {

        $(".sidebar-dropdown > a").click(function() {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            (this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
        });

            $("#close-sidebar").click(function() {
            $(".page-wrapper").removeClass("toggled");
        });
            $("#show-sidebar").click(function() {
            $(".page-wrapper").addClass("toggled");
        });   
    });
    </script>

    <!--Here is a script for dashboard page table displaying the recent post -->
    <script>
        $(document).ready(function(){
        $("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
            }
            });
    
        $("[data-toggle=tooltip]").tooltip();
        });
    </script>

    <!-- Here is a CKEditor for post commenting -->
    <script>
        CKEDITOR.replace( 'editor' );
    </script>

    <!-- START - This script below is to make invalid login to auto close-->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(1000, function(){
                $(this).remove(); 
            });
        }, 2000);
    </script>
    <!-- END - of invalid login to auto close-->

    <!-- Modal DELETE -->
    <!-- <script>
            var modalConfirm = function(callback){
          
          $("#btn-confirm").on("click", function(){
            $("#mi-modal").modal('show');
          });

          $("#modal-btn-si").on("click", function(){
            callback(true);
            $("#mi-modal").modal('hide');
          });
          
          $("#modal-btn-no").on("click", function(){
            callback(false);
            $("#mi-modal").modal('hide');
          });
        };

        modalConfirm(function(confirm){
          if(confirm){
            //Acciones si el usuario confirma
            // $("#result").html("CONFIRMADO");
          }else{
            //Acciones si el usuario no confirma
            // $("#result").html("NO CONFIRMADO");
          }
        });
    </script> -->
</body>
</html>
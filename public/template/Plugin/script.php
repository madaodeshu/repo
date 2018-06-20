<!-- jQuery 3 -->
<script src="../Asset/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../Asset/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../Asset/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../Asset/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Asset/js/demo.js"></script>
<script src="../Asset/ckeditor/ckeditor.js"></script>
<script src="../Asset/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!--
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

<script src="dist/js/demo.js"></script>
-->



<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(document).ready(function(){
  $(".arc-cc").hide(0);
    $(".arc").click(function(){
      $(".arc-box").hide(0);
        $(".arc").hide(0);
        $(".arc-cc").show(0);
    });

    $(".arc-cc").click(function(){
        $(".arc-cc").hide(0);
        $(".arc-box").show(0);
        $(".arc").show(0);
    });
});

</script>
<script>
$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.top1').fadeIn();
        } else {
            $('.top1').fadeOut();
        }
    });

    $('.top1').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 300);
        return false;
    });

});
</script>


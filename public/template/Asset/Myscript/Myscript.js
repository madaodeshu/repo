
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })



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

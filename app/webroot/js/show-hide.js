<script type="text/javascript">
  $(document).ready(function() {
   // hides the slickbox as soon as the DOM is ready
    $('#slickbox').hide();
   // shows the slickbox on clicking the noted link  
    $('#slick-show').click(function() {
      $('#slickbox').show('slow');
      return false;
    });
   // hides the slickbox on clicking the noted link  
    $('#slick-hide').click(function() {
      $('#slickbox').hide('fast');
      return false;
    });
   // toggles the slickbox on clicking the noted link  
    $('#slick-toggle').click(function() {
      $('#slickbox').toggle(400);
      return false;
    });
  });
</script> 
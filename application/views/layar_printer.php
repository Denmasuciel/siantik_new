

        <section class="content">
          <!-- Application buttons -->
          <div class="text-center">
            <p>
              &nbsp;
            </p>
          </div>

          <div class="text-center" >           
            <i class="fa fa-3x">Klik untuk ambil nomor Antrian</i>
            <p>&nbsp;&nbsp;</p>
            <p>&nbsp;&nbsp;</p>
            <p>
              <a class="btn btn-info " onclick="next()" a href="#" id="aa">
                <i class="fa fa-5x">A.</i> MANUAL <br/>
              </a>
              <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
              <a class="btn btn-warning " onclick="back()" a href="#" id="bb" >
                <i class="fa fa-5x" >B.</i> ONLINE <br/>
              </a>
            </p>


            <div class="col-md-6 pull-right"> 
              <div id="informasi" class="alert alert-success alert-dismissible">
                <h4><i class="icon fa fa-check"></i> Cetak </h4>
                Silahkan ambil nomor antrian anda.
              </div>
            </div>
          </div>

        </section>
<script type="text/javascript">  

  $(document).ready(function () {
    $('#informasi').hide();
    })  ;

  function next() {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>printer/print_a",
      success: function () {
        $('#informasi').show();
        setTimeout(function() { 
          $('#informasi').fadeOut(); 
        }, 1000);
      }
    });
  };


  function back() {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>printer/print_b",
      success: function () {
        $('#informasi').show();
        setTimeout(function() { 
          $('#informasi').fadeOut(); 
        }, 1000);
      }    
    });
  };


</script> 

<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-sm-12">
      <div class="m-t-sm">
		 <div>
					<div id='media-player' class="span12">
						<video id='media-video' class="span12" style='width:100%' controls autoplay loop>
									<source src='<?php  echo base_url('video/demo.mp4');?>' type='video/mp4' >
						</video>
					</div>
				 </div>
         <div>
            
					<form class="cssform" name="property" id="property" class="form-vertical fv-form fv-form-bootstrap"method="POST" action="<?php echo base_url('admin/config_video/upload_video')?>" enctype="multipart/form-data" >
					<fieldset class="form-group">
						<label for="exampleInputFile">Upload Video</label>
						<input type="file" class="form-control-file" id="video" name="video" >
						<small class="text-muted">Maksimal Ukuran video 32 mb</small>
					  </fieldset>
					  <input type="submit" id="button" name="submit" value="Submit" />
					</form>


			<br/>
			<br/>
         </div>
      </div>
   </div>
</div>

<!-- Konten Halaman -->
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <br>
      </div>
   </div>
</div>

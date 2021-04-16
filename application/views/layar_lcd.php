<div  style="padding:5px;background-color:transparent">		
	<table width="100%"  >
		<tr>
			<td colspan="<?php echo @$colspan;?>" bgcolor="black" >
				<div id='media-player' class="span12" >
					<video id='myvideo' width="97%" height="400px" class="span12" controls muted  autoplay >
						<source class="active" src='<?php  echo base_url('video/bahayarokok.mp4');?>' type='video/mp4' > 
							<source  src='<?php  echo base_url('video/cucitangan.mp4');?>' type='video/mp4' > 
								<source  src='<?php  echo base_url('video/daruratnarkoba.mp4');?>' type='video/mp4' > 
									<source  src='<?php  echo base_url('video/etikabatuk.mp4');?>' type='video/mp4' > 
										<source  src='<?php  echo base_url('video/iklanmasyarakat.mp4');?>' type='video/mp4' > 
											<source  src='<?php  echo base_url('video/polahidup.mp4');?>' type='video/mp4' > 								
											</video>
										</div>
									</td>
								</tr>
								<tr>
									<?php 
									if(@$jloket&&$jloket!=null){
										foreach($jloket as $row){
											?>
											<td align="center">
												<div style="padding:5px;background-color:#373b3e;color:white;border: 2px solid #222">
													<b style="font-size:20pt">Loket <?php echo $row['id_loket'];?></b>
												</div>
												<div style="padding:5px;background-color:#595a5a;color:white;border-top: 1.5px solid #777474;border-bottom: 2px solid #222;border-left: 2px solid #222;border-right: 2px solid #222">
													<div id="antrian_<?php echo $row['id_loket'];?>_aktif" style="font-size:8pt;"></div>
												</div>				
											</td>				
											<?php 
										}}else{}
										?>				
									</tr>			
								</table>
							</div>  


	<script>
		$(document).ready(function () { 

			var myvid = document.getElementById('myvideo');
			myvid.addEventListener('ended', function(e) {
				var activesource = document.querySelector("#myvideo source.active");
				var nextsource = document.querySelector("#myvideo source.active + source") || document.querySelector("#myvideo source:first-child");
				activesource.className = "";
				nextsource.className = "active";
				myvid.src = nextsource.src;
				myvid.play();
			});

			<?php 
			if(@$jloket&&$jloket!=null){
				foreach($jloket as $rw){
					?>
					function antrian_<?php echo $rw['id_loket'];?>(){		     

						$.ajax({
							type: "POST",
							url : "<?php echo site_url('loket/getantrian_lcd/'.$rw['id_loket'].'');?>",
							data: "session=",
							success: function(data){
								$("#antrian_<?php echo $rw['id_loket'];?>_aktif").html(data);
							}				   
						});				
					};
					setInterval(function(){ 
						antrian_<?php echo $rw['id_loket'];?>();		     
					}, 1000);	
					<?php 
				}}else{}
				?>	
		});
	</script>



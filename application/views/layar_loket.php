<style>
	a {
		color: #000;
	}
</style>
<!-- copy sini -->
<div class="panel panel-default" style="padding:20px;background-color:#313538;border-radius: 6px;">
	<div id="logout" style="position:absolute;float: right;background-color:#1a8e0f;border-radius: 5px;padding:5px;font-size:12pt"><a href="<?= site_url('login_loket/logout') ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> <b>Logout<b></a></div>
	<div class="text-center" style="color:grey;border-bottom: 1px solid #585757;padding:5px">
		<b style="font-size:15pt">Antrian Loket</b>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<div class="text-center">
				<b style="font-size:10pt;color:grey"> ANTRIAN RACIKAN </b>
				<p>
			</div>
			<div class="text-center" style="border: 1.5px solid #6b6666; margin: auto;border-radius: 2px;background-color:#545353">
				<div id="antrian_aktif_a"></div>
			</div>
			<div class="text-center" style="padding-top:10px">
				<button type="button" name="playx" onclick="mulai();" class="btn btn-success"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Panggil &nbsp; &nbsp; &nbsp; &nbsp; </button>
				<a href="<?= base_url() ?>loket/selanjutnya_a" id="selanjutnya" class="btn btn-success"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> Selanjutnya A</a>
			</div>
			<div style="padding-top:10px;color:grey" class>
				<div class="row">
					<div class="col-md-6">
						Sisa antrian Racikan
					</div>
					<div class="col-md-3">
						: <b style="color:yellow" id="sisa_a"><?php echo @$jml_blm; ?></b>
					</div>
				</div>
			</div>
			<br />
			<div class="text-center">
				<b style="font-size:10pt;color:grey"> ANTRIAN NON RACIKAN</b>
				<p>
			</div>
			<div class="text-center" style="border: 1.5px solid #6b6666; margin: auto;border-radius: 2px;background-color:#545353">
				<div id="antrian_aktif_b"></div>
			</div>
			<div class="text-center" style="padding-top:10px">
				<button type="button" name="play_b" onclick="mulai_b();" class="btn btn-success"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Panggil &nbsp; &nbsp; &nbsp; &nbsp; </button>
				<a href="<?= base_url() ?>loket/selanjutnya_b" id="selanjutnya_b" class="btn btn-success"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> Selanjutnya B</a>
			</div>
			<div style="padding-top:10px;color:grey" class>

				<div class="row">
					<div class="col-md-6">
						Sisa Non Racikan
					</div>
					<div class="col-md-3">
						: <b style="color:yellow" id="sisa_b"><?php echo @$jml_blm_b; ?></b>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-8 text-center">
			<div class="row">
				<div class="text-center" style="color:grey">
					<b style="font-size:15pt">SEDANG DIPANGGIL DI LAYAR LOKET <?php echo $sess; ?> </b>
				</div>
				<div class="text-center" style="border: 1.5px solid #6b6666;border-radius: 2px;background-color:#545353;padding:5px;margin-top:5px">
					<div class="text-center" style="border: 1.5px solid #6b6666; margin: auto;border-radius: 2px;background-color:#545353">
						<div id="antrian_aktif_layar"></div>
					</div>
					<!-- <table id="a" class="table table-bordered" cellspacing="0" width="100%" style="background-color:white">
							<thead>
							<tr>
							<th>Id Antrian</th>
							<th>Nomor Antrian</th>
							<th>Jam</th>
							<th>Tangal</th>
							<th>Status Panggil</th>										
							</tr>
							</thead>
							<tbody>
							</tbody>	 	
							</table>		 -->
				</div>
			</div>


			<div class="text-center" style="color:grey">
				<b style="font-size:10pt">Data Antrian </b>
			</div>
			<div class="text-center" style="border: 1.5px solid #6b6666;border-radius: 2px;background-color:#545353;padding:5px;margin-top:5px">
				<table id="a" class="table table-bordered" cellspacing="0" width="100%" style="background-color:white">
					<thead>
						<tr>
							<th>Id Antrian</th>
							<th>Nomor Antrian</th>
							<th>Jam</th>
							<th>Tangal</th>
							<th>Status Panggil</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>

		</div>



	</div>
</div>

<!-- smapi sini -->


<script>
	var save_method; //for save method string
	var table;
	var myApp = myApp || {};
	var myAppb = myAppb || {};
	$(document).ready(function() { //DOCUMENT READY
		myApp.oTable = $('#a').dataTable({ //Tabel antrian A
			"bProcessing": true,
			"bServerSide": true,
			"pageLength": 5,
			"bFilter": false,
			"bLengthChange": false,
			"aoColumnDefs": [{
				"bSortable": false,
				"aTargets": [1, 2],
				"aaSorting": [
					[2, "desc"]
				],
				"targets": [0],
				"visible": false
			}],
			'sPaginationType': 'full_numbers',
			"sAjaxSource": "<?php echo base_url('layar_loket/dataTable_all') ?>",
		});

		// myAppb.oTable = $('#b').dataTable({ //Tabel B
		// 	"bProcessing": true,
		// 	"bServerSide": true,
		// 	"pageLength": 5,
		// 	"bFilter": false,
		// 	"bLengthChange": false,
		// 	"aoColumnDefs": [{
		// 		"bSortable": false,
		// 		"aTargets": ["_all"]
		// 	}],
		// 	'sPaginationType': 'full_numbers',
		// 	"sAjaxSource": "<?php echo base_url('layar_loket/dataTable_b') ?>",
		// 	"aaSorting": [
		// 		[1, "desc"]
		// 	],
		// 	"aoColumnDefs": [{
		// 		"targets": [0],
		// 		"visible": false
		// 	}]
		// });

	}); //Akhir document ready
	myApp.polling = setInterval('myApp.oTable.fnDraw(false)', 5000);
	// myAppb.polling = setInterval('myAppb.oTable.fnDraw(false)', 5000);
</script>


<script>
	$(document).ready(function() {

		function antrian_a() {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('loket/getantrian_a'); ?>",
				data: "session=",
				success: function(data) {
					$("#antrian_aktif_a").html(data);
				}
			});


			$.ajax({
				type: "GET",
				url: "<?php echo site_url('layar_loket/sisa_a'); ?>",
				data: "",
				success: function(data) {
					$("#sisa_a").html(data);
				}
			});
		};

		function antrian_b() {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('loket/getantrian_b'); ?>",
				data: "session=",
				success: function(data) {
					$("#antrian_aktif_b").html(data);
				}
			});

			$.ajax({
				type: "GET",
				url: "<?php echo site_url('layar_loket/sisa_b'); ?>",
				data: "",
				success: function(data) {
					$("#sisa_b").html(data);
				}
			});
		};

		function antrian_layar() {
			$.ajax({
				type: "GET",
				url: "<?php echo site_url('loket/aktif_layar_loket'); ?>",
				// data: "session=",
				success: function(data) {
					$("#antrian_aktif_layar").html(data);
				}
			});
		};


		setInterval(function() {
			antrian_a();
			antrian_b();
			antrian_layar();
		}, 1000);

	});
</script>
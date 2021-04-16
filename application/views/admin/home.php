
<div class="row  border-bottom white-bg dashboard-header">
   <div class="col-sm-12">
      <div class="m-t-sm">
         <div class="text-center">
            <div id="chart" style="min-width: 300px; height: 400px; margin: 0 auto"></div>


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

<script>
$(function () {
    $('#chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Jumlah Koperasi per Kategori'
        },
        subtitle: {
            text: 'Kota: Medan'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '7px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Jumlah Koperasi: <b>{point.y}</b>'
        },
        series: [{
            name: 'koperasi',
            data: [
			<?php
			//foreach ($kop as $row) {?>
				 //['<?php echo $row['jenis_koperasi'];?>', <?php echo $jml_koperasi[$row['id_jenis_koperasi']];?>],
			<?php //} ?>
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#8e0111',
                align: 'right',
               
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
</script>
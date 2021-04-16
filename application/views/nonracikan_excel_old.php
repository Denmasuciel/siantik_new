<?php
$bulan=date('d-m-Y');
// header("Content-type: application/octet-stream");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Non Racikan tgl_$bulan.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Data Non Racikan</title>

</head>
<body>
<div id="container">

Laporan Pelayanan Farmasi Non Racikan RSUD Wonosari<br/>
Tanggal <?php echo date('d-m-Y');?><br/>
</div>
<br>
<table id="aa" class="table table-striped table-bordered table-hover " border="1">
<thead>
<tr>
    <th>No</th>
    <th>No Antrian</th>
    <th>Resep IN</th>
    <th>Obat Out</th>
    <th>Waktu Pelayanan (menit)</th>
    
</tr>
</thead>

<tbody>
<?php
    if($nonracikan->num_rows()>0){
        $no =1;
        foreach($nonracikan->result_array() as $db){ 
        ?>    
        <tr>
            <td align="center" width="30"><?php echo $no; ?></td>
             <td align="center" width="150" ><?php echo $db['nomor_antrian']; ?></td>
             <td align="center" width="150" ><?php echo $db['jam_serahkan_tiket']; ?></td>
             <td align="center" width="150" ><?php echo $db['selesai']; ?></td>
             <td align="center" width="150" ><?php echo $db['menit']; ?></td>
         </tr>
    <?php
        $no++;
        }
    }
?>

</tbody>
</table>
   

</body></html>

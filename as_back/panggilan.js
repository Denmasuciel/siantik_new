function mulai() {
//MAINKAN SUARA BEL PADA SAAT AWAL
document.getElementById('suarabel').pause();
document.getElementById('suarabel').currentTime = 0;
document.getElementById('suarabel').play();
//SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT		
totalwaktu = document.getElementById('suarabel').duration * 700;
//MAINKAN SUARA NOMOR URUT		
setTimeout(function() {
document.getElementById('suarabelnomorurut').pause();
document.getElementById('suarabelnomorurut').currentTime = 0;
document.getElementById('suarabelnomorurut').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1300;

setTimeout(function() {
document.getElementById('suara_a').pause();
document.getElementById('suara_a').currentTime = 0;
document.getElementById('suara_a').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1200;

<?php
//JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
if($antrian<10){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);

totalwaktu = totalwaktu + 1200;
<?php		
}elseif($antrian ==10){
//JIKA 10 MAKA MAIKAN SUARA SEPULUH
?>
setTimeout(function() {
document.getElementById('sepuluh').pause();
document.getElementById('sepuluh').currentTime = 0;
document.getElementById('sepuluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php		
}elseif($antrian ==11){
//JIKA 11 MAKA MAIKAN SUARA SEBELAS
?>
setTimeout(function() {
document.getElementById('sebelas').pause();
document.getElementById('sebelas').currentTime = 0;
document.getElementById('sebelas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php		
}elseif($antrian < 20){
//JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
?>
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('belas').pause();
document.getElementById('belas').currentTime = 0;
document.getElementById('belas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php		
}elseif($antrian==20 || $antrian == 30 || $antrian == 40 || $antrian==50 || $antrian == 60 || $antrian == 70 || $antrian == 80 || $antrian == 90){ 
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian < 100){				
//JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}
elseif($antrian==100){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian < 110){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php    
}elseif($antrian ==110){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sepuluh').pause();
document.getElementById('sepuluh').currentTime = 0;
document.getElementById('sepuluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian == 120 || $antrian == 130 || $antrian == 140 || $antrian == 150 || $antrian == 160 || $antrian == 170 || $antrian == 180 || $antrian == 190){
?>

setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian == 111){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);                 
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sebelas').pause();
document.getElementById('sebelas').currentTime = 0;
document.getElementById('sebelas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian < 120){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('belas').pause();
document.getElementById('belas').currentTime = 0;
document.getElementById('belas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian < 200){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian == 200 || $antrian == 300 || $antrian == 400 || $antrian == 500){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian == 211 || $antrian == 311 || $antrian == 411){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sebelas').pause();
document.getElementById('sebelas').currentTime = 0;
document.getElementById('sebelas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;      

<?php
}elseif(($antrian > 200 && $antrian < 210 ) || ($antrian > 300 && $antrian < 310) || ($antrian > 400 && $antrian < 410)){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;


<?php
}elseif($antrian == 210 || $antrian == 310 || $antrian == 410){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sepuluh').pause();
document.getElementById('sepuluh').currentTime = 0;
document.getElementById('sepuluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif(($antrian > 210 && $antrian < 220) || ($antrian > 310 && $antrian < 320) || ($antrian > 410 && $antrian < 420)){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

setTimeout(function() {
document.getElementById('belas').pause();
document.getElementById('belas').currentTime = 0;
document.getElementById('belas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian == 220 || $antrian == 230 || $antrian == 240 || $antrian == 250 || $antrian == 260 || $antrian == 270 || $antrian == 280 || $antrian == 290 || $antrian == 320 || $antrian == 340 || $antrian == 350 || $antrian == 360 || $antrian == 370 || $antrian == 380 || $antrian == 390){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian < 500){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php

}else{
//JIKA LEBIH DARI 100 
//Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
//Selebihnya akan langsung disebutkan angkanya saja 
//tanpa kata "RATUS", "PULUH", maupun "BELAS"
?>

<?php 
for($i=0;$i<$panjang;$i++){
?>

totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel<?php echo $i; ?>').pause();
document.getElementById('suarabel<?php echo $i; ?>').currentTime = 0;
document.getElementById('suarabel<?php echo $i; ?>').play();
}, totalwaktu);
<?php
}
}
?>


totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabelsuarabelloket').pause();
document.getElementById('suarabelsuarabelloket').currentTime = 0;
document.getElementById('suarabelsuarabelloket').play();
}, totalwaktu);

totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabelloket1').pause();
document.getElementById('suarabelloket1').currentTime = 0;
document.getElementById('suarabelloket1').play();
}, totalwaktu);
}


function mulai_b() {
//MAINKAN SUARA BEL PADA SAAT AWAL
document.getElementById('suarabel').pause();
document.getElementById('suarabel').currentTime = 0;
document.getElementById('suarabel').play();
//SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT      
totalwaktu = document.getElementById('suarabel').duration * 700;
//MAINKAN SUARA NOMOR URUT      
setTimeout(function() {
document.getElementById('suarabelnomorurut').pause();
document.getElementById('suarabelnomorurut').currentTime = 0;
document.getElementById('suarabelnomorurut').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1300;
<?php
//JIKA KURANG DARI 10 MAKA MAIKAN SUARA ANGKA1
if($antrian<10){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);

totalwaktu = totalwaktu + 1200;
<?php       
}elseif($antrian ==10){
//JIKA 10 MAKA MAIKAN SUARA SEPULUH
?>
setTimeout(function() {
document.getElementById('sepuluh').pause();
document.getElementById('sepuluh').currentTime = 0;
document.getElementById('sepuluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php       
}elseif($antrian ==11){
//JIKA 11 MAKA MAIKAN SUARA SEBELAS
?>
setTimeout(function() {
document.getElementById('sebelas').pause();
document.getElementById('sebelas').currentTime = 0;
document.getElementById('sebelas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php       
}elseif($antrian < 20){
//JIKA 12-20 MAKA MAIKAN SUARA ANGKA2+"BELAS"
?>
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('belas').pause();
document.getElementById('belas').currentTime = 0;
document.getElementById('belas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php       
}elseif($antrian==20 || $antrian == 30 || $antrian == 40 || $antrian==50 || $antrian == 60 || $antrian == 70 || $antrian == 80 || $antrian == 90){ 
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian < 100){                
//JIKA PULUHAN MAKA MAINKAN SUARA ANGKA1+PULUH+AKNGKA2
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}
elseif($antrian==100){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian < 110){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php    
}elseif($antrian ==110){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sepuluh').pause();
document.getElementById('sepuluh').currentTime = 0;
document.getElementById('sepuluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian == 120 || $antrian == 130 || $antrian == 140 || $antrian == 150 || $antrian == 160 || $antrian == 170 || $antrian == 180 || $antrian == 190){
?>

setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian == 111){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);                 
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sebelas').pause();
document.getElementById('sebelas').currentTime = 0;
document.getElementById('sebelas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian < 120){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('belas').pause();
document.getElementById('belas').currentTime = 0;
document.getElementById('belas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian < 200){
?>
setTimeout(function() {
document.getElementById('seratus').pause();
document.getElementById('seratus').currentTime = 0;
document.getElementById('seratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian == 200 || $antrian == 300 || $antrian == 400 || $antrian == 500){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
<?php
}elseif($antrian == 211 || $antrian == 311 || $antrian == 411){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sebelas').pause();
document.getElementById('sebelas').currentTime = 0;
document.getElementById('sebelas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;      

<?php
}elseif(($antrian > 200 && $antrian < 210 ) || ($antrian > 300 && $antrian < 310) || ($antrian > 400 && $antrian < 410)){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;


<?php
}elseif($antrian == 210 || $antrian == 310 || $antrian == 410){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('sepuluh').pause();
document.getElementById('sepuluh').currentTime = 0;
document.getElementById('sepuluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif(($antrian > 210 && $antrian < 220) || ($antrian > 310 && $antrian < 320) || ($antrian > 410 && $antrian < 420)){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

setTimeout(function() {
document.getElementById('belas').pause();
document.getElementById('belas').currentTime = 0;
document.getElementById('belas').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian == 220 || $antrian == 230 || $antrian == 240 || $antrian == 250 || $antrian == 260 || $antrian == 270 || $antrian == 280 || $antrian == 290 || $antrian == 320 || $antrian == 340 || $antrian == 350 || $antrian == 360 || $antrian == 370 || $antrian == 380 || $antrian == 390){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php
}elseif($antrian < 500){
?>
setTimeout(function() {
document.getElementById('suarabel0').pause();
document.getElementById('suarabel0').currentTime = 0;
document.getElementById('suarabel0').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('ratus').pause();
document.getElementById('ratus').currentTime = 0;
document.getElementById('ratus').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel1').pause();
document.getElementById('suarabel1').currentTime = 0;
document.getElementById('suarabel1').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

setTimeout(function() {
document.getElementById('puluh').pause();
document.getElementById('puluh').currentTime = 0;
document.getElementById('puluh').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel2').pause();
document.getElementById('suarabel2').currentTime = 0;
document.getElementById('suarabel2').play();
}, totalwaktu);
totalwaktu = totalwaktu + 1000;

<?php

}else{
//JIKA LEBIH DARI 100 
//Karena aplikasi ini masih sederhana maka logina konversi hanya sampai 100
//Selebihnya akan langsung disebutkan angkanya saja 
//tanpa kata "RATUS", "PULUH", maupun "BELAS"
?>

<?php 
for($i=0;$i<$panjang;$i++){
?>

totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabel<?php echo $i; ?>').pause();
document.getElementById('suarabel<?php echo $i; ?>').currentTime = 0;
document.getElementById('suarabel<?php echo $i; ?>').play();
}, totalwaktu);
<?php
}
}
?>


totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabelsuarabelloket').pause();
document.getElementById('suarabelsuarabelloket').currentTime = 0;
document.getElementById('suarabelsuarabelloket').play();
}, totalwaktu);

totalwaktu = totalwaktu + 1000;
setTimeout(function() {
document.getElementById('suarabelloket1').pause();
document.getElementById('suarabelloket1').currentTime = 0;
document.getElementById('suarabelloket1').play();
}, totalwaktu);
}



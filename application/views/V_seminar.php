<!DOCTYPE html>
<html lang="en">

<head>

<?php

date_default_timezone_set('Asia/Jakarta');
//A: RECORDS TODAY'S Date And Time
$today = time('');

//B: RECORDS Date And Time OF YOUR EVENT
$event = mktime(0,0,0,4,26,2018);

//C: COMPUTES THE DAYS UNTIL THE EVENT.
$countdown = round(($event - $today)/68000);

//D: DISPLAYS COUNTDOWN UNTIL EVENT


?>

<!-- core css -->
<?php $this->load->view('fragment/header');?>

</head>
<body style="background-image: url(Image/background.jpg); background-attachment: fixed;">

<!-- core nav -->
<?php $this->load->view('fragment/nav');?>

<div class="">
	<div class="container">
		<div class="section">
			<div class="row">
				<h4 class="center-align font yellow-text text-darken-2"><b>SEMINAR</b></h4>
				<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
			</div>
<div class="container" style="height: 100%;">
 <div class="section">
  <div class="row" style="text-align: center;">
   <div class="col s12" >
    <h3 class="center-align font cbcc-text">COMING SOON</h4>
    <h4 class="center-align font yellow-text text-darken-2"><? echo "$countdown"." "."days left until open registration ";?></h4>
   </div>
  </div>
 </div>
</div>
</div>
</div>
</div>

  <!-- core footer -->
  <?php $this->load->view('fragment/footer');?>

  <!-- core js -->
  <?php $this->load->view('fragment/script');?>

  <script>
 function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024; // in MB
        if (FileSize > 350) {
            alert('File size exceeds 300 KB');
            $(file).val(''); //for clearing with Jquery
        } else {

        }
    }
  </script>
  <script>
   $('.owl-carousel').owlCarousel({
  loop:false,
  margin:10,
  nav:false,
  responsive:{
   0:{
    items:1
   },
   600:{
    items:2
   },
   1200:{
    items:3
   }
  }
 })
  </script>

  </body>
</html>
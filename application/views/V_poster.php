<!DOCTYPE html>
<html lang="en">

<head>

<!-- core css -->
<?php $this->load->view('fragment/header');?>

</head>
<body>
    

<!-- core nav -->
<?php $this->load->view('fragment/nav');?>
<div class="">
	<div class="container">
		<div class="section">
			<div class="row">
				<h4 class="center-align font yellow-text text-darken-2"><b>TOP 60 TEAMS</b></h4>
				<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
			</div>
<div class="container" style="height: 100%;">
 <div class="section">
  <div class="row" style="text-align: center;">
   <div class="col s12" >
    <img src="<?php echo base_url().'assets/informasi/poster.jpg'?>">
    <!--style="background-image: url(<?php echo base_url().'assets/informasi/poster.jpg'?>); "-->
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
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
				<h4 class="center-align font yellow-text text-darken-2"><b>INFORMATION</b></h4>
				<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
			</div>
			<div class="row">
			    <div class="col l4 m6 s12">
					<div class="card z-depth-3">
						<div class="card-image">
						    <div class="owl-carousel owl-theme">
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe.jpg" >
						        </div>
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe_0.jpg" >
						        </div>
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe_1.jpg" >
						        </div>
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe_2.jpg" >
						        </div>
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe_3.jpg" >
						        </div>
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe_4.jpg" >
						        </div>
						        <div class="item">
							    <img src="<?php echo base_url();?>assets/Image/FAQ/cafe_5.jpg" >
						        </div>
						    </div>
						</div>

						<div class="card-content">
						    <div class="card-title font">
								<b>[ FREQUENTLY ASK QUESTION ]</b>
							</div>
							<p class="grey-text tanggal-card">15 April 2018</p>
							<div class="overflow-berita">
							
							</div>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>FREQUENTLY ASK QUESTION</span>
							<p>Good morning!<br>
							If you have any questions about CBCC 2018, you can read the F.A.Q<br>
							Hopefully these will answered your questiona</p>
							<br>
							<p>For further information, don't hesitate to contact us!</p>
							<br>
							<p>Line@ : @creatonomics<br>
							Instagram : @creatonomics<br>
							Twitter : @creatonomics<br>
							Facebook Fanpage : @creatonomics<br>
							Phone : <br>
							08119391997 (Anggit) <br>
							081256463077 (Nathasia)</p>
							<br>
							<p>#CBCC2018 <br>
							#BusinessCompetition</p>
						</div>

						
					</div>
				</div>
				
			    <?php $i=0; foreach($informasi as $informasi) { ?>
				<div class="col l4 m6 s12">
					<div class="card z-depth-3">
						<div class="card-image">
							<img src="<?php echo base_url().'assets/informasi/'.$informasi->FOTO;?>">
						</div>
						<div class="card-content">
						    <div class="card-title font">
								<b><?php echo $informasi-> JUDUL; ?></b>
							</div>
							<p class="grey-text tanggal-card">12 Februari 2018</p>
							<div class="overflow-berita">
							<p> <?php echo $informasi->DESKRIPSI; ?> </p>
							</div>
						</div>
					</div>
				</div>
				<?php $i++; } ?>
			</div>
			<!-- <div class="row">
				<ul class="pagination center-align">
					<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
					<li class="active cbcc-color"><a href="#!">1</a></li>
					<li class="waves-effect"><a href="#!">2</a></li>
					<li class="waves-effect"><a href="#!">3</a></li>
					<li class="waves-effect"><a href="#!">4</a></li>
					<li class="waves-effect"><a href="#!">5</a></li>
					<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				</ul>
			</div> -->
		</div>
	</div>
</div>


<!-- core footer -->
<?php $this->load->view('fragment/footer');?>


<!-- core javascript -->
<?php $this->load->view('fragment/script');?>

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
				items:1
			},
			1200:{
				items:1
			}
		}
	})
  	</script>

  </body>
</html>
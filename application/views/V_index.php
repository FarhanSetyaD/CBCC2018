<!DOCTYPE html>
<html lang="en">
<head>

<!-- core css -->
<?php $this->load->view('fragment/header');?>

</head>
<body>

<!-- core nav -->
<?php $this->load->view('fragment/nav');?>
  

  <div id="index-banner" class="parallax-container" style="height: 550px;">
    <div class="section no-pad-bot">
      <div class="container" style="margin-top: 50px">
        <br><br>
        <center>
        <img class="logo-header" src="<?php echo base_url();?>assets/Image/logo7.png" alt="">
        </center>
        <div class="row center">
          <h5 class="header col s12 light font yellow-text text-darken-2"><b>Creatonomics Business Creativity Competition</b></h5>
        </div>
     
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url();?>assets/Image/header.jpg" alt="Unsplashed background img 1"></div>
  </div>



<div style="background-color: #003368">
	<div class="container">
		<div class="section">
			<div class="row">
				<h4 class="center-align font yellow-text text-darken-2"><b>WHAT  IS CREATONOMICS ?</b></h4>
				<hr class="hr">
			</div>
			<div class="row">
				<div class="col s12 l5">
					<p class="white-text">Creatonomics Business Creaitivity Competition (CBCC) adalah sebuah acara oleh jurusan Manajemen, Fakultas Ekonomi dan Bisnis, Universitas Brawijaya yang memiliki dua acara utama, kompetisi dan seminar untuk mendorong semangat kewirausahaan yang berkelanjutan dalam memperkuat ekonomi kreatif di Indonesia dengan tema “Millenials Disruptive Creativity”</p>
					<div class="center-align">
						<a href="<?php echo base_url();?>index.php/Event"><button class="tombol">View More</button></a>
					</div>
				</div>
				<div class="col hide-on-med-and-down">
					
				</div>
				<div class="col s12 l6">
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/0dEPUr4eOLM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<!--<div style="background-color: #001C3A">-->
<!--	<div class="container">-->
<!--		<div class="section">-->
<!--			<div class="row">-->
<!--				<h4 class="center-align font yellow-text text-darken-2"><b>DOWNLOAD GUIDELINE</b></h4>-->
<!--				<hr class="hr">-->
<!--			</div>-->
<!--			<div class="row">-->
<!--				<div class="col s12">-->
<!--					<div class="center-align">-->
<!--						<a href="<?php echo base_url();?>assets/GUIDELINE%20CBCC%202018_in.pdf"><button class="tombol">Guideline</button></a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<div class="parallax-w" style="background-image: url(<?php echo base_url();?>assets/Image/background.jpg)">
	<div class="container">
		<div class="section">
			<div class="row">
				<h4 class="center-align font yellow-text text-darken-2"><b>EVENT</b></h4>
				<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
			</div>
			<div class="row">
				<div class="col s12 m6">
					<div class="card">
						<div class="card-image">
							<div class="overlay">
								<div class="card-content">
									<a href="<?php echo base_url();?>index.php/Event#competition"><h4 class="font white-text center-align"><b>COMPETITION</b></h4></a>
									<p class="font white-text center-align hide-on-small-and-down">Kompetisi ide bisnis dengan 16 kategori, yang kita ketahui dengan 16 sub-sektor ekonomi kreatif bertemakan “Millenials Disruptive Creativity.</p>
								</div>
							</div>
							<img src="<?php echo base_url();?>assets/Image/competition.jpg" height="">
						</div>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="card">
						<div class="card-image">
							<div class="overlay">
								<div class="card-content">
									<a href="<?php echo base_url();?>index.php/Event#education"><h4 class="font white-text center-align"><b>EDUCATION</b></h4></a>
									<p class="font white-text center-align hide-on-small-and-down">Education merupakan salah satu bentuk acara utama CBCC yang dikemas dalam bentuk seminar yang mempunyai topik tentang Creativepreneurship dan Sustainopreneurship.</p>
								</div>
							</div>
							<img src="<?php echo base_url();?>assets/Image/seminar.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div style="background-color: #003368">
	<div class="container">
		<div class="section">
			<div class="row">
				<h4 class="center-align font yellow-text text-darken-2"><b>INFORMATION</b></h4>
				<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
			</div>
			 <div class="row">
			    
				<div class="col s12">
					<div class="owl-g owl-carousel owl-theme">
						<?php $i=0; foreach($informasi as $informasi) { ?>
						<div class="item">
							<div class="col s12">
							    <div class="card">
							    	<div class="card-image">
							    		<img class="activator" src="<?php echo base_url('assets/informasi/').$informasi->FOTO;?>">
							    	</div>
									<div class="card-content">
										<h5 class="font"><b><?php echo $informasi-> JUDUL; ?></b></h5>
										<p class="grey-text tanggal-card">
											<?php 
												$phpdate = strtotime($informasi-> TANGGAL);
												$mysqldate = date( 'F d, Y',$phpdate);
												echo $mysqldate; 
											?>
										</p>			
									</div>
									<div class="card-action" style="padding-bottom: 0px;">
										<center>
										<button class="tombol activator" style="margin-bottom: 10px;">View More</button>
										</center>
									</div>
									<div class="card-reveal">
									      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i><?php echo $informasi-> JUDUL; ?></span>
									      <?php echo $informasi -> DESKRIPSI; ?>
									</div>
								</div>
							</div>
						</div>
						<?php $i++; } ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="parallax-w" style="background-image: url(<?php echo base_url();?>assets/Image/background.jpg)">
	<div class="container">
		<div class="section">
			<div class="row">
				<h4 class="center-align font yellow-text text-darken-2"><b>AGREEMENT</b></h4>
				<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
			</div>
			<div class="row">
				<div class="col s12">
					<div class="owl-g owl-carousel owl-theme">
						<div class="item">
							<div class="col s12">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="<?php echo base_url();?>assets/Image/sponsor/BI.jpg" height="200px;">
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Bank Indonesia</span>
										<p>Bank Indonesia (BI) is a central bank of the Republic of Indonesia. BI operates 37 offices across Indonesia, and four representative offices in New York City, London, Tokyo and Singapore. So CBCC 2018 and BI have agreed to work together to develop entrepreneurs to support economic fundamentals in Indonesia and globally.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col s12">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="<?php echo base_url();?>assets/Image/sponsor/nb.jpg" height="200px;">
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>NBTO</span>
										<p>NBTO is a company engaged in the field of tourism travel agents and event organizers. NBTO has the value of helpful, cheerful, and careful, the value is used as a culture and guidance in providing services to consumers. So CBCC 2018 and NBTO agreed to work together to develop young entrepreneurs in Indonesia.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col s12">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="<?php echo base_url();?>assets/Image/sponsor/paperocks.png" height="200px;">
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Paperocks</span>
										<p>PT. Paperocks Indonesia is a national paper packaging company focused on food packaging industry. CBCC 2018 and PT. Paperocks Indonesia agreed to develop creative industry-based entrepreneur in packaging product.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col s12">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="<?php echo base_url();?>assets/Image/sponsor/bk.png" height="200px;">
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>Burger King</span>
										<p>BURGER KING® is the second largest fast food hamburger chain in the world. Every day, more than 11 million guests visit BURGER KING® restaurants around the world. And they do so, because the restaurants are known for serving high-quality, great-tasting, and affordable food. So CBCC 2018 and Burger King agreed to develop entrepreneurs in the food industry.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col s12">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="<?php echo base_url();?>assets/Image/sponsor/PJB.jpg" height="200px;">
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>PJB</span>
										<p>PT Pembangkitan Jawa Bali (PJB) is a power generation company and a subsidiary of PT PLN. PJB is engaged in power generation, operations, maintenance and other business related to national electricity. So CBCC 2018 and PJB agreed to work together to develop young entrepreneurs in Indonesia.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col s12">
								<div class="card">
									<div class="card-image">
										<img class="activator" src="<?php echo base_url();?>assets/Image/sponsor/red.png" height="200px;">
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>RedDoorz</span>
										<p>RedDoorz is the fastest growing chain of Budget hotels in South East Asia. Reddoorz provides its users cheap accommodations with comfortable and clean rooms. RedDoorz has an easy 3-Step Online Hotel booking process. So CBCC 2018 and Red Doorz agreed to work together to develop  creative young entrepreneur with a new innovation.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="">
	<div class="container">
		<div class="section">
			<div class="row">
				<div class="col s12 m6">
				    <div class="row">
					    <h4 class="center-align font yellow-text text-darken-2"><b>SPONSORSHIP</b></h4>
					    <hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
					</div>
					<div class="col s12 m12 l6 center-align">
					    <img src="<?php echo base_url();?>assets/Image/sponsor/nb.jpg" style="height:50px;">
					    <img src="<?php echo base_url();?>assets/Image/sponsor/BI.jpg" style="height:40px;">
					    <img src="<?php echo base_url();?>assets/Image/sponsor/paperocks.png" style="height:40px;">
					    <img src="<?php echo base_url();?>assets/Image/sponsor/bk.png" style="height:40px;">
					    <img src="<?php echo base_url();?>assets/Image/sponsor/PJB.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/sponsor/red.png" style="height:30px;">
				    </div>
				</div>
				<div class="col s12 m6">
				    <div class="row">
					    <h4 class="center-align font yellow-text text-darken-2"><b>MEDIA PARTNER</b></h4>
					    <hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
					</div
					<div class="col s12 m12 l6 center-align">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864822.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864823.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864824.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864825.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864826.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864827.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864828.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864829.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7864874.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7921690.jpg" style="height:30px;">
					    <img src="<?php echo base_url();?>assets/Image/medpar/S__7921691.jpg" style="height:30px;">
				    </div>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- core footer -->
<?php $this->load->view('fragment/footer');?>


<!-- core javascript -->
<?php $this->load->view('fragment/script');?>

  	<script>
	  $('.owl-g').owlCarousel({
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
  	<script>
	  $('.owl-f').owlCarousel({
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

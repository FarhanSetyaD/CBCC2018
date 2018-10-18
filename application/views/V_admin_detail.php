<!DOCTYPE html>
<html lang="en">
<head>

<!-- core css -->
<?php $this->load->view('fragment/header');?>

</head>
<body style="background-image: url(<?php echo base_url();?>Image/background.jpg); background-attachment: fixed;">

<div class="navbar-fixed">
  <nav class="white" style="background-color: #026AB0">
      <a id="logo-container" href="#" class="brand-logo font yellow-text logo-pojok"><img src="<?php echo base_url();?>assets/Image/logo7.png" height="40px;"></a>
      <ul class="right hide-on-med-and-down" style="margin-right: 100px;">
        <li><a class="yellow-text text-darken-2 font" href="#"><i class="material-icons left" style="margin-top: 4px">account_circle</i>Administrator</a></li>
        <li><a href="<?php echo base_url();?>index.php/Wakwaw/LogOut" class="waves-effect waves-light btn red">Log Out</a></li>
        
 
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons black-text">menu</i></a>
  </nav>
</div>
  	  <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      
      
<div class="container">
	<div class="section">
		<div class="row">
			<h4 class="center-align font yellow-text text-darken-2"><b>ADMIN PAGE</b></h4>
			<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
		</div>
		<div class="row">
			<div class="col s12">
				<div class="card z-depth-4">
					<div class="card-tabs">
						<ul class="tabs">
							<li class="tab col s12"><a href="#test4">DATA PESERTA</a></li>
						</ul>
					</div>
					<div class="card-content grey lighten-5">
						<div id="test4">
							<div class="row">
								<div class="col s12">
									<div class="row">
										<table>
											<?php $i=0; foreach($peserta as $peserta) { ?>
	                                       	<tr>
	                                       		<td style="width: 30%"><b>Nama Tim</b></td>
	                                       		<td style="width: 5%">: </td>
	                                            <td style="width: 65%"><?php echo $peserta->NAMA_TIM; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>ID Unik</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->ID_UNIQUE; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Perguruan Tinggi</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->UNIV; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Nama Bisnis</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->NAMA_BISNIS; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Bidang Bisnis</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->BIDANG_BISNIS; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Deskripsi Ide</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->DESKRIP; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Link Video</b></td>
	                                       		<td>: </td>
	                                            <td><a href="<?php echo $peserta->LINK_VIDEO; ?>" target="_BLANK" class="waves-effect waves-light btn">Video</a></td>
	                                        </tr>
	                                        <tr>
	                                        	<td><h5><b>KETUA</b></h5></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Nama</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->NAMA1; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Tempat Tanggal Lahir</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->TTL1; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Email</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->EMAIL1; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>HP</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->HP1; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Line</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->LINE1; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Foto</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->FOTO1;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>KTM</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->KTM1;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>KTP</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->KTP1;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                        	<td><h5><b>ANGGOTA 1</b></h5></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Nama</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->NAMA2; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Tempat Tanggal Lahir</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->TTL2; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Email</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->EMAIL2; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>HP</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->HP2; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Line</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->LINE2; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Foto</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->FOTO2;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>KTM</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->KTM2;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>KTP</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->KTP2;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                        	<td><h5><b>ANGGOTA 2</b></h5></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Nama</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->NAMA3; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Tempat Tanggal Lahir</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->TTL3; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Email</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->EMAIL3; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>HP</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->HP3; ?></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>Line</b></td>
	                                       		<td>: </td>
	                                            <td><?php echo $peserta->LINE3; ?></td>
	                                        </tr>
	                                         <tr>
	                                       		<td><b>Foto</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->FOTO3;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>KTM</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->KTM3;?>" style="height: 150px;"></td>
	                                        </tr>
	                                        <tr>
	                                       		<td><b>KTP</b></td>
	                                       		<td>: </td>
	                                            <td><img src="<?php echo base_url().'assets/team/'.$peserta->NAMA_TIM.'/'.$peserta->KTP3;?>" style="height: 150px;"></td>
	                                        </tr>
											<?php $i++; } ?>
										</table>

										 <!-- <td><?php echo $peserta->ID_UNIQUE; ?></td>
	                                            <td><?php echo $peserta->UNIV; ?></td>
	                                            <td><?php echo $peserta->NAMA_BISNIS; ?></td>
	                                            <td><?php echo $peserta->BIDANG_BISNIS; ?></td>
	                                            <td><?php echo $peserta->LINK_VIDEO; ?></td> -->


									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<a href="<?php echo base_url('index.php/Ccrud/'); ?>" class="waves-effect waves-light btn">BACK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 <!-- Modal Structure -->
<div id="modal1" class="modal">
	<div class="modal-content">
		<h4 class="center-align font yellow-text text-darken-2"><b>TAMBAH BERITA</b></h4>
		<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
	  		<div class="row">
	  		    <?php echo form_open_multipart('Informasi/tambah_aksi'); ?>
	  			<div class="input-field col s12">
				  <input placeholder="Isikan Judul berita anda" id="first_name" type="text" class="validate" name='JUDUL'>
				  <label for="first_name">Judul</label>
				</div>
				<div class="input-field col s12">
         			<p style="margin-top: -10px">Deskripsi :</p>
          			<textarea class="ckeditor" id="ckedtor" name="DESKRIPSI"></textarea>
        		</div>
        		<div class="input-field col s12 center-align">
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				  </button>
				</div>
				<?php echo form_close() ?>
			</div>
	</div>
</div>

<div id="modal2" class="modal">
	<div class="modal-content">
		<h4 class="center-align font yellow-text text-darken-2"><b>EDIT BERITA</b></h4>
		<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
	  		<div class="row">
	  		    <?php echo form_open_multipart('Informasi/edit/$informasi->ID_INFO'); ?>
	  			<div class="input-field col s12">
				  <input placeholder="Isikan Judul berita anda" id="first_name" type="text" class="validate" name='JUDUL'>
				  <label for="first_name">Judul</label>
				</div>
				<div class="input-field col s12">
         			<p style="margin-top: -10px">Deskripsi :</p>
          			<textarea class="ckeditor" id="ckedtor" name="DESKRIPSI"></textarea>
        		</div>
        		<div class="input-field col s12 center-align">
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				  </button>
				</div>
				<?php echo form_close() ?>
			</div>
	</div>
</div>


  <!-- core footer -->
  <?php $this->load->view('fragment/footer');?>

  <!-- core js -->
  <script type="javascript" src="<?php echo base_url();?>assets/plugin/ckeditor/ckeditor.js"></script>
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

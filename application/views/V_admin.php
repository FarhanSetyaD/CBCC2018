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
							<li class="tab col s6"><a href="#test4">DATA PESERTA</a></li>
							<li class="tab col s6"><a href="#test5">DATA INFORMASI</a></li>
						</ul>
					</div>
					<div class="card-content grey lighten-5">
						<div id="test4">
							<div class="row">
								<div class="col s12">
									<div style="overflow-x: scroll; margin: 2px;">
									<table id="data-table-simple" class="striped" cellspacing="0" style="">
									  <thead>
										<tr>
										  <th>No</th>
										  <th>Nama Tim</th>
										  <th>Id unique</th>
										  <th>Universitas</th>
										  <th>Judul Bisnis</th>
										  <th>Bidang Bisnis</th>
										  <th>Link Video</th>
										  <th style="width: 5px;">Detail</th>
										</tr>
									  </thead>
									  <tbody>
										<?php $i=1; foreach($peserta as $peserta) { ?>
                                       	<tr>
                                       		<td><?php echo $i; ?></td>
                                            <td><?php echo $peserta->NAMA_TIM; ?></td>
                                            <td><?php echo $peserta->ID_UNIQUE; ?></td>
                                            <td><?php echo $peserta->UNIV; ?></td>
                                            <td><?php echo $peserta->NAMA_BISNIS; ?></td>
                                            <td><?php echo $peserta->BIDANG_BISNIS; ?></td>
                                            <td><a href="<?php echo $peserta->LINK_VIDEO;?>" target="_BLANK" class="waves-effect waves-light red btn"><i class="material-icons">visibility</i></td>
                                            <td><a href="<?php echo base_url().'index.php/ccrud/detail/'.$peserta->ID_TIM;?>" target="_BLANK" class="waves-effect waves-light btn"><i class="material-icons">search</i></a>
                                            </td>
										</tr>
										<?php $i++; } ?>
									  </tbody>
									</table>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<a href="Ccrud/export_excel" class="waves-effect waves-light btn">DOWNLOAD EXCEL</a>
								</div>
							</div>
						</div>
						<div id="test5">
							<div class="col s6 left-align" style="margin-bottom: 20px;">
								<a class="waves-effect waves-light btn" href="<?php echo base_url();?>index.php/Informasi/index">LIHAT BERITA</a>
							</div>
							<div class="col s6 right-align" style="margin-bottom: 20px;">
								<a href="#modall" class="waves-effect waves-light btn modal-trigger">TAMBAH BERITA</a>
							</div>
							<table class="striped">
								<thead>
									<th style="width: 30%;">Judul</th>
									<th style="width: 60%;">Deskripsi</th>
									<th style="width: 5%;">Edit</th>
									<th style="width: 5%;">Del</th>
								</thead>
								<tbody>
									<?php $i=0; foreach($informasi as $informasi) { ?>
									<tr>
										<td><?php echo $informasi->JUDUL; ?></td>
										<td><?php echo $informasi->DESKRIPSI; ?></td>
										<td><div class="card-image">
							                    <img src="<?php echo base_url().'assets/informasi/'.$informasi->FOTO;?>">
						                    </div></td>
										<td><a href="#modal<?php echo $informasi->ID_INFO;?>" class="modal-trigger"><i class="material-icons blue-text">edit</i></a></td>
										<td><a href="<?php echo base_url();?>index.php/Informasi/hapus/<?php echo $informasi->ID_INFO; ?>"><i class="material-icons red-text">delete</i></a></td>

										<div id="modal<?php echo $informasi->ID_INFO;?>" class="modal">
											<div class="modal-content">
												<h4 class="center-align font yellow-text text-darken-2"><b>EDIT BERITA</b></h4>
												<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
											  		<div class="row">
											  		    <?php echo form_open_multipart('Informasi/edit/$informasi->ID_INFO'); ?>
											  			<div class="input-field col s12">
														  <input placeholder="Isikan Judul berita anda" id="first_name" type="text" class="validate" name='JUDUL'>
														  <label for="first_name">Judul</label>
														</div>
														<div class="file-field input-field col s12">
													      <div class="btn">
													        <span>File</span>
													        <input type="file">
													      </div>
													      <div class="file-path-wrapper">
													        <input class="file-path validate" type="text">
													      </div>
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

										<?php $i++; } ?>
									</tr>
								</tbody>
							</table>
							<!--<ul class="pagination center">
								<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
								<li class="active"><a href="#!">1</a></li>
								<li class="waves-effect"><a href="#!">2</a></li>
								<li class="waves-effect"><a href="#!">3</a></li>
								<li class="waves-effect"><a href="#!">4</a></li>
								<li class="waves-effect"><a href="#!">5</a></li>
								<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 <!-- Modal Structure -->
<div id="modall" class="modal">
	<div class="modal-content">
		<h4 class="center-align font yellow-text text-darken-2"><b>TAMBAH BERITA</b></h4>
		<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
	  		<div class="row">
	  		    <?php echo form_open_multipart('Informasi/tambah_aksi'); ?>
	  			<div class="input-field col s12">
				  <input placeholder="Isikan Judul berita anda" id="first_name" type="text" class="validate" name='JUDUL'>
				  <label for="first_name">Judul</label>
				</div>
				<div class="file-field input-field col s12" style="margin-top: 20px;">
				  <label class="label-file-upload">Upload Foto</label>
			      <div class="btn">
			        <span>File</span>
			        <input type="file" name="upload">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate" type="text">
			      </div>
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

  <?php $this->load->view('fragment/script');?>
  <script src="<?php echo base_url();?>assets/plugin/ckeditor/ckeditor.js"></script>



  
  
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

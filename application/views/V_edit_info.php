<div id="modal2" class="modal">
	<div class="modal-content">
		<h4 class="center-align font yellow-text text-darken-2"><b>EDIT BERITA</b></h4>
		<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
	  		<div class="row">
	  		    <?php echo form_open_multipart('Informasi/edit'); ?>
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
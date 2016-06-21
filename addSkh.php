<?php include 'header.php'; ?>
<div class="container">
	<div class="page-header">
		<h1>Add SKH</h1>
	</div>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label for="Tingkat" class="col-sm-2 control-label">Tingkat</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="tingkat" placeholder="KD1" readonly>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="Tema" class="col-sm-2 control-label">Tema</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="Tema" placeholder="Alat Komunikasi" readonly>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="Subject" class="col-sm-2 control-label">Mata Pelajaran</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="subject" placeholder="Bahasa Indonesia" readonly> 
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="Date" class="col-sm-2 control-label">Tanggal</label>
		    <div class="col-sm-3">
		      <input type="text" class="form-control" id="date" placeholder="09-05-2016 s/d 13-05-2016" readonly> 
		    </div>
		  </div>

          <legend>Pertemuan 1</legend>
        <div class="form-group">
            <br/>
            <label for="hasil-belajar" class="col-sm-2 control-label">Hasil Belajar:</label>
            <div class="col-sm-3">
            	<textarea class="form-control" id="hasil_belajar" name="hasil_belajar" rows="5"></textarea>
        	</div>
        </div>
         <div class="form-group">
             <br/>
            <label for="indikator" class="col-sm-2 control-label">Indikator:</label>
            <div class="col-sm-3">
            	<textarea class="form-control" id="indikator" name="indikator" rows="5"></textarea>
        	</div>
        </div>
        <div class="form-group">
            <br/>
            <label for="bidang-pengembangan" class="col-sm-2 control-label">Bidang pengembangan:</label>
            <div class="col-sm-3">
            	<textarea class="form-control" id="bidang-pengembangan" name="bidang-pengembangan" rows="5"></textarea>
            </div>
        </div>
        <div class="form-group">
            <br/>
            <label for="teknik-penilaian" class="col-sm-2 control-label">Teknik Penilaian </label>
            <div class="col-sm-3">
            <div class="checkbox">
                  <label>
                    <input type="checkbox" name="penilaian" value="1"> Unjuk Kerja
                  </label>
            </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="penilaian" value="2">
                    Produk
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="penilaian" value="3">
                    Perilaku/sikap
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="penilaian" value="4">
                    Portfolio
                  </label>
                </div>
			</div>
        </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default col-sm-2">Save as Draft</button>
		      <button type="submit" class="btn btn-default col-sm-offset-2 col-sm-2">Post to Approval</button>
		      <button class="btn btn-default col-sm-2 col-sm-offset-2">Clear</button>
		    </div>
		  </div>

		</form>
</div>
<?php include 'footer.php'; ?>
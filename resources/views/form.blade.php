<form enctype="multipart/form-data">
  <!-- Nama Lengkap -->
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fa fa-address-card"></i></div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>

  <!-- Email -->
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div>

  <!-- No HP -->
  <div class="form-group row">
    <label for="no_hp" class="col-4 col-form-label">Nomor hp</label> 
    <div class="col-8">
      <input id="no_hp" name="no_hp" type="text" class="form-control">
    </div>
  </div>

  <!-- Jurusan -->
  <div class="form-group row">
    <label for="jurusan" class="col-4 col-form-label">Jurusan</label> 
    <div class="col-8">
      <input id="jurusan" name="jurusan" type="text" class="form-control">
    </div>
  </div>

  <!-- Posisi -->
  <div class="form-group row">
    <label for="posisi" class="col-4 col-form-label">Posisi Lamar</label> 
    <div class="col-8">
      <input id="posisi" name="posisi" placeholder="Isi posisi yang tertera di lamaran" type="text" class="form-control">
    </div>
  </div>

  <!-- Upload CV -->
  <div class="form-group row">
    <label for="cv" class="col-4 col-form-label">Upload CV</label> 
    <div class="col-8">
      <input id="cv" name="cv" type="file" class="form-control-file">
    </div>
  </div>

  <!-- Submit -->
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

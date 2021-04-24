<form>
  <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">nip</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nip" name="nip" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">nama pegawai</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Agama</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_0" type="radio" class="custom-control-input" value="Islam" required="required"> 
        <label for="agama_0" class="custom-control-label">Islam</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_1" type="radio" class="custom-control-input" value="Kristen" required="required"> 
        <label for="agama_1" class="custom-control-label">Kristen</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_2" type="radio" class="custom-control-input" value="Hindu" required="required"> 
        <label for="agama_2" class="custom-control-label">Hindu</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_3" type="radio" class="custom-control-input" value="budha" required="required"> 
        <label for="agama_3" class="custom-control-label">Budha</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="agama" id="agama_4" type="radio" class="custom-control-input" value="Konghucu" required="required"> 
        <label for="agama_4" class="custom-control-label">Konghucu</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="divisi" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="divisi" name="divisi" class="custom-select" required="required">
        <option value="1">HRD</option>
        <option value="2">Keuangan</option>
        <option value="3">Operasional</option>
        <option value="4">Marketing</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
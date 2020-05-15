<div class="container">

          <form class="user" method="post" action="<?= base_url('user/editProfile');?>">
            <div class="form-group">
              <input type="text" class="form-control   " id="name" placeholder="Full Name" name="name" value="">
              
            </div>
            <div class="form-group">
              <input type="text" class="form-control   " id="name" placeholder="No KTP" name="noktp" value="">
              
            </div>
            <div class="form-group">
              <input type="text" class="form-control " id="email" placeholder="Email Address" name="email" value="">

            </div>
            <div class="form-group">
              <input type="text" class="form-control " id="tempatlahir" placeholder="Tempat Lahir" name="tempatlahir" value="">
            </div>
            <div class="form-group">
              <input type="date" class="form-control " id="tanggallahir" placeholder="Tanggal Lahir" name="tempatlahir" value="">
            </div>

              <div class="col-xs-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <select name="combo" class="form-control">
                      <option value="">Agama</option>
                      <option value="1">Islam</option>
                      <option value="2">Kristen</option>
                      <option value="3">Hindu</option>
                      <option value="4">Budha</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-xs-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <select name="combo" class="form-control">
                      <option value="">Status Perkawinan</option>
                      <option value="1">Belum Menikah</option>
                      <option value="2">Menikah</option>
                    </select>
                  </div>
                </div>
              </div>
            

            <div class="form-group col-m-5">
              <input type="text" class="form-control " id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan" value="">

            </div>

            <div class="col-xs-12">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <select name="combo" class="form-control">
                      <option value="">Kewarganegaraan</option>
                      <option value="1">WNI</option>
                      <option value="2">WNA</option>
                    </select>
                  </div>
                </div>
              </div>

            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control   " id="password1" name="password1" placeholder="Password" >
             
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control   " id="password2" name="password2" placeholder="Repeat Password">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              SIMPAN
            </button>
          </form>
          <hr>
          </div>
</div>

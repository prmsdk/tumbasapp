<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Portfolio</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>admin/dashboard"><i class="zmdi zmdi-home"></i> TumbasApp</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url()?>admin/master/portfolio">Portfolio</a></li>
                        <li class="breadcrumb-item active">Edit Portfolio</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">
          <div class="row clearfix">
            <div class="col-lg-12">
              <div class="card">
                <div class="header">
                  <h2><strong>Edit</strong> Portfolio </h2>
                </div>

                <div class="body">
                <?php foreach ($portfolio as $port ) { ?>
                  <form action="<?=base_url('admin/master/portfolio/update')?>" method="post">
                    <input type="hidden" name="id" value="<?=$port->id?>">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input value="<?=$port->nama?>" type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama . ." aria-describedby="namaId">
                      <small id="namaId" class="text-muted">Masukkan dengan menggunakan huruf tanpa tanda baca</small>
                    </div>

                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi . ." aria-describedby="deskripsiId"><?=$port->deskripsi?></textarea>
                      <small id="deskripsiId" class="text-muted">Masukkan deskripsi lebih dari 30 karakter</small>
                    </div>

                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input value="<?=$port->harga?>" type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga . ." aria-describedby="hargaId">
                      <small id="hargaId" class="text-muted">Masukkan harga dengan menggunakan angka dan tanpa tanda baca</small>
                    </div>

                    <div class="form-group">
                      <label for="platform">Platform</label>
                      <select id="platform" name="platform" class="form-control show-tick" aria-describedby="platformId">
                          <option value="">-- Please select --</option>
                          <option <?php echo $port->platform == 'WEB' ? "selected" : ""; ?> value="WEB">WEB</option>
                          <option <?php echo $port->platform == 'MOBILE' ? "selected" : ""; ?> value="MOBILE">MOBILE</option>
                          <option <?php echo $port->platform == 'WEB & MOBILE' ? "selected" : ""; ?> value="WEB & MOBILE">WEB & MOBILE</option>
                      </select>
                      <small id="platformId" class="text-muted">Masukkan platform yang anda gunakan pada portfolio.</small>
                    </div>

                    <div class="form-group">
                      <label for="author">Author</label>
                      <input value="<?=$port->author?>" type="text" name="author" id="author" class="form-control" placeholder="Masukkan Nama (nickname) pemilik portfolio sebagai hak cipta karya." aria-describedby="authorId">
                      <small id="authorId" class="text-muted">Masukkan nama pendek atau panggilan anda agar mudah diingat dan mudah dicari.</small>
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="status" id="publish" value="PUBLISH" <?php echo $port->status == 'PUBLISH' ? "checked" : ""; ?>>
                          PUBLISH
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="status" id="draft" value="PUBLISH" <?php echo $port->status == 'DRAFT' ? "checked" : ""; ?>>
                          DRAFT
                        </label>
                      </div>
                    </div>

                    <div class="form-group">
                      <span class="badge badge-success mr-1"><?=$port->status?></span>
                      <span class="badge badge-warning">EXIST</span>
                    </div>

                    <div class="form-group text-center">
                      <input type="submit" value="UPDATE DATA" class="btn btn-primary">
                      <button onclick="window.history.back()" class="btn btn-secondary p-2"><i class="zmdi zmdi-arrow-left"></i></button>
                    </div>
                  </form>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
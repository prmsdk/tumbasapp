<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Jenis Karya</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>admin/dashboard"><i class="zmdi zmdi-home"></i> HakCiptaApp</a></li>
                        <li class="breadcrumb-item active">Jenis Karya</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>                                
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-6 pt-4">
                                    <h2><strong>Data</strong> Jenis Karya </h2>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#largeModal">TAMBAH DATA</button>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $no=1;
                                    foreach ($jenis_karya as $karya ) { ?>
                                        <tr>
                                            <td style="width: 40px;"><?=$no++?>.</td>
                                            <td><?=$karya->nama?></td>
                                            <td><?=$karya->keterangan?></td>
                                            <td style="width: 70px;">
                                                <a class="btn btn-primary btn-sm px-2" href="<?=base_url()?>admin/jenis_karya/edit/<?=$karya->id?>"><i class="zmdi zmdi-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" href="<?=base_url()?>admin/jenis_karya/delete/<?=$karya->id?>"><i class="zmdi zmdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <form action="<?=base_url('admin/jenis_karya/save')?>" method="post">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Tambah Data</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama . ." aria-describedby="namaId">
                    <small id="namaId" class="text-muted">Masukkan dengan menggunakan huruf tanpa tanda baca</small>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi . ." aria-describedby="deskripsiId"></textarea>
                    <small id="deskripsiId" class="text-muted">Masukkan deskripsi lebih dari 30 karakter</small>
                </div>

                <div class="form-group">
                    <label for="kat_id">Kategori</label>
                    <select id="kat_id" name="kat_id" class="form-control show-tick" aria-describedby="kategoriId">
                        <option value="">-- Please select --</option>
                        <?php foreach ($port_kat as $kat ) { ?>
                            <option value="<?=$kat->id?>"><?=$kat->nama?></option>
                        <?php }?>
                    </select>
                    <small id="kategoriId" class="text-muted">Pilih kategori sesuai jenis portfolio.</small>
                </div>

                <div class="form-group">
                    <label for="fitur_id">Fitur</label>
                    <div class="row ">
                    <?php foreach ($port_fitur as $fitur ) { ?>
                        <div class="checkbox col-md-6">
                            <input id="<?=$fitur->id?>" name="id_fitur[]" type="checkbox">
                            <label for="<?=$fitur->id?>">
                                <?=$fitur->nama?>
                            </label>
                        </div>
                    <?php }?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga . ." aria-describedby="hargaId">
                    <small id="hargaId" class="text-muted">Masukkan harga dengan menggunakan angka dan tanpa tanda baca</small>
                </div>

                <div class="form-group">
                    <label for="platform">Platform</label>
                    <select id="platform" name="platform" class="form-control show-tick" aria-describedby="platformId">
                        <option value="">-- Please select --</option>
                        <option value="WEB">WEB</option>
                        <option value="MOBILE">MOBILE</option>
                        <option value="WEB & MOBILE">WEB & MOBILE</option>
                    </select>
                    <small id="platformId" class="text-muted">Pilih platform yang anda gunakan pada portfolio.</small>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" id="author" class="form-control" placeholder="Masukkan nama author . ." aria-describedby="authorId">
                    <small id="authorId" class="text-muted">Masukkan nama pendek atau panggilan anda agar mudah diingat dan mudah dicari.</small>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="publish" value="PUBLISH">
                        PUBLISH
                    </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="status" id="draft" value="PUBLISH">
                        DRAFT
                    </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
            </form>
        </div>
    </div>
</div>
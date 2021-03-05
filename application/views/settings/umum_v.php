<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title text-primary"><?= ($judul) ? $judul : ''; ?></h3>
                            <div class="nk-block-des text-soft">
                                <p>Silahkan melihat atau mengelola data di <?= ($judul) ? $judul : ''; ?></p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li><a href="#" class="btn  btn-primary"><em class="icon ni ni-plus-circle"></em><span> Tambah Data</span></a></li>

                                    </ul>
                                </div><!-- .toggle-expand-content -->
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <div class="table-responsive">
                                        <table id="table" class="table table-striped table-bordered" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No.</th>
                                                    <th class="text-center">Nama Instansi</th>
                                                    <th class="text-center">Nama Unit</th>
                                                    <th class="text-center">TTD Kota</th>
                                                    <th class="text-center">Provinsi</th>
                                                    <th class="text-center">Alamat</th>
                                                    <th class="text-center">Telepon</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0; foreach($umum as $u) : ?>
                                                    <tr>
                                                        <td class="text-center"><?= ++$no ?></td>
                                                        <td class="text-center"><?= $u['pengaturan_nama_biro'] ?></td>
                                                        <td class="text-center"><?= $u['pengaturan_nama_pemerintahan'] ?></td>
                                                        <td class="text-center"><?= $u['pengaturan_ibukota'] ?></td>
                                                        <td class="text-center"><?= $u['wilayah_nama'] ?></td>
                                                        <td class="text-center"><?= $u['pengaturan_alamat'] ?></td>
                                                        <td class="text-center"><?= $u['pengaturan_alamat2'] ?></td>
                                                        <td class="text-center">
                                                            <button class="btn btn-warning btn-xs btn-edit" data-id="<?= $u['pengaturan_id'] ?>" title="Ubah Data">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div><!-- .card-preview -->
                        </div><!-- .col -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content @e -->


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mdoal">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-data">
            <input type="hidden" id="pengaturan_id" name="pengaturan_id" />
            <input type="hidden" id="bagian_id" name="bagian_id" />
         
            <div class="form-group row">
               <label for="pengaturan_nama_pemerintahan" class="col-md-3 col-form-label">Nama Unit</label>
               <div class="col-md-9">
                  <input type="text" class="form-control" id="pengaturan_nama_pemerintahan" placeholder="Nama Unit" name="pengaturan_nama_pemerintahan" required />
               </div>
            </div>
            <div class="form-group row">
               <label for="alamat_ttd" class="col-md-3 col-form-label">Kota TTD</label>
               <div class="col-md-9">
                  <input type="text" class="form-control" id="alamat_ttd" placeholder="Kota TTD" name="alamat_ttd" required />
               </div>
            </div>
            <div class="form-group row">
               <label for="provinsi" class="col-md-3 col-form-label">Provinsi</label>
               <div class="col-md-9 col-select">
                  <select id="provinsi" name="provinsi" class="form-control">
                     <option value="">Cari Provinsi</option>

                     <?php foreach($provinces as $province) : ?>
                        <option value="<?= $province['wilayah_id'] ?>"><?= $province['wilayah_nama'] ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
               <div class="col-md-9">
                  <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="(Contoh: Jl. Ridwan Rais No. 5 Gambir, Jakarta Pusat)"></textarea>
               </div>
            </div>
            <div class="form-group row">
               <label for="telepon" class="col-md-3 col-form-label">No. Telepon</label>
               <div class="col-md-9">
                  <input type="text" class="form-control" id="telepon" placeholder="No. Telepon" name="telepon" required />
               </div>
            </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary save" id="submit">
            <i class="fa fa-save"></i> SIMPAN
        </button>
      </div>
    </div>
  </div>
</div>
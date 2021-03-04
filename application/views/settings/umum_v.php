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
                                        <table id="tbl_role" class="table table-striped table-bordered" style="width: 100%;">
                                            <thead></thead>
                                            <tbody></tbody>
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
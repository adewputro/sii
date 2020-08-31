

    <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Buku
                            </h2>
                            </br>
                            <a href="<?php echo base_url('index.php/buku/tambah_buku') ?>" class="btn btn-primary waves-effect">Tambah Buku</a>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>No Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Nama Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Tahun Penerbit</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Nama Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Tahun Penerbit</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                   <?php foreach($datab as $i){ ?>
                                    <tr>
                                        <td><?= $i->no_buku ?></td>
                                        <td><?= $i->judul_buku ?></td>
                                        <td><?= $i->nam_peng ?></td>
                                        <td><?= $i->penerbit ?></td>
                                        <td><?= $i->isbn ?></td>
                                        <td><?= $i->tahun ?></td>
                                        <td><a href="#"> <i class="material-icons">delete</i></a> <a href="#"> <i class="material-icons">create</i></a></td>

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
    </section>


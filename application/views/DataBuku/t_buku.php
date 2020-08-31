

    <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Buku
                            </h2>
                            </br>
                           
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
                          <form method="post" action="<?php echo base_url('index.php/buku/tb_buku')?>" > 
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="No Buku" name="no">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Judul Buku" name="judul">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Penerbit" name="penerbit">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nama Penerbit" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="ISBN" name="isbn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Tahun Penerbit" name="tahun">
                                        </div>
                                    </div>
                                  
                                    <button class="btn btn-primary waves-effect"> Simpan</button>
                                </div>
                            </div>
                        </form> 
                        
                       
                      
                       
                      
                       
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


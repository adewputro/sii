

    <section class="content">
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Siswa
                            </h2>
                            
                            
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
                        <form method="post" action="<?php echo base_url('index.php/siswa/tb_siswa')?>" > 
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jk">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="Date" class="form-control" placeholder="Tanggal Lahir" name="tgl">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Agama" name="agama">
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


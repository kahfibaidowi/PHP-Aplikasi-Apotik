<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Selamat datang di halaman administrator apotik sifa
                        </div>
                    </div>
                </div>
                <div class="row">
            <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-one">
                            
                                <span class="fa fa-user-md"></span>
                                 <h5><?=$control_box[0]?> Pegawai</h5>
                            
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-two">
                            
                                <span class="fa fa-cubes"></span>
                                 <h5><?=$control_box[1]?> Jenis Obat</h5>
                            
                        </div>
                        </div>
             <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-three">
                            
                                <span class="fa fa-shopping-cart"></span>
                                 <h5><?=$control_box[2]?> Total Transaksi</h5>
                            
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-four">
                            
                                <span class="fa fa-cart-plus"></span>
                                <h5><?=$control_box[3]?> Transaksi Hari Ini</h5>
                            
                        </div>
                        </div>      
            </div>
            <div class="row">
            <div class=" col-md-5 col-sm-5">
                <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width='40'>#</th>
                                        <th colspan='2'>Informasi Login</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>1</td>
                                        <td width='150'>Username/NIP</td>
                                        <td><?=get_admin("nip")?></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nama Lengkap</td>
                                        <td><?=get_admin("nama_lengkap")?></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Level</td>
                                        <td><?=ucwords(get_admin("level"))?></td>
                                    </tr>
                                   
                                    <tr>
                                        <td>4</td>
                                        <td>Terakhir Login</td>
                                        <td><?=get_admin("last_login")?></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Status</td>
                                        <td><span class='label label-success'>Aktif</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                <div class="alert  alert-info">
                    <div class="current-notices">

                            <h3>Current Notices :</h3>
                    <hr />
                    <ul>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                    </ul>
                        </div>
                        </div>

                        </div>
              
             
              <div class=" col-md-7 col-sm-7">
                  <div class="list-group">
                            <a href="#" class="list-group-item active">
                                <h4 class="list-group-item-heading">List Group Heading</h4>
                                <p class="list-group-item-text" style="line-height: 30px;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </a>
                        </div>
                  <br />
                <h2> Bootstrap Media Objects</h2>
                    <br />

                    <div class="media">
      <a class="media-left" href="#">
          <img src="assets/img/1.jpg" alt="" class="img-rounded" />
      </a>
      <div class="media-body">
        <h4 class="media-heading">Media heading </h4>
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
      </div>
    </div>
    <div class="media">
      <a class="media-left" href="#">
          <img src="assets/img/2.jpg" alt="" class="img-rounded" />
      </a>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
       Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
        <div class="media">
          <a class="media-left" href="#">
              <img src="assets/img/1.jpg" alt="" class="img-rounded" />
          </a>
          <div class="media-body">
            <h4 class="media-heading">Nested media heading</h4>
           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
          </div>
        </div>
      </div>
    </div>
    
          
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php get_footer() ?> 
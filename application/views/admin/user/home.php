<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">USER ACCOUNT</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div style='margin-bottom:20px'>
                            <div style='float:right'>
                                <span style='float:left;margin-top:5px'>Pencarian : </span><input type='text' class='form-control' style='width:200px;float:right;margin-left:15px;margin-bottom:-5px'>
                            </div>
                        <div class='clearfix'></div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width='100'>Nip</th>
                                    <th width='220'>Nama Lengkap</th>
                                    <th width='150'>Jabatan</th>
                                    <th width='270'>Login Terakhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $user) : ?>
                                    <tr>
                                        <td><?=$user['nip']?></td>
                                        <td><?=$user['nama_lengkap']?></td>
                                        <td><?=$user['level']?></td>
                                        <td><?=ubah_tglwaktu($user['last_login'])?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- paging -->
                        <div>
                            <?=$pagination?>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php
    $js = [
    ];
?>

<?php get_footer($js) ?>

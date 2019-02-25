<?php get_header() ?>
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Pengaturan</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class=""><a href="<?=base_url()."admin/setting/"?>">General</a>
                            </li>
                            <li class="active"><a href="#">Backup Data</a>
                            </li>
                            <li class=""><a href="<?=base_url()."admin/setting/restore/"?>">Restore Data</a>
                            </li>
                        </ul>

                        <div class="col-md-6">
                            <form style="margin-top:30px" action='<?=base_url()."admin/setting/go_backup/"?>' method='post'>
                                <table class="table">
                                    <tr>
                                        <td style='border-top:none' width='50'><input type='checkbox' name='tables[]' value='tb_pegawai' checked></td>
                                        <th style='border-top:none'><span class='table-center'>Data Pegawai</span></th>
                                    </tr>
                                    <tr>
                                        <td><input type='checkbox' name='tables[]' value='tb_obat' checked></td>
                                        <th><span class='table-center'>Data Obat</span></th>
                                    </tr>
                                    <tr>
                                        <td><input type='checkbox' name='tables[]' value='tb_transaksi' checked></td>
                                        <th><span class='table-center'>Data Transaksi</span></th>
                                    </tr>
                                </table>

                                <hr>
                                <button type='submit' class='btn btn-info'>Backup Database</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
<?php
    $js = [
        base_url()."assets/js-module/pegawai/datatable.js"
    ];
?>

<?php get_footer($js) ?>

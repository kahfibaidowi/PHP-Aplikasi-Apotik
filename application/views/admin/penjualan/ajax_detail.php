<table class='table' style='background:#eee'>
    <tr>
        <th width='150' style='border:none'>ID Transaksi</th><td style='border:none'>: <?=str_pad($data['id_transaksi'], 7, "0", STR_PAD_LEFT)?></td>
        <th width='150' style='border:none'>Pegawai/Admin</th><td style='border:none'>: <?=$data['admin']?></td>
    </tr>
    <tr>
        <th>Tanggal</th><td>: <?=$data['tgl_transaksi']?></td>
        <th>Pembeli</th><td>: <?=$data['pembeli']?></td>
    </tr>
</table>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th width='130'>ID Obat</th>
        <th width='300'>Obat</th>
        <th width='100'>QTY</th>
        <th width='150'>Harga</th>
        <th>Sub Total</th>
    </tr>
    </thead>
    
    <tbody>
    <?php $total = 0 ?>
    <?php foreach($detail as $item) : ?>
    
    <tr>
        <td><?=$item['id_obat']?></td>
        <td><?=$item['nama_obat']?></td>
        <td><?=$item['qty']?></td>
        <td><?=$item['harga']?></td>
        <td><?=$item['jumlah']?></td>
    </tr>
    <?php $total += $item['harga']*$item['qty'] ?>
    <?php endforeach ?>
    <tr>
        <td colspan='3'></td>
        <th style='font-size:20px;padding-top:30px'>Total</th>
        <th style='font-size:20px;padding-top:30px'><?=$total?></th>
    </tr>
    </tbody>
</table>
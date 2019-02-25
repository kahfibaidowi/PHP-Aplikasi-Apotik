<!doctype html>
<html>
<head>
<title>Struk Transaksi</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700|Roboto:400,400i,500,700' rel='stylesheet'>
<style>
body{
    font-family:"Roboto", sans-serif;
    font-size:13px;
}
</style>
</head>
<body onLoad='window.print()'>
<div style='width:380px;margin:0 auto;padding:15px;background:#f5f5f5'>
    <div style='text-align:center'>
        <span style='font-size:20px;font-weight:bold'><?=conf_setting("nama")?></span>
        <p><?=conf_setting("alamat")?></p>
    </div>
    <div style='margin-top:30px'>
        <table cellpadding='3' style='text-align:left'>
            <tr>
                <th>Kode TRS</th><td width='120'> : <?=str_pad($data['id_transaksi'], 7, "0", STR_PAD_LEFT)?></td>
                <th>Admin</th><td width='120'> : <?=$data['admin']?></td>
            </tr>
            <tr>
                <th>Tgl TRS</th><td> : <?=$data['tgl_transaksi']?></td>
                <th>Pembeli</th><td> : <?=$data['pembeli']?></td>
            </tr>
        </table>
    </div>
    <hr style='border:1px solid #ccc'>
    <div style='margin-top:30px'>
        <table style='border-collapse:collapse;width:100%' cellpadding='3'>
            <?php $total = 0 ?>
            <?php foreach($detail as $item) : ?>
            <tr>
                <td><?=$item['id_obat']?> &nbsp; <?=$item['nama_obat']?></td>
                <td></td>
                <td><?=$item['qty']?> &nbsp; <?=$item['harga']?></td>
                <td><?=$item['jumlah']?></td>
            </tr>
            <?php $total += $item['jumlah' ]?>
            <?php endforeach ?>
        </table>
    </div>
    <hr style='border:1px solid #ccc'>
    <span style='float:right;font-size:18px;font-weight:bold'>
        Total : <?=$total?>
    </span>
    <br><br><br>
    <div style='margin-top:30px;text-align:center;width:100%'>
        *Item yang sudah dibeli tidak bisa dikembalikan
    </div>
</div>
<div style='margin:0 auto;text-align:center;margin-top:10px'>
<button onClick='window.print()'>Cetak</button>
</div>
</div>
</html>
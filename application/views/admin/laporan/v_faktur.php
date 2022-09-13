<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Koperasi</title>
    <link rel="short icon" href="<?php echo base_url().'assets2/images/logo.png'?>" type="image/png" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:700px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<table border="0" align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    
</tr>
                       
</table>
<?php 
    foreach ($data->result_array() as $b);
?>
<table border="0" align="center" style="width:700px;border:none;">
        <tr>
            <th style="text-align:left;">No Faktur</th>
            <th style="text-align:left;">: <?php echo $b['id_trans'];?></th>
            <th style="text-align:left;">Total</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['total_trans']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Tanggal</th>
            <th style="text-align:left;">: <?php echo date("d F Y");?></th>
            <th style="text-align:left;">Tunai</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['uang_trans']).',-';?></th>
        </tr>
        <tr>
            <th style="text-align:left;">Keterangan</th>
            <th style="text-align:left;">: Lunas</th>
            <th style="text-align:left;">Kembalian</th>
            <th style="text-align:left;">: <?php echo 'Rp '.number_format($b['kembalian_trans']).',-';?></th>
        </tr>
</table>
<br>
<table border="1" align="center" style="width:700px;margin-bottom:20px;">
<thead>

    <tr>
        <th style="width:50px;">No</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>SubTotal</th>
    </tr>
</thead>
<tbody>
<?php 
$no=0;
    foreach ($data->result_array() as $i) {
        $no++;
        
        $nabar=$i['nama_brg'];
        
        $harga=$i['harga_dtrans'];
        $qty=$i['jml_dtrans'];
        $total=$i['total_dtrans'];
?>
    <tr>
        <td style="text-align:center;"><?php echo $no;?></td>
        <td style="text-align:left;"><?php echo $nabar;?></td>
        <td style="text-align:center;"><?php echo $qty;?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($harga);?></td>
        <td style="text-align:right;"><?php echo 'Rp '.number_format($total);?></td>
    </tr>
<?php }?>
</tbody>
<tfoot>

    <tr>
        <td colspan="4" style="text-align:center;"><b>Total</b></td>
        <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['total_trans']);?></b></td>
    </tr>
</tfoot>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:700px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <th><br/><br/></th>
    </tr>
    <tr>
        <th align="left"></th>
    </tr>
</table>
</div>
</body>
</html>
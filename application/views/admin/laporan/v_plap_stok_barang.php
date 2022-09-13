<html lang="en" moznomarginboxes mozdisallowselectionprint>
<head>
    <title>Koperasi</title>
    <link rel="short icon" href="<?php echo base_url().'assets2/images/logo.png'?>" type="image/png" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css')?>"/>
</head>
<body onload="window.print()">
<div id="laporan">
<table align="center" style="width:900px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
<!--<tr>
    <td><img src="<?php// echo base_url().'assets/img/kop_surat.png'?>"/></td>
</tr>-->
</table>

<table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:0px;">
<tr>
    <td colspan="2" style="width:800px;paddin-left:20px;"><center><h1>LAPORAN STOK BARANG</h1></center><br/></td>
</tr>
                       
</table>
 
<table border="0" align="center" style="width:900px;border:none;">
        <tr>
            <th style="text-align:left"></th>
        </tr>
</table>

<table border="1" align="center" style="width:900px;margin-bottom:20px;">
<thead>
                                    <tr>
                                        <th style="text-align:center;">No</th>
                                        <th style="text-align:center;">Kode Barang</th>
                                        <th style="text-align:center;">Nama Barang</th>
                                        <th style="text-align:center;">Kategori</th>
                                        <th style="text-align:center;">Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no=0;
                                    foreach ($data->result_array() as $i) {
                                        $no++;
                                        $barang_id=$i['kode_brg'];
                                        $barang_nama=$i['nama_brg'];
                                        $barang_kat=$i['nama_kat'];
                                        $barang_qty=$i['qty_brg'];
                                ?>
                                    <tr>
                                        <td style="text-align:center;"><?php echo $no;?></td>
                                        <td style="text-align:center;"><?php echo $barang_id;?></td>
                                        <td style="text-align:left;"><?php echo $barang_nama;?></td>
                                        <td style="text-align:left;"><?php echo $barang_kat;?></td>
                                        <td style="text-align:center;"><?php echo $barang_qty;?></td>
                                    </tr>
                                <?php }?>
                                </tbody>
                                <tfoot>
                                <?php 
                                    $b=$jml->row_array();
                                ?>
                                    <tr>
                                        <td colspan="4" style="text-align:center;"><b>Total</b></td>
                                        <td style="text-align:center;"><b><?php echo $b['total'];?></b></td>
                                    </tr>
                                </tfoot>
</table>

</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
    <tr>
        <td></td>
</table>
<table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
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
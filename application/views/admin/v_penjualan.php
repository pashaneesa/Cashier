<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">

     <title>Koperasi</title>
     <link rel="short icon" href="<?php echo base_url().'assets2/images/logo.png'?>" type="image/png" />
        <link type="text/css" href="<?php echo base_url().'assets2/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets2/bootstrap/css/bootstrap-responsive.min.css'?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets2/css/theme.css'?>" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url().'assets2/images/icons/css/font-awesome.css'?>" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    <style type="text/css">

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .5;
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.modal-header:after,
.modal-footer:after {
  clear: both;
}

.section-modal .modal-content {
    padding: 100px 0 !important;
    min-height: 100%;
    border: 0 !important;
    border-radius: 0;
    background-clip: border-box;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
    color: #888;
    font-weight: 300;
}



.section-modal .close-modal {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 75px;
    height: 75px;
    background-color: transparent;
    cursor: pointer;
}

.section-modal .close-modal:hover {
    opacity: .3;
}

.section-modal .close-modal .lr {
    z-index: 1051;
    width: 1px;
    height: 75px;
    margin-left: 35px;
    background-color: #222;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.section-modal .close-modal .lr .rl {
    z-index: 1052;
    width: 1px;
    height: 75px;
    background-color: #222;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
    </style>
</head>

<body>

   <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url().'welcome'?>">Koperasi </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">             
                        <ul class="nav pull-right">
                      
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="icon-user"></div>
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url().'welcome/profil'?>">Your Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url().'administrator/logout'?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>

    <!-- Page Content -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo base_url().'welcome'?>"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="<?php echo base_url().'admin/barang'?>"><i class="menu-icon icon-inbox"></i>Stok Barang </a>
                                </li>
                                <li><a href="<?php echo base_url().'admin/penjualan'?>"><i class="menu-icon icon-shopping-cart"></i>Transaksi </a>
                                </li>
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-bar-chart">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Laporan </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo base_url().'admin/lapbarang'?>"><i class="icon-inbox"></i>Stok Barang </a></li>
                                        <li><a href="<?php echo base_url().'admin/laptransaksi'?>"><i class="icon-shopping-cart"></i>Transaksi </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--/.widget-nav-->
                                                       
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?php echo base_url().'welcome/profil'?>"><i class="menu-icon icon-user"></i>Profil </a></li>
                                <li><a href="<?php echo base_url().'administrator/logout'?>"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                </div>

                <div class="span9">
                     <div class="content">
                         <img style="margin-left:auto;margin-right:auto;display:block;width:130px;" src="<?php echo base_url().'assets2/images/logo.png'?>" alt="gambar"/>
                          <h1><center>Transaksi</center></h1>
                          <br>
                            <div class="module">
                                <div class="module-body">
                                     <a href="#" data-toggle="modal" data-target="#largeModal" class="pull-right btn btn-info"><small>Cari Produk!</small></a>
                                     <center><?php echo $this->session->flashdata('msg');?></center>
                                    
                                    <form action="<?php echo base_url().'admin/penjualan/add_to_cart'?>" method="post">
                                        <div class="control-group">
                                            <table>
                                                <tr>
                                                    <td><label class="control-label" for="basicinput">Kode Barang</label></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="controls">
                                                        <input type="text" name="kode_brg" id="kode_brg" placeholder="Masukkan Kode Barang..." class="span8" style="width: 300px">
                                                        </div>
                                                    </td>
                                                </tr>                                          
                                            </table>
                                            <div id="detail_barang" style="position:absolute;"></div>
                                        </div>
                                    </form>
                                    <br><br><br><br>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th style="text-align:center;">Kategori</th>
                                                <th style="text-align:center;">Qty</th>
                                                <th style="text-align:center;">Harga(Rp)</th>
                                                <th style="text-align:center;">Sub Total</th>
                                                <th style="width:100px;text-align:center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($this->cart->contents() as $items): ?>
                                            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                                            <tr>
                                                 <td><?=$items['id'];?></td>
                                                 <td><?=$items['name'];?></td>
                                                 <td style="text-align:center;"><?=$items['kategori'];?></td>
                                                 <td style="text-align:center;"><?php echo number_format($items['qty']);?></td>
                                                 <td style="text-align:right;"><?php echo number_format($items['amount']);?></td>                        
                                                 <td style="text-align:right;"><?php echo number_format($items['subtotal']);?></td>
                                                
                                                 <td style="text-align:center;"><a href="<?php echo base_url().'admin/penjualan/remove/'.$items['rowid'];?>" class="btn btn-danger btn-xs"><span class="fa fa-close"></span> Batal</a></td>
                                            </tr>
                                            
                                            <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <br>
                                    <form action="<?php echo base_url().'admin/penjualan/simpan_penjualan'?>" method="post">
                                    <table>
                                        <tr>
                                            <td style="width:760px;" rowspan="2"><button type="submit" class="btn btn-info btn-lg"> Simpan</button></td>
                                            <th style="width:140px;">Total Belanja(Rp)</th>
                                            <th style="text-align:right;width:140px;"><input type="text" name="total2" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly></th>
                                            <input type="hidden" id="total" name="total" value="<?php echo $this->cart->total();?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly>
                                        </tr>
                                        <tr>
                                            <th>Tunai(Rp)</th>
                                            <th style="text-align:right;"><input type="text" id="jml_uang" name="jml_uang" class="jml_uang form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                                            <input type="hidden" id="jml_uang2" name="jml_uang2" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <th>Kembalian(Rp)</th>
                                            <th style="text-align:right;"><input type="text" id="kembalian" name="kembalian" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" required></th>
                                        </tr>

                                    </table>
                                    </form>
                                </div>

                            </div>
                     </div>
                </div>

                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true" style="margin-left: 300px; margin-top: -20px; width: 800px; height: 500px">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title" id="myModalLabel">Data Barang</h3>
                </div>
                    <div class="modal-body" style="overflow:scroll;height:500px;">

                      <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align:center;">No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no=0;
                            foreach ($data->result_array() as $a):
                                $no++;
                                $id=$a['kode_brg'];
                                $nm=$a['nama_brg'];
                                $kat=$a['nama_kat'];
                                $stok=$a['qty_brg'];
                                $harga=$a['harga_brg'];
                        ?>
                            <tr>
                                <td style="text-align:center;"><?php echo $no;?></td>
                                <td><?php echo $id;?></td>
                                <td><?php echo $nm;?></td>
                                <td><?php echo $kat;?></td>
                                <td style="text-align:center;"><?php echo $stok;?></td>
                                <td style="text-align:right;"><?php echo 'Rp '.number_format($harga);?></td>
                                <td style="text-align:center;">
                                <form action="<?php echo base_url().'admin/penjualan/add_to_cart'?>" method="post">
                                <input type="hidden" name="kode_brg" value="<?php echo $id?>">
                                <input type="hidden" name="nama_brg" value="<?php echo $nm;?>">
                                <input type="hidden" name="kat_brg" value="<?php echo $kat;?>">
                                <input type="hidden" name="stok_brg" value="<?php echo $stok;?>">
                                <input type="hidden" name="harga_brg" value="<?php echo number_format($harga);?>">
                                <input type="hidden" name="qty" value="1" required>
                                    <button type="submit" class="btn btn-xs btn-info" title="Pilih"><span class="fa fa-edit"></span> Pilih</button>
                                </form>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>          

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>    
    </div>
            <!--/.container-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2021 </b>All rights reserved.
            </div>
        </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/bootstrap-select.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.price_format.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap-datetimepicker.min.js'?>"></script>
        <script src="<?php echo base_url().'assets2/scripts/datatables/jquery.dataTables.js'?>" type="text/javascript"></script>
        
    <script type="text/javascript">
        $(function(){
            $('#jml_uang').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_uang').val();
                var hsl=jumuang.replace(/[^\d]/g,"");
                $('#jml_uang2').val(hsl);
                $('#kembalian').val(hsl-total);
            })
            
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mydata').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(function(){
            $('.jml_uang').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('#jml_uang2').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ''
            });
            $('#kembalian').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
            $('.harjul').priceFormat({
                    prefix: '',
                    //centsSeparator: '',
                    centsLimit: 0,
                    thousandsSeparator: ','
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#kode_brg").focus();
            $("#kode_brg").on("input",function(){
                var kobar = {kode_brg:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'admin/penjualan/get_barang';?>",
               data: kobar,
               success: function(msg){
               $('#detail_barang').html(msg);
               }
            });
            }); 

            $("#kode_brg").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
    </script>

    <script type="text/javascript">
      $(document).ready(function () {
    if($('.datatable-1').length>0){
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass('btn-group datatable-pagination');
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    
        $( '.slider-range').slider({
          range: true,
          min: 0,
          max: 20000,
          values: [ 3000, 12000 ],      
          slide: function(event, ui) {
            $(this).find('.ui-slider-handle').attr('title', ui.value);
          },
      });
  
        $( '#amount' ).val( '$' + $( '.slider-range' ).slider( 'values', 0 ) + ' - $' + $( '.slider-range' ).slider( 'values', 1 ) );
    

    //Graph/Chart index.html

    var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
    var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

    var plot = $.plot($('#placeholder2'),
         [ { data: d1, label: 'Profits'}, { data: d2, label: 'Expenses' } ], {
          lines: {
            show: true,
            fill: true, /*SWITCHED*/
            lineWidth: 2
          },
          points: {
            show: true,
            lineWidth: 5
          },
          grid: {
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 10,
            aboveData: true,
            backgroundColor: '#fff',
            borderWidth: 0,
            minBorderMargin: 25,
          },
          colors: [ '#55f3c0', '#0db37e',  '#b4fae3', '#e0d1cb'],
          shadowSize: 0
         });

    function showTooltip(x, y, contents) {
      $('<div id="gridtip">' + contents + '</div>').css( {
        position: 'absolute',
        display: 'none',
        top: y + 5,
        left: x + 5
      }).appendTo('body').fadeIn(300);
    }

    var previousPoint = null;
    $('#placeholder2').bind('plothover', function (event, pos, item) {
      $('#x').text(pos.x.toFixed(2));
      $('#y').text(pos.y.toFixed(2));

      if (item) {
        if (previousPoint != item.dataIndex) {
          previousPoint = item.dataIndex;

          $('#gridtip').remove();
          var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0);

          showTooltip(item.pageX, item.pageY,
                'x : ' + x + '&nbsp;&nbsp;&nbsp; y : ' + y);
        }
      }
      else {
        $('#gridtip').remove();
        previousPoint = null;
      }
    });
    }

    else
    {
        var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
    var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

    var plot = $.plot($("#placeholder"), 
    [ { data: d1, label: "Data A" }, { data: d2, label: "Data B" } ], {
      lines: { 
        show: true, 
        fill: false, 
        lineWidth: 2 
      },
      points: { 
        show: true, 
        lineWidth: 5 
      },
      grid: {
        clickable: true,
        hoverable: true,
        autoHighlight: true,
        mouseActiveRadius: 10,
        aboveData: true,
        backgroundColor: "#fafafa",
        borderWidth: 0,
        minBorderMargin: 25,
      },
      colors: [ "#090", "#099",  "#609", "#900"],
      shadowSize: 0
    });

        var d1 = [ [0, 1], [1, 14], [2, 5], [3, 4], [4, 5], [5, 1], [6, 14], [7, 5],  [8, 5] ];
    var d2 = [ [0, 5], [1, 2], [2, 10], [3, 1], [4, 9],  [5, 5], [6, 2], [7, 10], [8, 8] ];

    var plot = $.plot($("#placeholder2"),
         [ { data: d1, label: "Data Y"}, { data: d2, label: "Data X" } ], {
          lines: { 
            show: true, 
            fill: true, /*SWITCHED*/
            lineWidth: 2 
          },
          points: { 
            show: true, 
            lineWidth: 5 
          },
          grid: {
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 10,
            aboveData: true,
            backgroundColor: "#fafafa",
            borderWidth: 0,
            minBorderMargin: 25,
          },
          colors: [ "#090", "#099",  "#609", "#900"],
          shadowSize: 0
         });

    function showTooltip(x, y, contents) {
      $('<div id="gridtip">' + contents + '</div>').css( {
        position: 'absolute',
        display: 'none',
        top: y + 5,
        left: x + 5
      }).appendTo("body").fadeIn(300);
    }

    var previousPoint = null;
    $("#placeholder2").bind("plothover", function (event, pos, item) {
      $("#x").text(pos.x.toFixed(2));
      $("#y").text(pos.y.toFixed(2));

      if (item) {
        if (previousPoint != item.dataIndex) {
          previousPoint = item.dataIndex;
          
          $("#gridtip").remove();
          var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0);
          
          showTooltip(item.pageX, item.pageY,
                "x : " + x + "&nbsp;&nbsp;&nbsp; y : " + y);
        }
      }
      else {
        $("#gridtip").remove();
        previousPoint = null;            
      }
    });

          // PREDEFINED DATA
        var data = [
            { label: "Series1", data: [[1, 10]] },
            { label: "Series2", data: [[1, 30]] },
            { label: "Series3", data: [[1, 90]] }
          ];

        // DEFAULT
        $.plot($("#pie-default"), data,
    {
        series: {
            pie: {
                show: true
            }
        }
    });

        // DEFINE ACTIONS FOR pieHover & pieClick
        function pieHover(event, pos, obj) {
            if (!obj)
                return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            $("#hover").html('<span>' + obj.series.label + ' - ' + percent + '%</span>');
        }

        function pieClick(event, pos, obj) {
            if (!obj)
                return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            alert('' + obj.series.label + ': ' + percent + '%');
        }

        // DONUT
        $.plot($("#pie-donut"), data,
    {
        series: {
            pie: {
                innerRadius: 50,
                show: true
            }
        }
    });

        // DONUT + INTERACTIVE
        $.plot($("#pie-interactive"), data,
    {
        series: {
            pie: {
                innerRadius: 50,
                show: true
            }
        },
        grid: {
            hoverable: true,
            clickable: true
        }
    });

        $("#pie-interactive").bind("plothover", pieHover);
        $("#pie-interactive").bind("plotclick", pieClick);
    }
});
    </script>
    
    
</body>

</html>

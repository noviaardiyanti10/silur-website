<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SILUR</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
      <!--formden.js akan membuat output data AJAX-->
    <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
    <!-- bootstrap-iso digunakan untuk mengatur tampilan -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <!--Menambahkan libray font awesome karena kita menggunakan ikon untuk tampilannya-->
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
      
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/datatables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="assets/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <style>
		.header{background:#eb9046; color:#fff;}
		#main-content{ background:#fff;}
		#hidden {display:none}
	  </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <style>
      body{background:#fff; }
    </style>
	<section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
        <!--logo start-->
        <a href="index.php" class="logo"><b style="margin-left: 70px; font-size: 25px;">SILUR</b></a>
        <!--logo end-->
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" onclick="javascript: return confirm('Ingin Logout ?');" href="logout.php">Logout</a></li>
            </ul>
        </div>
       </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <div class="container mt-4" style="padding-top: 100px;">
        <div class="row">
          <div class="col-md-9 mt-4">
               <div class="card-box" id="picture">
                <img src="assets/img/slide22.jpg" style="width: 700px; height: 400px;" class="card-img-top" alt="...">
               </div>
            
               <div class="card-box" id="picture">
         
                <div class="card-header" style="font-weight: bold; font-size: 20px; width: 700px;">Deskripsi Produk</div>
                <div style="border-top: 6px double #eb9046; margin-top: 1em; padding-top: 1em;"></div>
                  <ul class="list-group list-group-flush" style="font-size: 17px; color: black; font-family: sans-serif;">
                    <li>Stok : 1000 btr</li>
                    <li>Jual grosir dan ecera</li>
                    <li>Punjungan, Pupuan, Tabanan</li>
                  </ul>
              </div>
          </div>
          <div class="col-md-3 mt-4" style="padding-left: 0px;">
            <div class="card-box" id="right" style="height: 160px;">
              <h3  class="mt-2 ml-4 text-danger" style="font-weight: bold;">Rp. 3.000,00 / btr</h3>
              <p class="text-secondary" style="font-weight: bold; font-size: 20px;">Telur Pak Karsana </p>
              <section class="alamat">
                <h6>Punjungan, Pupuan, Tabanan</h6>
              </section>
          </div>

          <div class="col-md-3 mt-4" style="padding-left: 0px;">
            <div class="card-box" id="right" style="height: 250px;">
                <h3><a href="#" class="mt-2 ml-4 text-danger" style="font-weight: bold;">Informasi Penjual</a></h3>
                <div class="row">
                  <div>
                    <img class="img-rounded" src="assets/img/profil.jpg" alt="" style="width: 70px; height: 70px; float: left;
                    position: relative;">
                  </div>
                  <div>
                    <p class="text-secondary" style="font-weight: bold; font-size: 20px; margin-top: 20px; margin-left: 80px;">Pak Karsana </p>
                    <h6>Punjungan, Pupuan, Tabanan</h6>
                  </div>
                </div>
                
                <div class="card-footer" style="padding-top: 10px; padding-left: 85px;">
                    <div class="row" style="margin-left: 2rem;">
                        <i class="fab fa-whatsapp" style="margin-right: 8px; font-size: 20px;"></i>
                    </div>
                </div>
            </div>

                <div class="btn-md" aria-label="Basic mixed styles example">
                    <a href="" data-toggle="modal"data-target="#modalkonfirm"><button type="button" class="btn btn-success" style="width: 300px; font-weight: bold; font-size: 18px;" >Pemesanan</button></a>
                  </div>
                  <!--pop up-->
                  <div class="modal fade" id="modalkonfirm" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document" style="width: 800px">
                      <div class="modal-content">
                        <div class="modal-header" style="background-color: #eb9046;">
                          <h5 class="modal-title" style="font-weight: bold; font-size: 20px; width: 700px; margin-left: 41px;">PEMESANAN</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" style="padding-left: 55px;">
                          <form action="#" style="width: 800px"class="posisi";>
                            <fieldset class="h">
                            <table style="width: 980px;">
                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">Nama Pembeli</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">Alamat Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">No. Telepon</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              
                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">Jumlah Pesanan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              <div class="mb-3" style="width: 700px;">
                                <label for="disabledSelect" class="form-label">Satuan</label>
                                <select id="disabledSelect" class="form-select">
                                  <option>Pilih..</option>
                                  <option>Butir</option>
                                  <option>Krat</option>
                                </select>
                              </div>

                              <div class="mb-3" style="width: 700px;">
                                <label for="exampleInputPassword1" class="form-label">Tanggal pesanan diambil</label>
                                <div class="input-group">
                                 <div class="input-group-addon">
                                  <i class="fa fa-calendar">
                                  </i>
                                 </div>
                                 <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
                                </div>
                               </div>
                            </tr>
                            </table>
                            </fieldset>
                            </form>
                        </div>
                        <div class="modal-footer" style="padding-right: 350px;">
                          <button type="submit" class="btn btn-success">Pesan</button>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
          </div>
        </div>
      </div>
   <!--main content end-->
</section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="assets/js/jquery.sparkline.js"></script>

  <script src="assets/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/datatables/dataTables.bootstrap.min.js"></script>

  <!--common script for all pages-->
  <script src="assets/js/common-scripts.js"></script>
  
  <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Menambahakan Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]');
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

</body>
</html>


          
    
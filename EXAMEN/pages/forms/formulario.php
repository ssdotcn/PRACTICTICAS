<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTRAR ASPIRANTES</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/credit/american-express.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">SEAC SING</a>
        </div>
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Registro
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/formulario.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registro de datos</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Lista
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../tables/lista.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de aspirantes</p>
                </a>
              </li>
              
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ASPIRANTES</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">General Form SS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">REGISTRAR ASPIRANTES</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!--<form action="php/insert0.php" method="POST">-->
              <!--<form action="php/check.php" method="POST"> nctype="multipart/form-data"  required -->
              <!--<form action="../php/insert.php" method="POST" >-->
              <!--<form action="subir.php" method="POST" >-->
              <form id="frm" enctype="multipart/form-data" action="../php/insert.php" method="POST">

                <!--<div>
                  <label class="alert alert-success">OKK <label>
                </div>-->

                <!--<?php //include "php/check.php"; ?>-->

                

                <div class="card-body">

                  <div class="form-group">
                    <label>NOMBRE COMPLETO</label>
                    <input type="text" class="form-control" name="nomA" placeholder="Ingresa el Nombre" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode == 46 || event.charCode == 32 || event.charCode == 164' required>
                  </div>

                  <div class="row">

                    <div class="col-6">
                      <div class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">

                            <div class="col-sm-4 col-form-label">
                              <label>FECHA NACIMIENTO</label>
                            </div>
                            
                            <div class="col-sm-4">
                              <input type="date" class="form-control" id="fecA" name="fecA" style="text-align: center" min="1973-01-01" max="2007-12-31" required>
                            </div>

                            <div class="col-sm-4 col-form-label">
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">

                            <div class="col-sm-3 col-form-label">
                              <label>EDAD</label>
                            </div>

                            <div class="col-sm-2">
                              <!--<h1 id="edA"></h1>-->
                              <input type="number" class="form-control fw-normal" id="edA" name="edA" style="text-align: center" min="16" max="50" maxlength="2" placeholder="#" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                            </div>

                            <div class="col-sm-7 col-form-label">
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                    <!--<script src="js/index.js"></script>-->

                  </div>


                  <div class="row">

                    <div class="col-6">
                      <div class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">BACHILLERATO</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="escA" onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode == 46 || event.charCode == 32 || event.charCode == 164' placeholder="Escuela" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">

                            <div class="col-sm-3 col-form-label">
                              <label>PROMEDIO</label>
                            </div>
                            
                            <div class="col-sm-2">
                              <input type="number" class="form-control" name="prmA" style="text-align: center" min="6" max="10" step="0.1" maxlength="2" placeholder="#" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                            </div>
                            
                            <div class="col-sm-7 col-form-label">
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class="row">

                    <div class="col-6">
                      <div class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">MUNICIPIO</label>
                            <div class="col-sm-8">
                              <div>
                                <select class="form-control" name="munA">
                                  <option value="TAPACHULA">TAPACHULA</option>
                                  <option value="HUIXTLA">HUIXTLA</option>
                                  <option value="CACAHOATAN">CACAHOATAN</option>
                                  <option value="HUEHUETAN">HUEHUETAN</option>
                                  <option value="MAZATAN">MAZATAN</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-horizontal">
                        <div class="card-body">
                          <div class="form-group row">

                            <div class="col-sm-4">
                              <label>CERTIFICADO</label>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group row">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="srtA" value="SI" checked>
                                  <label class="form-check-label">SI</label>
                                </div>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="form-group row">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="srtA" value="NO" >
                                  <label class="form-check-label">NO</label>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">FOTOGRAFIA</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="img" accept="image/png, image/jpeg, image/jpg">
                        <label class="custom-file-label" for="exampleInputFile">Elegir Imagen (.png, .jpeg .jpg)</label>
                        <!--<input type="file" class="custom-file-input" id="img" name="img" accept="image/png, image/jpeg, image/jpg" onchange="imagen();">-->
                        <!--<input type="file" class="custom-file-input" id="exampleInputFile" lang="es">-->
                      </div>
                      <!--<div class="input-group-append">
                        <span class="input-group-text">SUBIR</span>
                      </div>-->
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">REGISTRAR</button>
                  <!--<?php //include "php/check.php"; ?>-->
                  <!--<input type="submit" name="btn" value="REGISTRAR" > onclick="onSubmitForm()" -->
                  <!--<input type="submit" class="btn btn-primary" value="ENVIAR">-->
                  <!--<button type="submit" class="btn btn-primary" name="btn">REGISTRAR</button>-->
                  <!--<input type="submit" name="btn" value="REGISTRAR" >-->
                  <!--<input type="submit" class="btn btn-primary" value="ENVIAR">-->
                </div>


              </form>

              
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <b>Version</b> 4.0.0
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>

  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();

    if (fileName != '') {
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    } else {
      $(this).siblings(".custom-file-label").html("Elegir Imagen (.png, .jpeg .jpg)");
    }
  });

  const fechaNacimiento = document.getElementById("fecA");
const edad = document.getElementById("edA");

const calcularEdad = (fechaNacimiento) => {
    const fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear());
    const mesActual = parseInt(fechaActual.getMonth()) + 1;
    const diaActual = parseInt(fechaActual.getDate());

    // 2016-07-11
    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--;
    } else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--;
        }
    }
    return edad;
};

window.addEventListener('load', function () {
    fechaNacimiento.addEventListener('change', function () {
        if (this.value) {
            edad.innerText = `${calcularEdad(this.value)}`;
        }
    });
});

</script>
<!-- AdminLTE for demo purposes -->
<!--<script src="../../dist/js/demo.js"></script>-->
<!-- Page specific script -->
<!--<script>

  function onSubmitForm() {
    var frm = document.getElementById('f');
    var data = new FormData(frm);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            var msg = xhttp.responseText;
            if (msg == 'success') {
                alert(msg);
                //$('#exampleModal').modal('hide')
            } else {
                alert(msg);
            }
        }
      };
      xhttp.open("POST", "upload.php", true);
      xhttp.send(data);
      //$('#form1').trigger('reset');
  }

  function imagen(){
    $(".upload-msg").text('cargandoo')
    var inImagen = document.getElementById('img')
    var file = inImagen.files[0]
    var data = new FormData()
    data.append('img',file)

    $.ajax({
      url: 'imagen.php',
      type: 'POST',
      //data: data,
      //contentType: false,
      //cache: false,
      //proccessData: false,
      success: function(data){
        $(".upload-msg").html(data)
      }

    })
  }

</script>-->
<!--<script>
$(function () {
  bsCustomFileInput.init();
});
</script>-->
</body>
</html>

@extends('layout.app')
@section('title', 'Usuarios')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Crear Usuarios</li>
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

            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Creación de perfil de usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                <!-- <div class="row">
                  <div class="col-3">
                    <input type="text" class="form-control" placeholder=".col-3">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder=".col-4">
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control" placeholder=".col-5">
                  </div>
                </div> -->
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Nombres">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Apellido paterno">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Apellido materno">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Correo Institucional">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Cédula">
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Usuario">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Contraseña">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="inputEmail3" placeholder="Confirmar contraseña">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Guardar</button>
                  <button type="submit" class="btn btn-default float-right">Cancelar</button>
                </div>
                <!-- /.card-footer -->
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
  @endsection
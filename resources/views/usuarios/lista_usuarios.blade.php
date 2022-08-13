@extends('layout.app')
@section('title', 'Lista de usuarios')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista Usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Lista Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista Usuarios</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Cedula</th>
                      <th>Usuario</th>
                      <th>Correo</th>
                      <th>Contraseña</th>
                      <th>Perfil</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Jose</td>
                      <td>Asencio</td>
                      <td>120000000</td>
                      <td>jAsencio</td>
                      <td>jasencio@gmail.com</td>
                      <td>1234</td>
                      <td>Administrador</td>
                      <td><a><span class="badge bg-info">Editar</span></a> <a><span class="badge bg-danger">Eliminar</span></a></td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Jose</td>
                      <td>Asencio</td>
                      <td>120000000</td>
                      <td>jAsencio</td>
                      <td>jasencio@gmail.com</td>
                      <td>1234</td>
                      <td>Tutor</td>
                      <td><td><a><span class="badge bg-info">Editar</span></a> <a><span class="badge bg-danger">Eliminar</span></a></td></td>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Jose</td>
                      <td>Asencio</td>
                      <td>120000000</td>
                      <td>jAsencio</td>
                      <td>jasencio@gmail.com</td>
                      <td>1234</td>
                      <td>Estudiante</td>
                      <td><td><a><span class="badge bg-info">Editar</span></a> <a><span class="badge bg-danger">Eliminar</span></a></td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>       
        </div> 
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
@endsection
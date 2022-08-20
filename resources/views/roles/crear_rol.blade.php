@extends('layout.app')
@section('title', 'Roles')
@section('content')

<section class="content">
    <div class="recent--patientscf">
        <div class="title">
            <!-- <h2 class="section--title">CREAR USUARIOS</h2> -->
            <a href="/listar-rol" class="adds"><i class="ri-arrow-left-fill"></i>Volver</a>
            <!-- <button class="add"><i class="ri-add-line"></i>Volver</button> -->
        </div>
        <div class="tablescf">
            <div class="containerscf">
            <div class="titles">Crear Roles</div>

            <form action="#">
                <div class="user-details">
                    <div class="input-fields">
                        <input type="text" placeholder="Nombre perfil" name="nameprofile" value="{{ old('nameprofile') }}" required>
                        <i class="uil uil-keyhole-square icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Nombre del modulo" name="namemodule" value="{{ old('namemodule') }}" required>
                        <i class="uil uil-align-justify icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Permiso por cada modulo" name="permissionmodule" value="{{ old('permissionmodule') }}" required>
                        <i class="uil uil-key-skeleton-alt icon"></i>
                    </div>
                    <div class="input-fields">
                        <input type="text" placeholder="Opciones disponibles" name="availableoptions" value="{{ old('availableoptions') }}" required>
                        <i class="uil uil-ellipsis-v icon"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" name="estado" id="estado" name="status" value="{{ old('status') }}" required>
                            <label for="estado" class="text">Activo</label>
                        </div>
                        <a href="#" class="text" disabled hidden></a>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Guardar">
                </div>
            </form>
            </div>
        </div>
    </div>
    @endsection
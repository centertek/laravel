@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-">Acceso a la aplicacion</h2>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" 
                                type="email" name="email" id="email" 
                                placeholder="Ingrese su email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input class="form-control" 
                                type="password" name="password" id="password" 
                                placeholder="Ingrese su password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
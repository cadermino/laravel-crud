@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-5">Crear cliente</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customers.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">Nombre:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Apellido paterno:</label>
              <input type="text" class="form-control" name="paternal_name"/>
          </div>
          <div class="form-group">
              <label for="email">Apellido materno:</label>
              <input type="text" class="form-control" name="maternal_name"/>
          </div>
          <div class="form-group">
              <label for="city">Correo eletrónico:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="country">Teléfono:</label>
              <input type="number" class="form-control" name="phone_number"/>
          </div>
          <div class="form-group">
              <label for="job_title">Tarjeta de crédito:</label>
              <input type="number" class="form-control" name="credit_card_number"/>
          </div>                         
          <a href="{{ route('customers.index') }}" class="btn btn-primary">Regresar</a>
          <button type="submit" class="float-leftt btn btn-success">Agregar cliente</button>
      </form>
  </div>
</div>
</div>
@endsection
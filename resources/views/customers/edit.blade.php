@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-5">Editar cliente</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('customers.update', $customer->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="first_name">Nombre:</label>
                <input type="text" class="form-control" name="name" value={{ $customer->name }} />
            </div>
            <div class="form-group">
                <label for="last_name">Apellido paterno:</label>
                <input type="text" class="form-control" name="paternal_name" value={{ $customer->paternal_name }} />
            </div>
            <div class="form-group">
                <label for="email">Apellido materno:</label>
                <input type="text" class="form-control" name="maternal_name" value={{ $customer->maternal_name }} />
            </div>
            <div class="form-group">
                <label for="city">Correo electrónico:</label>
                <input type="text" class="form-control" name="email" value={{ $customer->email }} />
            </div>
            <div class="form-group">
                <label for="country">Teléfono:</label>
                <input type="text" class="form-control" name="phone_number" value={{ $customer->phone_number }} />
            </div>
            <div class="form-group">
                <label for="job_title">Tarjeta de crédito:</label>
                <input type="text" class="form-control" name="credit_card_number" value={{ $customer->credit_card_number }} />
            </div>
            <a href="{{ route('customers.index') }}" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Editar</button>
        </form>
    </div>
</div>
@endsection
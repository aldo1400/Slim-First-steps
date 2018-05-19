@extends('app')
@section('content')
<h2>Usuarios 1</h2>
@if(is_array($all))
	        <div class="row">
				@foreach($all as $user)
	                <div class="col-md-8">
						{{$user['nombre'];}} {{$user['apellidos'];}}
						<?php echo  ?> <?php echo $user['email']; ?>
	                </div>
	            @endforeach;
	        </div>
@endif
@endsection
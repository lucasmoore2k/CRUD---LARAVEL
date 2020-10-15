@extends('layouts.app')

@section('content')
<div class="container spark-screen">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">

				@if (session('saved'))
				<div class="alert alert-success">
					Client successfully SAVED!
				</div>
				@endif

		

				@if(Request::is('*/update'))
				{!!Form::model($client,['method'=>'PATCH','url'=>'/clients/'.$client->id])!!}
				<div class="card-header row justify-content-between">
					Update a client
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="{{url('/clients')}}">Clients list</a>
						</div>
					</div>
				</div>

			    @else

				<div class="card-header row justify-content-between">
					Add a new client
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="{{url('/clients')}}">Clients list</a>
						</div>
					</div>
				</div>

				@endif


				{!! Form::open(['url'=>'clients/save']) !!}
				
				{{Form::label('name', 'Name',[])}}
				{!!Form::text('name',null,array('class' => 'form-control','placeholder'=>'Name of client'))!!}

				{{Form::label('address', 'Address',[])}}
				{!!Form::text('address',null,['class' => 'form-control','placeholder'=>'Address of client'])!!}

				{{Form::label('number', 'Number',[])}}
				{!!Form::text('number',null,['class' => 'form-control','placeholder'=>'Number of client'])!!}

				{{Form::submit('Save',['class'=>'btn btn-primary'])}}





				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>
@endsection

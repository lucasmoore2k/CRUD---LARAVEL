@extends('layouts.app')

@section('content')
<div class="container spark-screen">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">

				@if (session('updated'))
				<div class="alert alert-success">
					Client successfully UPDATED!
				</div>
				@endif



				@if (session('deleted'))
				<div class="alert alert-success">
					Client successfully DELETED!
				</div>
				@endif

				<div class="card-header row justify-content-between">Clients
					<a href="{{url('clients/new')}}">New Clients</a>
				</div>
				<div class="panel panel-default">



					<div class="panel-body">
						<table class="table">
							<th>Name</th>
							<th>Address</th>
							<th>Number</th>
							<th>Actions</th>
							<tbody>
								@foreach($clients as $client)
								<tr>
									<td>{{$client->name}}</td>
									<td>{{$client->address}}</td>
									<td>{{$client->number}}</td>
									<td class="row">
										<a href="clients/{{$client->id}}/update" class="btn btn-primary">Edit</a>

										{!!Form::open(['method'=>'DELETE','url'=>'clients/'.$client->id])!!}

										<button type="submit" href="clients/{{$client->id}}"  class="btn btn-danger">Delete</a>
											{!!Form::close()!!}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection

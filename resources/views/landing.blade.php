@extends('layout')

@inject('landing', 'App\Services\LandingService')
@section('content')
	<h1>オープンキャンパス</h1>
	<hr>
	<div class="row">
	@foreach($ocs as $oc)
		<div class="col s4 m4">
			<div class="card">
			 	<a href="{{ url('opencampass', [ 'id' => $oc->id] ) }}">
					<div class="card-content">
						<span class="card-title">オープンキャンパス</span>
						<span>{{ $landing->getDate($oc->date) }}({{ $landing->getWeek($oc->date) }})</span>
					</div>
				</a>
			</div>
		</div>
	@endforeach
	</div>
@endsection
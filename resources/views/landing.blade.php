@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
@endsection

@inject('landing', 'App\Services\LandingService')
@section('content')
	<div class="row">
	@foreach($ocs as $oc)
		<div class="col s4 m4">
			<div class="card yellow lighten-4 ">
			 	<a href="{{ url('opencampass', [ 'id' => $oc->id] ) }}">
					<div class="card-content">
						<div class="oc">オープンキャンパス</div>
						<div>{{ $landing->getDate($oc->date) }}({{ $landing->getWeek($oc->date) }})</div>
					</div>
				</a>
			</div>
		</div>
	@endforeach
	</div>
@endsection
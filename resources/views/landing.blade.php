@extends('layout')

@inject('landing', 'App\Services\LandingService')
@section('content')
	<h1>オープンキャンパス</h1>
	<hr>
	@foreach($ocs as $oc)
		オープンキャンパス
		{{ $landing->getDate($oc->date) }}({{ $landing->getWeek($oc->date) }})
	@endforeach
@endsection
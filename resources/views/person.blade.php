@extends('layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/person.css') }}">
@endsection

@section('content')
	<div id="person-info">
		<div id="person-info-top">
			<div id="name">
				<div>
					<div class="name-top">フリガナ</div>
					<div>名前</div>
				</div>
				<div>
					<div class="name-top">&nbsp;</div>
					<div>:</div>
				</div>
				<div>
					<div class="name-top">{{ $person->furigana }}</div>
					<div>{{ $person->name }}</div>
				</div>
			</div>
			<div id="school-year">学年：</div>
		</div>

		<div id="person-info-bottom">学校名：{{ $person->school_name }}</div>
	</div>
	<hr>
	<div id="taiken-list">
		<h4>午前</h4>
		<taiken :oc-id="{{ $person->oc_id }}" :taiken-num="1" :now-taiken="{{ $person->taiken1 }}" :person-num="{{ $person->id }}"></taiken>
		<hr>
		<h4>午後</h4>
		<taiken :oc-id="{{ $person->oc_id }}" :taiken-num="2" :now-taiken="{{ $person->taiken2 }}" :person-num="{{ $person->id }}"></taiken>
		<taiken :oc-id="{{ $person->oc_id }}" :taiken-num="3" :now-taiken="{{ $person->taiken3 }}" :person-num="{{ $person->id }}"></taiken>
	</div>
	<attend-btn :person-num="{{ $person->id }}" :now-state="{{ $person->entry }}"></attend-btn>
@endsection
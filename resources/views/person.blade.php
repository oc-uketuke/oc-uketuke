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

	</div>
@endsection
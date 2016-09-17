@extends('layout');

@section('content')
	<div id="person-info">
		<div>
			<div>
				<div>
					<div>フリガナ</div>
					<div>名前</div>
				</div>
				<div>
					<div>&nbsp;</div>
					<div>:</div>
				</div>
				<div>
					<div>{{ $person->furigana }}</div>
					<div>{{ $person->name }}</div>
				</div>
			</div>
			<div>学年：</div>
		</div>
		<div>学校名：{{ $person->school_name }}</div>
	</div>
	<hr>
	<div id="taiken-list">
		
	</div>
@endsection
@extends('layouts.members')

@section('content')

	@include('messages._success')

	<table class="table table-bordered table-striped">
		<thead>
			<th colspan="2"><h4>Carian Data Pemilik</h4></th>
		</thead>
		<tr>
			<td>{!! Form::label('nama', 'No.K/P', ['class'=>'form control col-sm-3']) !!}</td>
			<td> {!! Form::text('no_kp','',['class'=>'form-control col-sm-6']) !!} </td>
		</tr>
		<tr>
			<td colspan="2" align="right">{{ Form::submit('Cari', ['class' => 'btn btn-primary']) }}</td>
		</tr>
	</table>

	<table class="table table-bordered table-striped">
		<thead>
			<th colspan="2"><h4>Carian Data Mengikut Lot</h4></th>
		</thead>
		<tr>
			<td>{!! Form::label('nama', 'Blok', ['class'=>'form control col-sm-6']) !!}</td>
			<td> {{ Form::select('negeri_id', $blok, null, ['class' => 'form-control col-sm-6', 'placeholder' => 'Pilih Blok']) }} </td>
		</tr>
		<tr>
			<td>{!! Form::label('nama', 'No. Lot', ['class'=>'form control col-sm-6']) !!}</td>
			<td> {{ Form::select('negeri_id', $lot, null, ['class' => 'form-control col-sm-6', 'placeholder' => 'Pilih Lot']) }} </td>
		</tr>
		<tr>
			<td colspan="2" align="right">{{ Form::submit('Cari', ['class' => 'btn btn-primary']) }}</td>
		</tr>
	</table>
@endsection
@extends('layouts.members')

@section('content')


	<a href="{{ route('members.bicara.create') }}"><button class="btn btn-success">Tambah Perbicaraan</button></a><br /><br />

	@include('messages._success')

	<table class="table table-bordered table-striped">
		<thead>
			<th colspan="6"><h4>Senarai Perbicaraan</h4></th>
		</thead>
		<tr>
			<td><center><strong>Bil</strong></center></td>
			<td><center><strong>Tarikh</strong></center></td>
			<td><center><strong>No.Lot & Hakmilik</strong></center></td>
			<td><center><strong>Nama Pentadbir</strong></center></td>
			<td><center><strong>Status Bicara</strong></center></td>
			<td><center><strong>Pilihan</strong></center></td>
		</tr>

		@forelse ($hearings as $hearing)
		    <tr>
				<td><center>{{ $loop->iteration }}</td>
				<td><center>{{ $hearing->tarikh_1->format('d/m/Y') }}</td>
				<td><center>{{ $hearing->lot->no_lot }} - {{ $hearing->lot->no_hakmilik }} </td>
				<td><center>{{ $hearing->staff->nama }}</td>
				<td><center>{{ $hearing->status->nama }}</td>
				
				<td><center>					
					<a href="{{ route('members.bicara.show', ['id' => $hearing->id]) }}"><button class="btn btn-info">Kemaskini</button></a>
					<a href="{{ route('members.bicara.hapus', ['id' => $hearing->id]) }}" onclick="return myFunction();"><button class="btn btn-danger">Hapus</button></a>

					<script>
						function myFunction()
						{
							if(!confirm("Are You Sure to delete this data from the system?"))
							event.preventDefault();
						}
					</script>
				</center></td>
								
			</tr>	
		@empty
		    <tr>
		    	<td colspan="6"><font color="red">No Data</font></td>
		    </tr>
		@endforelse

		@if($hearings->count() >= 10 || $hearings->count() <= 10)
			<tr>
				<td colspan="6" align="center">{{ $hearings->render() }}</td>
			</tr>
		@endif

	</table>

@endsection
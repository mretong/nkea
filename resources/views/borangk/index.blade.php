@extends('layouts.members')

@section('content')


	<a href="{{ route('members.borangk.create') }}"><button class="btn btn-success">Tambah BorangK</button></a><br /><br />

	@include('messages._success')

	<table class="table table-bordered table-striped">
		<thead>
			<th colspan="5"><h4>Senarai Borang-K</h4></th>
		</thead>
		<tr>
			<td><center><strong>Bil</strong></center></td>
			<td><center><strong>Blok</strong></center></td>
			<td><center><strong>No.Lot & No.Hakmilik</strong></center></td>
			<td><center><strong>Tarikh Borang-K</strong></center></td>
			<td><center><strong>Pilihan</strong></center></td>
		</tr>

		@forelse ($kforms as $kform)
		    <tr>
				<td><center>{{ $loop->iteration }}</td>
				<td><center>{{ $kform->blok_id }}</td>
				<td><center>{{ $kform->lot->no_lot }} - {{ $kform->lot->no_hakmilik  }} </td>
				<td><center>{{ $kform->tarikh_k->format('d/m/Y') }}</td>
				
				<td><center>					
					<a href="{{ route('members.borangk.show', ['id' => $kform->id]) }}"><button class="btn btn-info">Kemaskini</button></a>
					<a href="{{ route('members.borangk.hapus', ['id' => $kform->id]) }}" onclick="return myFunction();"><button class="btn btn-danger">Hapus</button></a>

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
		    	<td colspan="5"><font color="red">No Data</font></td>
		    </tr>
		@endforelse

		@if($kforms->count() > 10)
			<tr>
				<td colspan="5" align="center">{{ $kforms->render() }}</td>
			</tr>
		@endif

	</table>

@endsection
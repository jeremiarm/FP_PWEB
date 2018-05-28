@if (session('success'))
<div class="alert alert-success">
	{{ session('success') }}
</div>
@endif

@if (session('gagal'))
<div class="alert alert-danger">
	{{ session('gagal') }}
</div>
@endif

<table>
	<thead>
		<tr>
			<th> User</th>
			<th> Comment</th>
			<th> Time</th>
		</tr>
	</thead>
	<tbody>
		@foreach($liat as $taruh)
		<tr>	
			<td> {{$taruh->username}} </td>
			<td> {{$taruh->komentar}} </td>
			<td> {{$taruh->created_at}} </td>
		</tr>
		@endforeach
	</tbody>
</table>


<div>
	<form method="post" action="{{url('/discussion')}}">
		<input type="hidden" value="{{csrf_token()}}" name="_token" />
		<input type="string" class="form-control" name="komentar" />
		<button type="submit" class="btn btn-primary">COMMENT</button>
	</form> 
</div>
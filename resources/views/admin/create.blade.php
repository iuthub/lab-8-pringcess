@extends('layouts.admin')
@section('content')

<div class="container">

<form>
	<div class ="form">
		<label for="title">Title</label>
		<input type="text" class="form" id="title" >
	</div>
	<div class="form">
		<label for="content">Content</label>
		<input type="text" class="form" id="content" >
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop

@extends( ' layouts . admin ')

@section( ' content ')
	@include( ' partials . errors ')
	<div class =" row " >
		<div class =" col -md -12 " >
			<form action =" {{ route (' admin . create ') }} " method =" post " >
				<div class =" form - group " >
					<label for =" title " > Title </ label >
					<input type =" text " class ="form-control " id ="title" name = " title " >
   				</div >
			<div class =" form - group " >
				<label for =" content " > Content </ label >
				<input type =" text " class =" form - control " id =" content " name =" content " >
			</div >
			@csrf
			<button type =" submit " class =" btn btn - primary " > Submit </ button >
			</form >
		</div >
	</div >
@endsection

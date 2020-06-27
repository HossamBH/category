@extends('layout')
@section('title')

	<title> Create New Category </title>

@stop
@section('content')
		
	 @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <br>
	<form method="POST" id="category" action="" enctype="multipart/form-data">
		@csrf
		
		<div class="form-text" style="margin: 0px 400px 0px 400px">
		   	<h1>Choose the above category</h1>
		   	<select name="parent_id" class="custom-select custom-select-lg mb-3 mt-3 custom-width">
		   
			</select>
		</div>

		<div class="form-group" style="margin: 0px 400px 0px 400px">
            <label for="name">New Category</label>
            <input id="name" type="text" class="form-control" name="name">
        </div>
		
    	</br>
        <button id="save" class="btn btn-primary">Add</button>
	</form>

	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    @push('scripts')
    <script>
    	$(document).ready(function () {

            fetch_data();

            function fetch_data()
            {
                $.ajax({
                  method : 'get',
                  url : "{{route('categories')}}",
                  data: {
                  },
                  dataType:'json',
                  success:function(data){
                  $('select').html(data.select_data);
                  }
                });
            }
        });

	        $(document).on('click', '#save', function (e) {
	            e.preventDefault();
	            location.reload();
	            var formData = new FormData($('#category')[0]);
	            $.ajax({
	                type: 'post',
	                enctype: 'multipart/form-data',
	                url: "{{route('store')}}",
	                data: formData,
	                processData: false,
	                contentType: false,
	                cache: false,
	                success: function (data) {
	                    if (data.status == true){
	                    }
	                }, error: function (reject) {
	                }
	            });
	        });
    </script>
    @endpush
@stop


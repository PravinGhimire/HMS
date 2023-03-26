<!-- @extends('master')
@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<script>
   const buttons = document.querySelectorAll('.book_btn');
buttons.forEach(button => {
	button.addEventListener('click', () => {
		window.location.href = "booking.blade.php";
	});
});
 </script>
@endsection -->
@extends($frontTheme)

@section('content')
<div class="container">
	<div class="main">
		<div class="error-404 text-center">
				<h1>404</h1>
				<p>this link dead link</p>
				<a class="b-home" href="{{ route('home') }}">Back to Home</a>
			</div>
	</div>
	<!-- 404 -->
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('images/img-01.png')}}" alt="IMG">
				</div>

                <form method="POST" action="{{ route('register') }}">

                    @csrf
					<span class="login100-form-title">
						Member Register
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name"     placeholder="User Name">
                        @error('name')
                        {{-- {{dd($message)}} --}}

                        <span >
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>

					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email"     placeholder="Email">
                        @error('email')
                        {{-- {{dd($message)}} --}}

                        <span >
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

					</div>



					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
                        @error('password')
                        {{-- {{dd($message)}} --}}

                        <span >
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                        {{-- {{dd($message)}} --}}

                        <span >
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>
                    {{-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<select class="input100" name="type" id="type">
                            <option value="volunteer">Volunteer</option>
                <option value="veterinarian">Veterinarian</option>
                <option value="labour">labour</option>
                        </select>

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</span>

					</div> --}}
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <select class="input100" name="type" id="type">
                            <option value="event_manager">Event Manager</option>
                            <option value="customer">Customer</option>
                            {{-- <option value="labour">labour</option> --}}
                        </select>

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>

                    </div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					{{-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> --}}

					<div class="text-center p-t-136">
						<a class="txt2" href="{{route('login')}}">
							Already Have Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>

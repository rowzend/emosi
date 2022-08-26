@extends('layouts.maincontrol')

@section('content')
<main>
	<div class="form-main-container">
		<div class="form-wrapper">
			<div class="form-header">
				<span class="form-title">
					Login to <strong>E MUSISI</strong>
				</span>
			</div>

			<form class="form-content" method="POST" action="{{ route('login') }}">
				@csrf
				<div class="input-wrapper">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="input-wrapper">
					<div class="input-group">
						<input id="password" type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
						<div class="input-group-addon" onclick="passwordVisibility();">
							<i class="fa fa-eye" id="showPass"></i>
							<i class="fa fa-eye-slash d-none" id="hidePass"></i>
						</div>
					</div>
				</div>

				<button class="button-style w-100">
					Login
				</button>

				<div class="checkbox-wrapper mt-4">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

						<label class="form-check-label" for="remember">
							Ingat Aku!!
						</label>
					</div>

					@if (Route::has('password.request'))
					<a href="{{ route('password.request') }}" class="txt-style2 text-decoration-none">
						<strong>Gawat!! Lupa Password?</strong>
					</a>
					@endif
				</div>
				@if (Route::has('register'))
				<p class="txt-style1 mt-5 ">Belum punya Akun? <a class="txt-style2 text-decoration-none" href="{{ route('register') }}"><strong>Daftar!</strong></a></p>
				@endif
			</form>
		</div>
	</div>
</main>
@endsection
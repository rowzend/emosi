@extends('layouts.maincontrol')

@section('content')
<main>
	<div class="form-main-container">
		<div class="form-wrapper-register">
			<div class="form-header">
				<span class="form-title">
					REGISTER AKUN <strong>E-MUSISI</strong>
				</span>
			</div>

			<form class="form-content" method="POST" action="{{ route('register') }}">
				@csrf
				<div class="input-wrapper">
					<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama" value="{{ old('name') }}" required autocomplete="name" autofocus>
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="input-wrapper">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="input-wrapper">
					<div class="input-group">
						<div class="input-group-text">
							<input class="form-check-input mt-0" type="checkbox" value="" onclick="showPassword()">
						</div>
						<input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="input-wrapper">
					<div class="input-group">
						<div class="input-group-text">
							<input class="form-check-input mt-0" type="checkbox" value="" onclick="showPasswordConfirm()">
						</div>
						<input id="password-confirm" type="password" placeholder="Ulangi Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="input-wrapper">
					<div class="input-group">
						<select name="layanan" id="layanan" class="form-control">
							<option selected>- Pilih Layanan - </option>
							<option value="mutasi">Mutasi</option>
							<option value="identitas">Identitas</option>
							<option value="kepangkatan">Kepangkatan</option>
						</select>
						@error('passlayananword')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<button class="button-style w-100">
					Daftar Akun!?
				</button>

				<div class="checkbox-wrapper mt-4">
					<div class="form-check-label" for="remember">
						<strong>Udah punya Akun?!</strong>
					</div>

					@if (Route::has('login'))
					<a href="{{ route('login') }}" class="txt-style2 text-decoration-none">
						<strong>Kembali Ke Login</strong>
					</a>
					@endif
				</div>

			</form>
		</div>
	</div>
</main>
<script>
	function showPassword() {
		const x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}

	function showPasswordConfirm() {
		const x = document.getElementById("password-confirm");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
@endsection
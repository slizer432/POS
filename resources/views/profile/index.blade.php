@extends('layouts.template')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Update Profile</div>

					<div class="card-body">
						@if (session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif

						<form method="POST" action="{{ url('/user/update_profile') }}" enctype="multipart/form-data">
							@csrf

							<div class="form-group row">
								<label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
								<div class="col-md-6">
									<input id="username" type="text" class="form-control" value="{{ auth()->user()->username }}" disabled>
								</div>
							</div>

							<div class="form-group row">
								<label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
								<div class="col-md-6">
									<input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
										value="{{ old('nama', auth()->user()->nama) }}" required>

									@error('nama')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="image" class="col-md-4 col-form-label text-md-right">Foto
									Profile</label>
								<div class="col-md-6">
									<input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror"
										name="image">

									@error('image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror

									@if (auth()->user()->image)
										<div class="mt-2">
											<img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Current Profile" class="img-thumbnail"
												id="imagePreview" width="150">
										</div>
									@endif
								</div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										Update Profile
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('js')
	<script>
		$(document).ready(function() {
			$('#image').change(function(e) {
				console.log('File selected:', this.files[0]);
				if (this.files && this.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('#imagePreview').attr('src', e.target.result).show();
					}
					reader.readAsDataURL(this.files[0]);
				}
			});
		});
	</script>
@endpush

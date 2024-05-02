@extends('auth.layouts')

@section('content')

<style>
    .card {
    background-color: rgba(0, 0, 0, 0.2); /* Hitam dengan opacity 70% */
    color: white;
    backdrop-filter: blur(6px);
    margin-top: 50px;
}

    .card-body input[type="email"],
    .card-body input[type="password"] {
    background-color: rgba(0, 0, 0, 0.2);
    }

    .card-body input[type="submit"] {
    backdrop-filter: blur(2px);/* Efek blur pada tombol */
}

    </style>
<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <div class= "card">
            <div class="card-header text-center">Login Account</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-2 row">
                        <label for="email" class="col-md-11 col-form-label text-start">Email Address</label> <!-- Mengubah kelas col-md-4 menjadi col-md-12 -->
                        <div class="col-md-12"> <!-- Mengubah lebar kolom menjadi 12 -->
                          <input type="email" class="form-control @error('email') is-invalid @enderror" type="email" "id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-11 col-form-label text-start">Password</label>
                        <div class="col-md-12"> <!-- Mengubah lebar kolom menjadi 8 -->
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-md-12 text-center"> <!-- Menggunakan text-center untuk mengatur tombol login ke tengah -->
                            <input type="submit" class="btn btn-primary" value="Login" style="width: 100%;"> <!-- Menggunakan inline CSS untuk memperpanjang tombol secara spesifik -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

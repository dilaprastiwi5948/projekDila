<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">

</head>
<body>
<div class="container">
     <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-dark fs-5">Register</h5>
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-floating mb-3">                               
                                <input type="text" name="nik_operator" class="form-control @error('nik_operator') is-invalid @enderror" placeholder="Masukan NIK" required value="{{old('nik_operator')}}"/>
                                <label>NIK</label>
                                @error('nik_operator')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">                               
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama" required value="{{old('nama')}}"/>
                                <label>Nama</label>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">                               
                                <input type="text" name="jabatan" class="form-control  @error('jabatan') is-invalid @enderror" rows="5"placeholder="Masukan jabatan" required value="{{old('jabatan')}}"/>
                                <label>Jabatan</label>
                                @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">                               
                                <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" placeholder="Masukan username" required value="{{old('username')}}"/>
                                <label>Username</label>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">                        
                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Masukan Password" required/>
                                <label>Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Register</button>
                            </div>
                            <div class="d-grid">
                                <a href="/login"><center>Login</center></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
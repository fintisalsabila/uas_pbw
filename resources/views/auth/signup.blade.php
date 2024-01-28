@extends("tema.layout")
@section("isi")
<h3>Daftar User Baru</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('register') }}">
@csrf
<div class="form-group">
    <label for="name">Nama Lengkap:</label>
    <input type="text" class="form-control" id="name" name="name" 
        value="{{ old('name') }}" placeholder="isi nama lengkap"/>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" 
        value="{{ old('email') }}" placeholder="isi email"/>
</div>
<div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" 
        value="{{ old('password') }}" 
        placeholder="ketik password"/>
</div>
<div class="form-group">
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" class="form-control" 
        id="password_confirmation" 
        name="password_confirmation" 
        value="{{ old('password_confirmation') }}" 
        placeholder="ketik ulang password"/>
</div>
<div class="form-group">
    <label for="name">Role / Hak Akses</label><br>
    <div class="form-check form-check-inline">
    <input type="radio" id="role" name="role" 
        value="Manajer" class="form-check-input" />Manajer&nbsp;
        <input type="radio" id="role" name="role" 
        value="Staf" class="form-check-input" checked />Staf
    </div>    
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Register</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</div>
</form>
@endsection
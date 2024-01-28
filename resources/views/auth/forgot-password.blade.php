@extends("tema.layout")
@section("isi")
<h3>Forgot Password</h3>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@else
    <div class="alert alert-danger">
        Anda belum terdaftar di website ini
    </div>
@endif
<form method="post" action="{{ route('password.email') }}">
@csrf
<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" id="email" name="email" 
        value="{{ old('email') }}" placeholder="isi email untuk reset password"/>
</div>
<button type="submit" class="btn btn-success">Send To Email</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection
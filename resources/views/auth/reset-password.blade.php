@extends("tema.layout")
@section("isi")
<h3>Reset Password</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('password.update') }}">
@csrf
<input type="hidden" name="token" 
    value="{{ $r->route('token') }}">

<div class="form-group">
    <label for="email">Email: {{ $r->email }}</label>
    <input type="hidden" name="email" 
        value="{{ $r->email }}">
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
<button type="submit" class="btn btn-success">Change Password</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
</form>
@endsection
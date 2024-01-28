@extends("tema.layout")
@section("isi")
<h3>Login</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('login') }}">
@csrf
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
<button type="submit" class="btn btn-success">Login</button>
<button type="button" class="btn btn-danger" 
    onclick="history.go(-1)">Batal</button>
<a href="{{ route('password.request') }}">Forgot Password</a>
</form>
@endsection
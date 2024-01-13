@extends('/layouts/auth')
@push('css-dependencies')
    <link rel="stylesheet" href="/assets/css/auth/auth.css" rel="stylesheet" />
@endpush
@push('scripts-dependencies')
@endpush
@section('content')
    <div class="container">
        <div class="container-auth">
            <div class="auth-items">
                <h3>Login</h3>
                <form action="/login" method="POST">
                    @csrf
                    <input name="loginname" type="text" placeholder="Name">
                    <input name="loginpassword" type="password" placeholder="********">
                    <button>Log in</button>
                </form>
                or
                <div>
                    <a href="/auth/register">Create an Account</a>
                </div>
            </div>
        </div>
    </div>
@endsection

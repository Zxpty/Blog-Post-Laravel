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
                <h3>Register</h3>
                @if(session()->has('message'))
                {!! session("message") !!}
                @endif
                <form action="/auth/register" method="POST">
                    @csrf
                    <input name="name" type="text" placeholder="name">
                    <input name="email" type="text" placeholder="email">
                    <input name="password" type="password" placeholder="password">
                    <button>Register</button>
                </form>
                <div>
                    <a href="/auth/login">Already have account? Login now!</a>
                </div>
            </div>
        </div>
    </div>
@endsection

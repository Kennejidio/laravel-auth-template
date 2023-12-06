@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>{{ __('Login') }}</div>

                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <label for="username">{{ __('Username or Email Address') }}</label>

                                <div>
                                    <input id="username" type="username"
                                        class="@error('username') class-here-when-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="password">{{ __('Password') }}</label>

                                <div>
                                    <input id="password" type="password"
                                        class="@error('password') class-here-when-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <div>
                                    <div>
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

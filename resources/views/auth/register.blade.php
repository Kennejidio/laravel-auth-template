@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div>
                <div>
                    <div>{{ __('Register') }}</div>

                    <div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <label for="name">{{ __('Name') }}</label>

                                <div>
                                    <input id="name" type="text"
                                        class="@error('name') class-here-when-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="username">{{ __('Username') }}</label>

                                <div>
                                    <input id="username" type="text"
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
                                <label for="email">{{ __('Email Address') }}</label>

                                <div>
                                    <input id="email" type="email"
                                        class="@error('email') class-here-when-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                <div>
                                    <input id="password-confirm" type="password" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div>
                                <div>
                                    <button type="submit">
                                        {{ __('Register') }}
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

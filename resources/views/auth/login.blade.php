@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control  @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password"value="1234">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
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


    <div
        style="            
            font-family: Arial, sans-serif;
            background-color: #000000;
            margin: 10px 10%;
            padding: 20px;
            border-radius: 50px;
            color: #eeeeee;
        ">
        <h2 style="color:red">You can't put this information on your web page, it is only here for login easier</h2>
        <button type="button" id="btn1">複製</button><span>email = </span> <span id="text1">moroko@gmail.com</span>
        <p>name = 'Admin'</p><p>Role Is ADMIN</p>
        <button type="button" id="btn2">複製</button><span>email = </span> <span id="text2">manager@example.com</span>
        <p>&nbsp;name = 'Manager'</p>
        <p>Role Is MANAGER </p>

        <button type="button" id="btn3">複製</button><span>email = </span> <span id="text3">user@example.com</span>
        <p> &nbsp;name = 'User'</p>
        <p>Role Is USER</p>


        <h3>all password = 1234</h3>

        <script>


            const select = (DOM) => document.querySelector(DOM);

            select('#btn1').addEventListener('click', (e) => {
                // 建立 Range 物件
                const range = document.createRange();
                const texts = select('#text1');
                range.selectNode(texts);
                // 取得 Selection 物件
                const selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand("copy");
                selection.removeAllRanges();
            })
            select('#btn2').addEventListener('click', (e) => {
                // 建立 Range 物件
                const range = document.createRange();
                const texts = select('#text2');
                range.selectNode(texts);
                // 取得 Selection 物件
                const selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand("copy");
                selection.removeAllRanges();
            })
            select('#btn3').addEventListener('click', (e) => {
                // 建立 Range 物件
                const range = document.createRange();
                const texts = select('#text3');
                range.selectNode(texts);
                // 取得 Selection 物件
                const selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand("copy");
                selection.removeAllRanges();
            })
        </script>
    </div>
@endsection

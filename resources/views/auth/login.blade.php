@extends('layouts.app')

@section('content')

<style>
    .container-x{
        width: 100%;
        display: flex; 
        justify-content: center; 
        align-items: center;
    }

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">.</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="row mb-3 container-x">
                            <div style="text-align: center; font-size: 30px; font-weight: bolder; color: rgb(13, 61, 167);">Institución Educativa Aguas Negras</div>
                            <div style="text-align: center; font-size: 20px; font-weight: bolder; padding: 2px;">GOES 2023</div>

                            <div style="text-align: center;"> <img src="{{ asset('Candi_700/Escudo.png')}}" alt="" width="180" height="180">  </div>

                            <div style="text-align: center; font-size: 14px; font-weight: 600; padding: 10px; color: darkgreen;">POR FAVOR INGRESE SU CONTRASEÑA</div>

                            <div class="col-md-6">
                                <input id="usersto" type="text" class="keyUPs form-control @error('usersto') is-invalid @enderror" name="usersto" value="{{ old('usersto') }}" required autofocus>

                                @error('Grado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

{{--                             <div class="col-md-6">
                                <input id="password" type="hidden"> 
                            </div>   --}}                         
                        </div>

                        <div class="row mb-3">
{{--                             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
 --}}
                            <div class="col-md-6">
                                <input id="password" type="hidden" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
{{-- 
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="container-x">
                            <button type="submit" class="btn btn-primary" style="width: 150px;"> Ingresar </button>
{{-- 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(".keyUPs").keyup(function () {
            
            valx = $(this).val();
            console.log(valx);
            document.getElementById('password').value = valx;
/*             if (value.trim() != "") {
                OnBusq = $(this).attr("data-busq");
                draw = $(this).attr("data-draw");
                ax.Bqroot( OnBusq, value, draw, this.id);                
            } */

        });

</script>
@endsection

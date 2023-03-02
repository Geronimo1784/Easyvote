@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div>{{ $Concejo }}</div>
            <div>{{ $Personero }}</div>
            
        </div>
    </div>
</div> --}}

<style>

    .WH-100{ width:100%; }

    .container-x{
        width: 100%;
        background-color: #ffffff;
        display: flex; 
        justify-content: center; 
        align-items: center;

    }
    .Box{
        width: 300px;
        height: 400px;
        border: 1px solid #d3d3d3;
        border-radius: 7px;
        padding: 20px 10px;
        background-color: #ffffff;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(222,222,222,1);
        -moz-box-shadow: 10px 10px 5px 0px rgba(222,222,222,1);
        box-shadow: 10px 10px 5px 0px rgba(222,222,222,1);
        cursor: pointer;
    }
    
    .Box:hover {
        border: 1px dashed #3199ee;

        box-shadow: rgba(46, 98, 240, 0.4) -5px 5px, 
            rgba(46, 98, 240, 0.3) -10px 10px,
            rgba(46, 98, 240, 0.2) -15px 15px,
            rgba(46, 98, 240, 0.1) -20px 20px,
            rgba(46, 98, 240, 0.05) -25px 25px;
    }
    .Btn-Pry{
        width: 150px;
        height: 40px;
        border-radius: 5px;
        background-color: #3199ee;
        color: #ffffff;
        font-size: 18px;
        text-align: center;
        line-height: 37px;
        cursor: pointer;
    }
    .tac{
        text-align: center;
    }

</style>


<div class="WH-100" style="background-color: #ffffff; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

    @if (auth()->user()->voto_con == 'true' && auth()->user()->voto_per == 'true')    

        <div style="text-align: center"> <img src="{{ asset('Candi_700/Ok.jpg')}}" alt="" width="280" height="280"></div>
        <div style="text-align: center; font-size: 40px; font-weight: 600; color: rgb(39, 39, 39)">Gracias por tu voto</div>
        <div style="text-align: center; font-size: 20px; ; color: rgb(136, 136, 136)">Tu votación ha sido registrada correctamente.</div>
        <div class="container-x" style="padding: 20px;">
            <a href="{{route('Closesion')}}">
                <div class="Btn-Pry">Aceptar</div>
            </a>    
        </div>


    @else

        @if (auth()->user()->voto_con == 'false')

            <div style="padding: 10px;"></div>
            <div style="text-align: center; font-size: 35px; font-weight: 600; color: rgb(39, 39, 39)">GOBIERNO ESCOLAR 2023 - INEAN</div>
            <div style="text-align: center; font-size: 25px; font-weight: 600; color: #3199ee">CONSEJO - GRADO {{ auth()->user()->Grado }}</div>
            <div style="padding: 15px;"></div>


                <div class="container-x">
                    @foreach ($Concejo as $Csj)
                        <div class="Box CONSEJO" data-reg="{{ $Csj->id }}">
                            <div> <img src="{{ asset('Candi_700/'.$Csj->photo)}}" alt="" width="280" height="280">  </div>
                            <div class="tac" style="font-size: 20px; font-weight: bolder;">{{ $Csj->nombres }} {{ $Csj->apellidos }}</div>
{{--                             <div class="tac">GRADO: {{ $Csj->grado }} </div>                
                            <div class="tac">GRUPO: {{ $Csj->grupo }} </div>    
                            <div class="tac">{{ $Csj->cargo }} </div>    --}}          
                        </div>
                        <div style="padding: 12px;"></div>
                    @endforeach

                </div>
                
                <div style="padding: 20px;"></div>
        @else

        <div style="padding: 10px;"></div>
        <div style="text-align: center; font-size: 35px; font-weight: 600; color: rgb(39, 39, 39)">GOBIERNO ESCOLAR 2023 - INEAN</div>
        <div style="text-align: center; font-size: 25px; font-weight: 600; color: #3199ee">PERSONERO - GRADO 11</div>
        <div style="padding: 15px;"></div>

                <div class="container-x">
                    @foreach ($Personero as $Psn)
                        <div class="Box PERSONERO" data-reg="{{ $Psn->id }}" >
                            <div> <img src="{{ asset('Candi_700/'.$Psn->photo)}}" alt="" width="280" height="280">  </div>
                            <div class="tac" style="font-size: 20px; font-weight: bolder;">{{ $Psn->nombres }} {{ $Psn->apellidos }}</div>
{{--                             <div class="tac">GRADO: {{ $Psn->grado }} </div>                
                            <div class="tac">GRUPO: {{ $Psn->grupo }} </div>    
                            <div class="tac">{{ $Psn->cargo }} </div>         --}}     
                        </div>
                        <div style="padding: 12px;"></div>
                    @endforeach
                </div>
                <div style="padding: 20px;"></div>

        @endif     
    
    @endif     

</div>

<script>

    Easy.SvCsj("CONSEJO");
    Easy.SvPsn("PERSONERO");
</script>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado Votaciones</title>
</head>
<body>

    <style>

        .Tam {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #d3d3d3;
        }

        .Tam td, .Tam th {
            padding: 16px;
            font-size: 13px;
            color: #002555;
            text-align: center;
        }

        .Tam tr:nth-child( odd) { Background-color: #FFF; }
        .Tam tr:nth-child( even ) { Background-color: #f2fcff;}

        .Tam tr:hover {background-color: #e3edff;}

        .Tam th {
            padding: 14px 0px;
            text-align: center;
            background-color: #a7d4fd;
            color: #303030;
            font-size: 15px;
            font-weight: 100;
            border-top: 1px solid #f3f3f3;
            border-bottom: 1px solid #f3f3f3;
            font-weight: 600;
        }

        .container-x{
            width: 100%;
            background-color: #ffffff;
            display: flex; 
            justify-content: center; 
            align-items: center;
        }



    </style>


        <div style="text-align: center; font-size: 25px; font-weight: 600; color: rgb(39, 39, 39)">GOBIERNO ESCOLAR 2023 - INEAN</div>
        <div style="text-align: center; font-size: 18px; font-weight: 600; color: #3199ee">RESULTADO VOTACIONES</div>

        <div style="padding: 10px;"></div>

    <div class="container-x">        

        <div style="width: 968px">
            <table class="Tam">
                <thead>
                    <tr>
                        <th>Nombre</th> <th>Grado</th> <th>Grupo</th> <th>Cargo</th> <th>Total Votos</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($Dats as $item)
                        @if($item->cargo == 'CONCEJO')
                            <tr>                     
                                <td style="font-weight: 600; color: #131313;">{{ $item->nombres }} {{ $item->apellidos }} </td>
                                <td class="atd">{{ $item->grado }}</td>
                                <td class="atd">{{$item->grupo}}</td>
                                <td class="atd">{{$item->cargo}}</td>                            
                                <td class="atd">{{ $item->VOTOS }}</td>   
                        @endif                  
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>    

    <div style="padding: 10px;"></div>

    <div class="container-x">        

        <div style="width: 968px">
            <table class="Tam">
                <thead>
                    <tr>
                        <th>Nombre</th> <th>Grado</th> <th>Grupo</th> <th>Cargo</th> <th>Total Votos</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($Dats as $item)
                        @if($item->cargo == 'PERSONERO')
                            <tr>                     
                                <td style="font-weight: 600; color: #131313;">{{ $item->nombres }} {{ $item->apellidos }} </td>
                                <td class="atd">{{ $item->grado }}</td>
                                <td class="atd">{{$item->grupo}}</td>
                                <td class="atd">{{$item->cargo}}</td>                            
                                <td class="atd">{{ $item->VOTOS }}</td>                  
                            </tr>
                        @endif
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div> 

    
</body>
</html>
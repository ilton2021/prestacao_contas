<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Prestação de Contas</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center>SISTEMAS HCP GESTÃO</center></div>
                <div class="card-body">
                	<br>
					<table class="table">
				     <tr>
					   <td>  
					    <center><img src="{{ asset('img/portalTransparencia.png') }}" width="200" height="100"></center>
						<center><a target="_blank" href="http://www.hcpgestao-portal.hcpgestao.org.br">Portal da Transparência</a></center>
					   </td>
					   <td>
					     <center><img src="{{ asset('img/mp.png') }}" width="200" height="100"></center>
						 <center><a href="http://www.hcpgestao-mprh.hcpgestao.org.br" target="_blank">Movimentação De Pessoal</a></center>
					   </td>
					   <td>
					     <center><img src="{{ asset('img/BI.png') }}" width="200" height="100"></center>
						 <center><a href="{{ route('login') }}">Indicadores - BI</a></center>
					   </td>
					 </tr> 
					 <tr> 
					   <td> <br>
					     <center><img src="{{ asset('img/processoSeletivo.png') }}" width="200" height="100"></center> 
						 <center><a href="http://www.hcpgestao-processo.hcpgestao.org.br" target="_blank">Processo Seletivo</a></center>
					   </td>
					   <!--td> <br>
					     <center><img src="{{ asset('img/escalaPlantao.png') }}" width="200" height="100"></center>
						 <center><a href="http://www.escala.hcpgestao.org.br" target="_blank">Escala de Trabalho</a></center>
					   </td-->
					 </tr>
				   </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

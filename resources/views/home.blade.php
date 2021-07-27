@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Prestação de Contas</div>

                <div class="card-body">
                    @if(Auth::user()->email == "ricardo.tompson@hcpgestao.org.br")
					<p align="right"><a href="{{ route('cadastrarLinks') }}" class="btn btn-info btn-sm">CADASTRAR LINK</a></p>
					@endif
					<br>
					<table class="table table-bordered">
				     <tr> <td align="left"><B> {{ 'DIÁRIO' }}</B></td></tr>
					 <tr>
				       <td style="width: 500px"><b>DESCRIÇÃO:</b></td>
					   <td style="width: 400px"><center><b>LINK:</b></center></td>
					   <td style="width: 200px"><b>ATUALIZADO ATÉ:</b></td>
					 </tr>
				     <?php $qtd = sizeof($links); ?>
				     @if($qtd > 0)
					  @foreach($links as $l)
					   @if($l->tipo == 'DIÁRIO')
					   <tr>	
					    <td> {{ $l->descricao }} </td>
						<td><center> <a href="<?php echo $l->link; ?>" target="_blank"> <input title="<?php echo $l->link; ?>" type="button" class="btn btn-success btn-sm" value="ACESSAR LINK" /> </a> </center></td>
						<td> {{ $l->atualizado }} </td>
					   </tr> 
					   @endif
					  @endforeach
				     @endif
				   </table>
				   <table class="table table-bordered">
				     <tr> <td align="left"><B> {{ 'MENSAL' }} </B></td></tr>
					 <tr>
				       <td style="width: 500px"><b>DESCRIÇÃO:</b></td>
					   <td style="width: 400px"><b><center>LINK:</center></b></td>
					   <td style="width: 200px"><b>ATUALIZADO ATÉ:</b></td>
					 </tr>
				     <?php $qtd = sizeof($links); ?>
				     @if($qtd > 0)
					  @foreach($links as $l)
					   @if($l->tipo == 'MENSAL')
					   <tr>	
					    <td> {{ $l->descricao }} </td>
						<td><center> <a href="<?php echo $l->link; ?>" target="_blank"> <input title="<?php echo $l->link; ?>" type="button" class="btn btn-success btn-sm" value="ACESSAR LINK" /> </a> </center></td>
						<td> {{ $l->atualizado }} </td>
					   </tr> 
					   @endif
					  @endforeach
				     @endif
				   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

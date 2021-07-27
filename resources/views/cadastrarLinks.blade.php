@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
		   @if ($errors->any())
			@if($a == 0) <div class="alert alert-danger">  @else
						 <div class="alert alert-success"> @endif
			 <ul>
			  @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			  @endforeach
			 </ul>
			</div>
		   @endif 
            <div class="card">
                <div class="card-header">Cadastrar Links:</div>
                <div class="card-body">
				 <table class="table">
				  <tr>
				  <td>
				    <p align="left"><a href="{{ url('/home/') }}" class="btn btn-warning btn-sm">VOLTAR</a></p> 
				  </td> 
				  <td>
				    <p align="right"><a href="{{ route('novoLinks') }}" class="btn btn-info btn-sm">CADASTRAR NOVO LINK</a></p>
				  </td>
				  </tr>
				   <tr>
				     <td>DESCRIÇÃO:</td>
					 <td>LINK:</td>
					 <td> </td>
					 <td> </td>
				   </tr>
				   <?php $qtd = sizeof($links); ?>
				   @if($qtd > 0)
					@foreach($links as $l)
					<tr>	
					 <td> <input type="text" class="form-control" readonly="true" title="<?php echo $l->descricao; ?>" value="<?php echo $l->descricao; ?>" style="width: 300px" /> </td>
					 <td> <input type="text" class="form-control" readonly="true" title="<?php echo $l->link; ?>" style="width: 400px" id="link2" name="link2" value="<?php echo $l->link; ?>" /> </td>
					 <td> <a href="{{ route('atualizarLinks', $l->id) }}" class="btn btn-info btn-sm">ATUALIZAR</a> </td>
					 <td> <a href="{{ route('excluirLinks', $l->id) }}" class="btn btn-danger btn-sm">EXCLUIR</a> </td>
					</tr> 
					@endforeach
				   @endif
				 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

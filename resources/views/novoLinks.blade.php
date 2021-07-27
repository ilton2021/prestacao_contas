@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                <div class="card-header">Cadastrar Novo Link:</div>
                <div class="card-body">
				 <form action="{{\Request::route('storeLinks')}}" method="POST">
				 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <table class="table table-hover m-b-0 without-header">
                    <tr>
					  <td> DESCRIÇÃO: </td>
					  <td><input style="width: 500px;" type="text" required="true" class="form-control" id="descricao" name="descricao" value="" /></td>
					</tr>
				    <tr>
					  <td> LINK: </td>
					  <td><textarea style="width: 500px;" type="text" required="true" class="form-control" id="link" name="link" value="" cols="10" rows="6"></textarea></td>
					</tr>
					<tr>
					  <td> TIPO: </td>
					  <td> 
						<select class="form-control" id="tipo" name="tipo" required="true">
							<option id="tipo" name="tipo" value="DIÁRIO">DIÁRIO</option>
							<option id="tipo" name="tipo" value="MENSAL">MENSAL</option>
						</select>
					  </td>
					</tr>
					<tr>
					  <td> ATUALIZADO EM: </td>
					  <td> <input type="text" id="atualizado" name="atualizado" required="true" class="form-control" /> </td>
					</tr>
					<tr>
					 <td align="left"><a href="{{ url('/home') }}" style="margin-top: 30px;" class="btn btn-warning btn-sm">VOLTAR</a></td>
					 <td align="right"><input type="submit" class="btn btn-success btn-sm" style="margin-top: 30px;" value="SALVAR" id="Salvar" name="Salvar" /> </td>
					</tr>
				  </table>
				 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

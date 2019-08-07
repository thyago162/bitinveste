@extends('app.templates.template')

@section('main')

    <div class="container">
        <div class="row titulo">
            <div class="col-lg-9">
                <h3>Investimentos</h3>
            </div>
            <div class="col-lg-3">
                <button class="btn btn-success" data-toggle='modal' data-target='#novoInvestimento'>Novo Investimento</button>
            </div>
        </div>
        <div class="row investimentos">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Saldo Atual</th>
                            <th>Saldo Anterior</th>
                            <th>Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investimentos as $investimento)
                            <tr>
                                <td>{{number_format($investimento->saldo_atual,2,',','.')}}</td>
                                <td>{{number_format($investimento->saldo_anterior,2,',','.') }}</td>
                                <td>{{date('d/m/Y', strtotime($investimento->data))}}</td>
                                <td><form method="POST" action="investimentos/remover">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id_investimento" value="{{$investimento->id_investimento }}">
                                        <button type="submit" style="background-color:whitesmoke;border:none;">        
                                            <img src="{{asset('img/trash.png') }}" alt="remover" width="20" height="20">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                    

                </table>
              
            </div>
        </div>
        <div class="paginacao">
                {{ $investimentos->links() }}
        </div> 
    </div>
    @include('app.src.investimento')
@endsection
@extends('app.templates.template')

@section('dashboard')

<div class="container">
    <div class="row dashboard">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Resumo</h3>
                        </div>
                        <div class="card-body info">
                            <div class="col-4">
                                <h5 class="card-text">Saldo R$: {{number_format($resumo->saldo_atual,2,',','.')}}</h5>
                            </div>
                            <div class="col-4">
                                <h5 class="card-text">Lucro: {{ (($resumo->saldo_atual / $resumo->saldo_anterior) -1 )*100}} %</h5>
                            </div>
                            <div class="col-4">
                                <h5 class="card-text">Última atualização: {{date('d/m/Y', strtotime($resumo->data)) }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="rendimento">Rendimentos</h4>
            <div class="row">
                <div class="col-lg-6">
                    
                    @include('app.src.saldo')
                </div>
                <div class="col-lg-6">
                    @include('app.src.lucro')
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
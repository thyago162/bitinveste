<div class="modal fade" id="novoInvestimento" tabindex="-1" role="dialog" aria-labelledby="novoInvestimento" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cadastrar Investimento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/investimentos" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Saldo Anterior</label>
                        <input type="text" class="form-control" name="saldo_anterior" value="{{$saldoAnterior}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="text" class="form-control" name="saldo_atual" required>
                    </div>
                    <div class="form-group">
                        <label for="">Data</label>
                        <input type="date" name="data" class="form-control" required>
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
          </div>
    </div>
</div>
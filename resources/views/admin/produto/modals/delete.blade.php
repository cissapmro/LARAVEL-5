<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <div>
                    <h4 class="text-info"><i class="fa fa-trash fa-3x"></i>Excluir Produto</h4>
                </div>
            </div>
            <div id="conteudoModal" class="modal-body">


                <h3>Deseja realmente excluir esse produto?</h3>

                <p><b>Nome: </b> <span id="nome"></span> </p>
                <p><b>Descrição: </b> <span id="descricao"></span> </p>

            </div>

            <div class="modal-footer">

                <a id="btnExcluir" href="#" class="btn btn-danger">Excluir produto</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<style>
    #modal {
        overflow-y: auto;
    }
</style>
       
   

   
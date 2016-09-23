<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDelete">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <div>
                     <h4 class="text-info"><i class="fa fa-pencil fa-3x"></i>Categorias</h4>
                </div>
           </div>
                                    <div class="modal-body">
                                        <p>Tem certeza que deseja deletar {{ $categoria->name }}?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-danger" href="{{ route('admin.categoria.deletar',['id'=>$categoria->id]) }}"><i class="fa fa-trash fa-lg"></i> Deletar</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


            <!--<div class="modal-footer">
                {{ Form::open(array('id'=>'DeletForm')) }}
                <button type="button" class="btn btn-primary" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-danger" data-message-title="Deletar Posts" data-message-success="Dados deletados">Yes</button>
                {{ Form::close() }}
            </div>-->
       

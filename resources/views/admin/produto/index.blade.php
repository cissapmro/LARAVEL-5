@extends('template')
@section('content')

    @if($errors->any())
        <div class='alert alert-danger'>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        </div>

    @endif

    <div class="painel">
        <div class="panel-header">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-create">
                Adicionar Produto
            </button>

            <div class="pull-right">
                <!-- <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-file-excel-o fa-lg"></i> Exportar</button>
                 <button class="btn fa-btn-color" type="submit" name="visualizar"> <i class="fa fa-print fa-lg"></i> Imprimir</button>-->
            </div>
        </div>
        <!-- <div class="page-header">
             <div class="text-info">
                 <h4 class="text-info">
                     <i class="fa fa-folder-open fa-2x"></i> Produtos
                 </h4>
             </div>
         </div>-->
        <br/>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="table-responsive">

                    <table class="table table-striped table-hover table-condensed" id="table-list">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                            <th>Destaque</th>
                            <th>Recomendar</th>

                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($produtos as $produto)

                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->name }}</td>
                                <td>{{ $produto->description }}</td>
                                <td>{{ $produto->price }}</td>
                                <td>{{ $produto->category->name }}</td>
                                <td>
                                    @if ($produto->featured==0)
                                        Mais vendidos
                                    @else
                                        Em promoção
                                    @endif

                                </td>
                                <td>
                                    @if ($produto->recommend==0)
                                        Sim
                                    @else
                                        Não
                                    @endif
                                </td>
                                <td>
                                    <!-- <a href="#"><span class="btn btn-info"><i class="fa fa-pencil fa-lg fa-icon-color" ></i></span></a>-->

                                    <a id="btnEditar" href="javascript:void(0)" data-id="{{$produto->id}}">
                                        <span class="btn btn-info"><i class="fa fa-pencil"></i> Editar</span>
                                    </a>

                                    <a href="{{route('admin.produto.imagem', ['id'=>$produto->id])}}"> <span
                                                class="btn btn-info"><i class="fa fa-pencil"></i> Imagem</span></a>

                                    <a id="btnDeletar" href="javascript:void(0)" data-id="{{$produto->id}}">
                                        <span class="btn btn-info"><i class="fa fa-trash"></i> Deletar</span>
                                    </a>


                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <hr>

                <div class="pull-right">

                    {!!  $produtos->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection


@section("post-html")
    @include("admin.produto.modals.edit")
    @include("admin.produto.modals.create")
    @include("admin.produto.modals.delete")
@endsection

@section("post-scripts")
    <script type="text/javascript">
        $('#table-list a#btnEditar').click(function () {
            var idRegistro = $(this).data('id');

            $.get('/admin/products/' + idRegistro, function (produto) {
                $('#id').val(produto.id);
                $('#name').val(produto.name);
                $('#price').val(produto.price);
                $('#description').val(produto.description);
            });

            $('#modal-edit').modal('show');

        });

        $('#table-list a#btnDeletar').click(function () {
            var idRegistro = $(this).data('id');

            $.get('/admin/products/' + idRegistro, function (produto) {
                var btnExcluir = document.getElementById('btnExcluir');
                btnExcluir.setAttribute("href", "/admin/products/deletarProduto/"+idRegistro);
                $('#nome').html(produto.name);
                $('#descricao').html(produto.description);
            });

            $('#modal-delete').modal('show');

        });
    </script>
@endsection
   
   
 
<div id="imovel_info" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content clearfix">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ $imovel->titulo_imovel }}</h4>
      </div>
      <div class="modal-body clearfix">

        <div class="col-sm-12 clearfix">
          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4">
              <label>COD.Imóvel</label>
              <input class="form-control" type="text" name="cod_imovel" value="{{  $imovel->cod_imovel }}">
            </div>

            <div class="col-sm-6">
              <label>Título do imóvel</label>
              <input class="form-control" type="text" name="titulo_imovel" value="{{  $imovel->titulo_imovel }}">
            </div>
          </div>

          <div  class="row" style="margin-top: 20px;">
            <input class="form-control" id="id_tipo_imovel" type="hidden" name="id_tipo_imovel" value="{{  $imovel->id_tipo_imovel }}">

            <div class="col-sm-3">
              <button type="button" id_tipo="1" class="btn_imovel_tipo btn btn-block btn-info">Casa</button>
            </div>

            <div class="col-sm-3">
              <button type="button" id_tipo="2" class="btn_imovel_tipo btn btn-block btn-info">Apartamento</button>
            </div>

            <div class="col-sm-3">
              <button type="button" id_tipo="3" class="btn_imovel_tipo btn btn-block btn-info">Lote</button>
            </div>

            <div class="col-sm-3">
              <button type="button" id_tipo="4" class="btn_imovel_tipo btn btn-block btn-info">Chácara</button>
            </div>
          </div>

          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-3">
              <label>Preço</label>
              <input class="form-control" type="text" name="preco_imovel" value="{{  $imovel->preco_imovel }}">
            </div>

            <div class="col-sm-3">
              <label>Area do imóvel</label>
              <input class="form-control" type="text" name="area_imovel" value="{{  $imovel->area_imovel }}">
            </div>

            <div class="col-sm-3">
              <label>Quantidade de dormitórios</label>
              <input class="form-control" type="text" name="qtd_dormitorios_imovel" value="{{  $imovel->qtd_dormitorios }}">
            </div>

            <div class="col-sm-3">
              <label>Imagem do imóvel</label>
              <input class="form-control" type="file" name="imagem_imovel" value="{{  $imovel->imagem_imovel }}">
            </div>
          </div>

          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-2">
              <label>CEP</label>
              <input id="cep" class="form-control" type="text" name="cep_imovel" value="{{  $imovel->cep }}">
            </div>

            <div class="col-sm-3">
              <label>Cidade</label>
              <input id="cidade" class="form-control" type="text" name="cidade_imovel" value="{{  $imovel->cidade }}">
            </div>

            <div class="col-sm-3">
              <label>Bairro</label>
              <input id="bairro" class="form-control" type="text" name="bairro_imovel" value="{{  $imovel->bairro }}">
            </div>

            <div class="col-sm-4">
              <label>Estado</label>
              <input id="estado" class="form-control" type="text" name="estado_imovel" value="{{  $imovel->estado }}">
            </div>
          </div>

          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-4">
              <label>Rua</label>
              <input id="rua" class="form-control" type="text" name="rua_imovel" value="{{  $imovel->rua }}">
            </div>

            <div class="col-sm-4">
              <label>Numero</label>
              <input id="numero" class="form-control" type="text" name="numero_imovel" value="{{  $imovel->numero }}">
            </div>

            <div class="col-sm-4">
              <label>Complemento</label>
              <input id="complemento" class="form-control" type="text" name="complemento_imovel" value="{{  $imovel->complemento }}">
            </div>
          </div>

          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12">
              <label>Descricao do imóvel</label>
              <textarea class="form-control" type="text" name="descricao_imovel">{{  $imovel->descricao_imovel }}</textarea>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
        <button type="button" class="btn btn-success">Salvar</button>
      </div>
    </div>
  </div>
</div>
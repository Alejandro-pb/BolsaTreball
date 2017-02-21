<div class="modal inmodal fade" id="myModalEmpresa1" tabindex="10" role="dialog" style="z-index: 10000;"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form class="form-horizontal" id="deleteEmpresa">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <p class="modal-title"><i class="fa fa-trash-o"></i> Eliminar empresa</p>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              <input type="hidden" value="" id="idEmpresaEliminar" name="EmpresaDelete">
              <p style="font-size:16px; text-align:center">Seguro que quieres eliminar esta empresa?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                <button id="removeEmpresa" type="button" data-dismiss="modal" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
      </form>
    </div>
</div>
<div class="modal inmodal fade" id="myModalEmpresa2" tabindex="-1" role="dialog"  style="z-index: 10000;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form class="form-horizontal" id="newEmpresa">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <p class="modal-title"><i class="fa fa-plus"></i> Nueva empresa</p>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Nombre empresa:</label>
                <input placeholder="Colaborador" class="form-control" type="text" value="" name="nom">
                <label>Dirección:</label>
                <input placeholder="Dirección" class="form-control" type="text" value="" name="direccion">
                <label>Campo test</label>
                <input placeholder="Test" class="form-control" type="text" value="" name="test">
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                <button id="addEmpresa" type="button" data-dismiss="modal" class="btn btn-success">Crear</button>
            </div>
        </div>
      </form>
    </div>
</div>
<div class="modal inmodal fade" id="myModalEmpresa3" tabindex="-1" role="dialog" style="z-index: 10000;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form class="form-horizontal" id="modificarColaboradorForm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <p class="modal-title"><i class="fa fa-pencil"></i> Edit Colaborador</p>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              <input type="hidden" value="" name="id" id="IdColaborador">
              <div class="form-group">
                <label>Nom Colaborador:</label>
                <input placeholder="Colaborador" id="NomColaborador" class="form-control" type="text" value="" name="nom">
                <input placeholder="Imatge" id="ImatgeColaborador" class="form-control" type="text" value="" name="imatge">
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancel·lar</button>
                <button id="modificarColaborador" type="button" data-dismiss="modal" class="btn btn-success">Modificar</button>
            </div>
        </div>
      </form>
    </div>
</div>

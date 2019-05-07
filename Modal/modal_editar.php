<div id="editProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmProductoEdit" action="" method="POST" name="frmProductoEdit">
                <div class="modal-header">						
                    <h4 class="modal-title">Editar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lbCodigoProducto">Código de producto</label>
                        <input type="text" class="form-control form-control-sm" id="CodigoProducto" name="CodigoProducto" aria-describedby="Codigo producto" placeholder="Código producto">
                        <input type="hidden" name="IdProducto" id="IdProducto">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
                    </div>                
                    <div class="form-group">
                        <label for="lbNombreProducto">Nombre de producto</label>
                        <input type="text" class="form-control form-control-sm" id="NombreProducto" name="NombreProducto" aria-describedby="Nombre producto" placeholder="Nombre producto">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>                        
                    <div class="form-group">
                        <label for="lbMarcaProducto">Marca de producto</label>
                        <input type="text" class="form-control form-control-sm" id="MarcaProducto" name="MarcaProducto" aria-describedby="Marca producto" placeholder="Marca producto">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
                    </div>            
                    <div class="form-group">
                        <label for="lbPrecioCompra">Precio de compra</label>
                        <input  type="number" min="1" step="any" class="form-control form-control-sm" id="PrecioCompra" name="PrecioCompra" aria-describedby="Precio compra" placeholder="Precio compra">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>                        
                    <div class="form-group">
                        <label for="lbCantidadCompra">Cantidad de compra</label>
                        <input  type="number" min="1" step="any" class="form-control form-control-sm" id="CantidadCompra" name="CantidadCompra" aria-describedby="Cantidad compra" placeholder="Cantidad compra">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Guardar datos">
                </div>
            </form>
        </div>
    </div>
</div>
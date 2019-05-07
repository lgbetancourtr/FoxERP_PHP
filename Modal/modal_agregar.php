<div id="addProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frmProducto" action="" method="POST" name="frmProducto">
                <div class="modal-header">						
                    <h4 class="modal-title">Agregar Producto</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="lbCodigoProducto">Código de producto</label>
                        <input type="text" class="form-control form-control-sm" id="txtCodigoProducto" name="txtCodigoProducto" aria-describedby="Codigo producto" placeholder="Código producto">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
                    </div>                
                    <div class="form-group">
                        <label for="lbNombreProducto">Nombre de producto</label>
                        <input type="text" class="form-control form-control-sm" id="txtNombreProducto" name="txtNombreProducto" aria-describedby="Nombre producto" placeholder="Nombre producto">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>                        
                    <div class="form-group">
                        <label for="lbMarcaProducto">Marca de producto</label>
                        <input type="text" class="form-control form-control-sm" id="txtMarcaProducto" name="txtMarcaProducto" aria-describedby="Marca producto" placeholder="Marca producto">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
                    </div>            
                    <div class="form-group">
                        <label for="lbPrecioCompra">Precio de compra</label>
                        <input  type="number" min="1" step="any" class="form-control form-control-sm" id="txtPrecioCompra" name="txtPrecioCompra" aria-describedby="Precio compra" placeholder="Precio compra">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>                        
                    <div class="form-group">
                        <label for="lbCantidadCompra">Cantidad de compra</label>
                        <input  type="number" min="1" step="any" class="form-control form-control-sm" id="txtCantidadCompra" name="txtCantidadCompra" aria-describedby="Cantidad compra" placeholder="Cantidad compra">
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
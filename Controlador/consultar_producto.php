<?php
require('../config.php');

$query="select id,codigo_producto,nombre_producto,marca_producto,precio_compra,cantidad_comprada from tabla05";

$result = mysqli_query($con,$query) or die(mysql_error());

if($result){
?>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class='text-center'>ID</th>
                <th>Codigo </th>
                <th>Nombre </th>
                <th class='text-center'>Marca</th>
                <th class='text-right'>Precio</th>
                <th class='text-right'>Cantidad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($result)){	
                $product_id=$row['id'];
                $codigo_producto=$row['codigo_producto'];
                $nombre_producto=$row['nombre_producto'];
                $marca_producto=$row['marca_producto'];
                $precio_compra=$row['precio_compra'];
                $cantidad_comprada=$row['cantidad_comprada'];						                
            ?>
            <tr>
                <td class='text-center'><?php echo $product_id;?></td>
                <td ><?php echo $codigo_producto;?></td>
                <td ><?php echo $nombre_producto;?></td>
                <td class='text-center' ><?php echo $marca_producto;?></td>
                <td class='text-right'><?php echo number_format($precio_compra,2);?></td>
                <td class='text-right'><?php echo $cantidad_comprada;?></td>
                <td>
                    <a href="#"  data-target="#editProductModal" class="edit" data-toggle="modal" data-code='<?php echo $product_id;?>' data-name="<?php echo $prod_name?>" data-category="<?php echo $prod_ctry?>" data-stock="<?php echo $prod_qty?>" data-price="<?php echo $price;?>" data-id="<?php echo $product_id; ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
                    <a href="#deleteProductModal" class="delete" data-toggle="modal" data-id="<?php echo $product_id;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                </td>
            </tr> 
            <?php }?>
        </tbody>			
	</table>
</div>	        	
<?php
}
?>
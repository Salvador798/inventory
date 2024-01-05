<div class="container is-fluid mb-2">
    <h1 class="title">Productos</h1>
    <h2 class="subtitle"><i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto</h2>
</div>

<div class="container pb-2 pt-2">

    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/productoAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">

        <input type="hidden" name="modulo_producto" value="registrar">

        <div class="columns">
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,77}" maxlength="77" required>
                    <label>Código de barra <?php echo CAMPO_OBLIGATORIO; ?></label>
                </div>
            </div>
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,100}" maxlength="100" required>
                    <label>Nombre <?php echo CAMPO_OBLIGATORIO; ?></label>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_precio_compra" pattern="[0-9.]{1,25}" maxlength="25" value="0.00" required>
                    <label>Precio de compra <?php echo CAMPO_OBLIGATORIO; ?></label>
                </div>
            </div>
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_precio_venta" pattern="[0-9.]{1,25}" maxlength="25" value="0.00" required>
                    <label>Precio de venta <?php echo CAMPO_OBLIGATORIO; ?></label>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_stock" pattern="[0-9]{1,22}" maxlength="22" required>
                    <label>Stock o existencias <?php echo CAMPO_OBLIGATORIO; ?></label>
                </div>
            </div>
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_marca" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" maxlength="30">
                    <label>Marca</label>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column form">
                <div class="control form-item">
                    <input class="input" type="text" name="producto_modelo" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" maxlength="30">
                    <label>Modelo</label>
                </div>
            </div>
            <div class="column form">
                <div class="control form-item">
                    <label>Presentación del producto <?php echo CAMPO_OBLIGATORIO; ?></label><br>
                    <div class="select">
                        <select name="producto_unidad">
                            <option value="" selected="">Seleccione una opción</option>
                            <?php
                            echo $insLogin->generarSelect(PRODUCTO_UNIDAD, "VACIO");
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="column form">
                <div class="control form-item">
                    <label>Categoría <?php echo CAMPO_OBLIGATORIO; ?></label><br>
                    <div class="select">
                        <select name="producto_categoria">
                            <option value="" selected="">Seleccione una opción</option>
                            <?php
                            $datos_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "*", 0);

                            $cc = 1;
                            while ($campos_categoria = $datos_categorias->fetch()) {
                                echo '<option value="' . $campos_categoria['categoria_id'] . '">' . $cc . ' - ' . $campos_categoria['categoria_nombre'] . '</option>';
                                $cc++;
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <p class="has-text-centered">
            <button type="reset" class="button is-link is-light is-rounded"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
            <button type="submit" class="button is-info is-rounded"><i class="far fa-save"></i> &nbsp; Guardar</button>
        </p>
        <p class="has-text-centered pt-6">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
    </form>
</div>
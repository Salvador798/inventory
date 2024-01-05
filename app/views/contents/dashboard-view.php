<div class="container is-fluid">
	<h1 class="title">Dashboard</h1>
	<div class="columns is-flex is-justify-content-center">
		<figure class="image is-128x128">
			<?php
			if (is_file("./app/views/fotos/" . $_SESSION['foto'])) {
				echo '<img class="is-rounded" src="' . APP_URL . 'app/views/assets/fotos/' . $_SESSION['foto'] . '">';
			} else {
				echo '<img class="is-rounded" src="' . APP_URL . 'app/views/assets/fotos/default.png">';
			}
			?>
		</figure>
	</div>
	<div class="columns is-flex is-justify-content-center">
		<h2 class="subtitle">¡Bienvenido <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>!</h2>
	</div>
</div>
<?php
$total_usuarios = $insLogin->seleccionarDatos("Normal", "usuario WHERE usuario_id!='1' AND usuario_id!='" . $_SESSION['id'] . "'", "usuario_id", 0);
$total_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "categoria_id", 0);
$total_productos = $insLogin->seleccionarDatos("Normal", "producto", "producto_id", 0);
?>

<div class="container pb-6 pt-6">

	<div class="columns pb-6">
		<div class="column">
			<nav class="level is-mobile">
				<div class="level-item has-text-centered">
					<a href="#">
						<p class="heading"><i class="fas fa-users fa-fw"></i> &nbsp; Usuarios</p>
						<p class="title"><?php echo $total_usuarios->rowCount(); ?></p>
					</a>
				</div>
			</nav>
		</div>
	</div>

	<div class="columns pt-6">
		<div class="column">
			<nav class="level is-mobile">
				<div class="level-item has-text-centered">
					<a href="">
						<p class="heading"><i class="fas fa-tags fa-fw"></i> &nbsp; Categorías</p>
						<p class="title"><?php echo $total_categorias->rowCount(); ?></p>
					</a>
				</div>
				<div class="level-item has-text-centered">
					<a href="productList/">
						<p class="heading"><i class="fas fa-cubes fa-fw"></i> &nbsp; Productos</p>
						<p class="title"><?php echo $total_productos->rowCount(); ?></p>
					</a>
				</div>

			</nav>
		</div>
	</div>

</div>
<div class="container is-fluid mb-2">
	<h1 class="title">Usuarios</h1>
	<h2 class="subtitle"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</h2>
</div>
<div class="container pb-2 pt-2">

	<div class="form-rest mb-6 mt-6"></div>
	<?php

	use app\controllers\userControllers;

	$insUsuario = new userControllers();

	echo $insUsuario->listarUsuarioControlador($url[1], 15, $url[0], "");
	?>
</div>
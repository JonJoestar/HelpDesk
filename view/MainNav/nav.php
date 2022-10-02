<?php
	if($_SESSION["rol_id"]==1){
		?>
		<nav class="side-menu">
			<ul class="side-menu-list">
				<li class="blue-dirty">
					<a href="..\Home\">
						<span class="glyphicon glyphicon-th"></span>
						<span class="lbl">Inicio</span>
					</a>
				</li>
				<li class="orange-red with-sub">
					<a href="..\NuevoTicket\">
						<span class="font-icon font-icon-help"></span>
						<span class="lbl">Nuevo Ticket</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="..\ConsultarTicket\">
						<span class="font-icon font-icon-notebook"></span>
						<span class="lbl">Consultar Ticket</span>
					</a>
				</li>
				</ul>
			</section>
		</nav><!--.side-menu-->

		<?php
	}else{
		?>
		<nav class="side-menu">
			<ul class="side-menu-list">
				<li class="blue-dirty">
					<a href="..\Home\">
						<span class="glyphicon glyphicon-th"></span>
						<span class="lbl">Inicio</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="..\MntUsuario\">
						<span class="glyphicon glyphicon-th"></span>
						<span class="lbl">Mantenimiento Usuario</span>
					</a>
				</li>

				<li class="blue-dirty">
					<a href="..\ConsultarTicket\">
						<span class="font-icon font-icon-notebook"></span>
						<span class="lbl">Consultar Ticket</span>
					</a>
				</li>
				</ul>
			</section>
		</nav><!--.side-menu-->
		<?php
	}
?>

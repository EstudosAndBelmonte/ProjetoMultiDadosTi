		<?php
		$opcMenu = array(
			"cadastro" => ["Cliente", "Fornecedor", "Perfil de acesso", "Produtos", "Usuário"],
			"relatorio" => ["Cliente", "Faturamento", "Produtos"]
		);
		?>

		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu">
					<li class="sidebar-toggler-wrapper">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<div class="sidebar-toggler hidden-phone">
						</div>
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					</li>
					<li class="sidebar-search-wrapper">
						<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
						<form class="sidebar-search" action="extra_search.html" method="POST">
							<div class="form-container">
								<div class="input-box">
									<a href="javascript:;" class="remove"></a>
									<input type="text" placeholder="Search..." />
									<input type="button" class="submit" value=" " />
								</div>
							</div>
						</form>
						<!-- END RESPONSIVE QUICK SEARCH FORM -->
					</li>
					<li class="start active ">
						<a href="index.php">
							<i class="fa fa-home"></i>
							<span class="title">
								Dashboard
							</span>
							<span class="selected">
							</span>
						</a>
					</li>
					<!--Cliente-->
					<li class="">
						<a href="javascript:;">
							<i class="fa fa-file-text"></i>
							<span class="title">
								Cadastro
							</span>
							<span class="arrow ">
							</span>
						</a>
						<ul class="sub-menu">
							<?php
							foreach ($opcMenu['cadastro'] as $linha) {
							?>
								<li>
									<a href="#"><?= $linha ?></a>
								</li>
							<?php } ?>
						</ul>
					</li>
					<!--Relatorio-->
					<li class="">
						<a href="javascript:;">
							<i class="fa fa-bar-chart-o"></i>
							<span class="title">
								Relatório
							</span>
							<span class="arrow ">
							</span>
						</a>
						<ul class="sub-menu">

							<?php
							foreach ($opcMenu['relatorio'] as $linha) {
							?>
								<li>
									<a href="#"><?= $linha ?></a>
								</li>
							<?php } ?>

						</ul>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
		<!-- END SIDEBAR -->

		<?php



		?>
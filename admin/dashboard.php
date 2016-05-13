<?php do_action("bii_options_submit"); ?>
<div class="bii_dashboard">
	<div class="message"><?php
		if (isset($_SESSION["bii_message"])) {
			echo $_SESSION["bii_message"];
		}
		?></div>
	<div class="titre">
		<h1><h1 class="faa-parent animated-hover"><span class="fa fa-building faa-pulse"></span> Plugin Biimmo version <?= Biimmo_version; ?></h1>
	</div>
	<div class="col-xxs-12 col-md-10">
		<div class="col-xxs-12">
			<div class="meta-box-holder">
				<ul class="nav nav-tabs bii-option-title">
					<?php do_action("bii_options_title"); ?> 
				</ul>
				<form method="post" id="poststuff" action="<?= get_admin_url(); ?>admin.php?page=<?= global_class::wp_nom_menu(); ?>">
					<?php do_action("bii_options"); ?> 
					<?php if (bii_canshow_debug()) { ?>
						<div class="col-xxs-12 pl-zdt bii_option hidden">
							<h2 class="faa-parent animated-hover"><i class="fa fa-cogs faa-ring"></i> Zone de test</h2>
							<div class="col-xxs-4">
								<button class="btn btn-primary import" id="import-test" data-from="0" data-to="2"><i class="fa fa-arrow-right"></i><i class="fa fa-database"></i> Import test <i class="fa fa-spinner hidden"></i></button>
							</div>
							<?php bii_makestuffbox("bii_last_paserelle", "Dernière passerelle", "text", "col-xxs-8"); ?>
							<?php ?>
						</div>
					<?php } ?>
					<div class="clear"></div>
					<button class="publier btn btn-success hidden" accesskey="p" tabindex="5"><span class="fa fa-save"></span> Enregistrer les modifications</button>
				</form>
			</div>
		</div>
	</div>



</div>
<div class='clear'></div>


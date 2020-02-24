<?php
/**
 * Template part for displaying page content in header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<div class="bottom-header static-header logo-right p-3">
					<div class="<?php
							if ($geniorama['button-set-multi-header-bottom']) {
								foreach($geniorama['button-set-multi-header-bottom'] as $clase_encabezado){
									if ($clase_encabezado == '1') {
										echo "container-fluid";
										break;
									} else {
										echo "container";
										break;
									}
								}
							} else {
								echo "container";
							}
						?>">
						<div class="row align-items-center justify-content-between">
							<div class="col-6 col-md-2 order-1 order-lg-2">
								<a href="<?php echo site_url(); ?>"><?php if ($geniorama['opt-logo-select'] == '1') {
									$url_logo_dark = $geniorama['img-logo-dark']['url'];
									

									echo "<img src='$url_logo_dark' class='img-brand'>";
								} else {
									$url_logo_light = $geniorama['img-logo-light']['url'];
									echo "<img src='$url_logo_light' class='img-brand'>";
								} ?>
								</a>
							</div>
							<div class="col-2  d-block d-md-none order-2">
								<button class="button-toggle-custom button-icon <?php add_class_button('button-menu-toggle'); ?>">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</button>
							</div>
							<div class="col-12 col-md-10 container-nav-header order-3 order-lg-1">
								<nav>
									<?php 
										wp_nav_menu( array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'items_wrap' => '<ul class="nav text-center justify-content-start">%3$s</ul>',
											'menu_class' => 'nav-item'
										) );
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>

				<!----Sticky header Right---->
				<?php foreach($geniorama['button-set-multi-header-bottom'] as $clase_encabezado): ?>
					<?php if ($clase_encabezado == '3'): ?>
						<div class="bottom-header sticky-header logo-left p-3">
								<div class="<?php
									if ($geniorama['button-set-multi-header-bottom']) {
										foreach($geniorama['button-set-multi-header-bottom'] as $clase_encabezado){
											if ($clase_encabezado == '1') {
												echo "container-fluid";
												break;
											} else {
												echo "container";
												break;
											}
										}
									} else {
										echo "container";
									}
								?>">
								<div class="row align-items-center justify-content-between">
									<div class="col-8 col-md-2 order-1 order-lg-2">
										<a href="<?php echo site_url(); ?>"><?php if ($geniorama['opt-logo-sticky-select'] == '1') {
											$url_logo_dark = $geniorama['img-logo-dark']['url'];
											

											echo "<img src='$url_logo_dark' class='img-fluid img-brand'>";
										} else {
											$url_logo_light = $geniorama['img-logo-light']['url'];
											echo "<img src='$url_logo_light' class='img-fluid img-brand'>";
										} ?>
										</a>
									</div>
									<div class="col-2  d-block d-md-none order-2 order-lg-3">
										<button class="button-toggle-custom button-icon <?php add_class_button('button-menu-toggle'); ?>">
											<i class="fa fa-bars" aria-hidden="true"></i>
										</button>
									</div>
									<div class="col-12 col-md-10 container-nav-header order-3 order-lg-1">
										<nav>
											<?php 
												wp_nav_menu( array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
													'items_wrap' => '<ul class="nav text-center justify-content-start">%3$s</ul>',
													'menu_class' => 'nav-item'
												) );
											?>
										</nav>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
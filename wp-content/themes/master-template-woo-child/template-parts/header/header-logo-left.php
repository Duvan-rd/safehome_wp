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

<!-------------------------------Logo left--------------------------------->
				<!----Static header left---->
			<div class="container-menu">	
				<div class="bottom-header static-header logo-left p-2">
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
							<div class="col-6 col-md-2 img-menu">
								<a href="<?php echo site_url(); ?>"><?php if ($geniorama['opt-logo-select'] == '1') {
									$url_logo_dark = $geniorama['img-logo-dark']['url'];
									echo "<img src='$url_logo_dark' class='img-brand'>";
								} else {
									$url_logo_light = $geniorama['img-logo-light']['url'];
									echo "<img src='$url_logo_light' class='img-brand'>";
								} ?>
								</a>
							</div>
							<?php if (has_nav_menu('menu-1') || has_nav_menu('menu-2')): ?>
								<div class="col-2 d-block d-md-none">
									<button class="button-toggle-custom button-icon <?php add_class_button('button-menu-toggle'); ?>">
										<i class="fa fa-bars" aria-hidden="true"></i>
									</button>
								</div>
							<?php else: ?>
								<div class="col-2 d-block d-md-none">
									<?php get_template_part('template-parts/navigation/button-open-menu'); ?>
								</div>
							<?php endif; ?>
							<div class="col-12 col-md-10 container-nav-header">
								<nav>
									<?php 
										if (has_nav_menu('menu-1')) {
											wp_nav_menu( array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
												'items_wrap' => '<ul class="nav text-center justify-content-end menu-principal">%3$s</ul>',
												'menu_class' => 'nav-item'
											) );
										}
									?>
								</nav>
							</div>

							<?php if ($geniorama['menu_lateral']): ?>
								<div class="col-1 d-none d-lg-block">
									<?php get_template_part('template-parts/navigation/button-open-menu'); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				</div>
				<?php if ($geniorama['menu_lateral'] && (has_nav_menu('menu-1') || has_nav_menu('menu-2')) && $geniorama['on-off-menu-lateral']): ?>
					<div class="button-open-menu-responsive d-flex d-md-none flex-column justify-content-center align-items-center open-menu">
						<button><i class="fas fa-caret-left"></i> Menú Lateral</button>
					</div>
				<?php endif; ?>

				<!----Sticky header left---->
				<?php foreach($geniorama['button-set-multi-header-bottom'] as $clase_encabezado): ?>
					<?php if ($clase_encabezado == '3'): ?>
						<div class="bottom-header sticky-header logo-left p-2">
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
									<div class="col-8 col-md-2">
										<a href="<?php echo site_url(); ?>"><?php if ($geniorama['opt-logo-sticky-select'] == '1') {
											$url_logo_dark = $geniorama['img-logo-dark']['url'];
											

											echo "<img src='$url_logo_dark' class='img-fluid img-brand'>";
										} else {
											$url_logo_light = $geniorama['img-logo-light']['url'];
											echo "<img src='$url_logo_light' class='img-fluid img-brand'>";
										} ?>
										</a>
									</div>
									<?php if (has_nav_menu('menu-1') || has_nav_menu('menu-2')): ?>
										<div class="col-2 d-block d-md-none">
											<button class="button-toggle-custom button-icon <?php add_class_button('button-menu-toggle'); ?>">
												<i class="fa fa-bars" aria-hidden="true"></i>
											</button>
										</div>
									<?php else: ?>
										<div class="col-2 d-block d-md-none">
											<?php get_template_part('template-parts/navigation/button-open-menu'); ?>
										</div>
									<?php endif; ?>
									<div class="col-12 col-md-9 container-nav-header">
										<nav>
											<?php 
												if (has_nav_menu('menu-1')) {
													wp_nav_menu( array(
														'theme_location' => 'menu-1',
														'menu_id'        => 'primary-menu',
														'items_wrap' => '<ul class="nav text-center justify-content-end menu-principal">%3$s</ul>',
														'menu_class' => 'nav-item'
													) );
												}
											?>
										</nav>
									</div>

									<?php if ($geniorama['menu_lateral']): ?>
										<div class="col-1 d-none d-lg-block">
											<?php get_template_part('template-parts/navigation/button-open-menu'); ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
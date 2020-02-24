<?php
/**
 * Template part for displaying lateral menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<div class="menu-lateral hidden-menu" id="menu-lateral">
				<div class="row align-items-center mb-3">
					<div class="col-10">
						<a href="<?php echo site_url(); ?>"><?php if ($geniorama['opt-logo-select-menu-lateral'] == '1') {
									$url_logo_dark = $geniorama['img-logo-dark']['url'];
									echo "<img src='$url_logo_dark' class='img-brand'>";
								} else {
									$url_logo_light = $geniorama['img-logo-light']['url'];
									echo "<img src='$url_logo_light' class='img-brand'>";
								} ?>
						</a>
					</div>
					<div class="col-2">
						<?php get_template_part('template-parts/navigation/button-close-menu'); ?>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
                        <?php 
                            if (has_nav_menu('menu-3')) {
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-3',
                                    'menu_id'        => 'sidebar-menu',
                                    'items_wrap' => '<ul class="nav nav-menu-lateral flex-column text-left">%3$s</ul>',
                                    'menu_class' => 'nav-item'
                                ) );
                            }
						?>
					</div>
				</div>

				
				<?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
					<?php if($valor_campo == '3'): ?>
						<div class="menu-lateral-social-shapes">
							<hr class="separator">
							<div class="content d-flex justify-content-between align-items-center">
								<span class="text-nav">Síguenos en:</span>
								<?php get_template_part('template-parts/navigation/menu-lateral-social-buttons') ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
		</div>
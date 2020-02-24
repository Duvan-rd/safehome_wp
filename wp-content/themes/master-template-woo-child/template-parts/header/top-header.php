<?php
/**
 * Template part for displaying page content in top header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>
<div class="top-header">
				<div class="<?php
					if ($geniorama['header-top-full-w-on-off'] == '1') {
						echo "container-fluid";
					} else {
						echo "container";
					}			
				?>">
					<div class="row align-items-center justify-content-between">
						<div class="col-12 col-md-6 container-top-header">
							<ul class="nav justify-content-start text-left menu-links-top-header">
								<!--Email header-->
								<li class="nav-item">
									<p>Lun - Vie 8:00 a.m - 5:00 p.m </p>	
								</li>
							</ul>
						</div>
						
						
						<?php if($geniorama['opt-multi-select-social-buttons'] || $geniorama['search-on-off']): ?>
						<div class="col-12 col-md-6">
							<ul class="nav justify-content-end">
								<?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
											<?php if($valor_campo == '2'): ?>
												<p class="popover-button"><a href="#" class="float-link"><i class="fas fa-mobile-alt"></i> TE LLAMAMOS</a></p>
											
												<?php if ($geniorama['float-li-button'] == '1' && $geniorama['social-li']): ?>
													<!-- Linked In -->
													<li class="nav-item">
														<a href="<?php echo $geniorama['social-li']; ?>" class="float-link link-linkedin button-icon <?php add_class_button('top-header-buttons'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
													</li>
												<?php endif; ?>

												<?php if ($geniorama['float-tw-button'] == '1' && $geniorama['social-tw']): ?>
													<!-- Twitter -->
													<li class="nav-item">
														<a href="<?php echo $geniorama['social-tw']; ?>" class="float-link link-twitter button-icon <?php add_class_button('top-header-buttons'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
													</li>
												<?php endif; ?>
												
												<?php if ($geniorama['float-fb-button'] == '1' && $geniorama['social-fb']): ?>
													<!-- Facebook -->
													<li class="nav-item">
														<a href="<?php echo $geniorama['social-fb']; ?>" class="float-link link-facebook button-icon <?php add_class_button('top-header-buttons'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
													</li>
												<?php endif; ?>

												<?php if ($geniorama['float-ins-button'] == '1' && $geniorama['social-ins']): ?>
													<!-- Instagram -->
													<li class="nav-item">
														<a href="<?php echo $geniorama['social-ins']; ?>" class="float-link link-instagram button-icon <?php add_class_button('top-header-buttons'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
													</li>
												<?php endif; ?>

												
													<!-- Whatsapp -->
													<li class="nav-item">
														<a href="<?php echo $geniorama['social-yt']; ?>" class="float-link link-watsapp button-icon <?php add_class_button('top-header-buttons'); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
													</li>
											<?php endif; ?>
								<?php endforeach; ?>
										
								<!-- Search button-->
								<?php if($geniorama['search-on-off'] == '1'): ?>
									<li class="nav-item">
										<?php get_template_part('template-parts/navigation/button','search') ?>
									</li>
								<?php endif; ?>
							</ul>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
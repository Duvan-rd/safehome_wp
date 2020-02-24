<?php
/**
 * Template part for displaying bottom footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<div class="bottom-footer p-2 pt-4">
			<div class="container">
				<div class="row">
					<?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
						<?php if ($valor_campo == '4'): ?>
							<div class="col-12 col-md-4 text-center">
								<ul class="nav social-nav">
									<!--Facebook link-->
									<?php if ($geniorama['social-fb'] && $geniorama['float-fb-button'] == '1'): ?>
										<li class="nav-item">
											<a href="<?php echo $geniorama['social-fb']; ?>" class="button-icon <?php add_class_button('social-nav'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										</li>
									<?php endif; ?>

									<!--Twitter link-->
									<?php if ($geniorama['social-tw'] && $geniorama['float-tw-button'] == '1'): ?>
										<li class="nav-item">
											<a href="<?php echo $geniorama['social-tw']; ?>" class="button-icon <?php add_class_button('social-nav'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										</li>
									<?php endif; ?>

									<!--YouTube link-->
									<?php if ($geniorama['social-yt'] && $geniorama['float-yt-button'] == '1'): ?>
										<li class="nav-item">
											<a href="<?php echo $geniorama['social-yt']; ?>" class="button-icon <?php add_class_button('social-nav'); ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
										</li>
									<?php endif; ?>

									<!--Instagram link-->
									<?php if ($geniorama['social-ins'] && $geniorama['float-ins-button'] == '1'): ?>
										<li class="nav-item">
											<a href="<?php echo $geniorama['social-ins']; ?>" class="button-icon <?php add_class_button('social-nav'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
										</li>
									<?php endif; ?>

									<!--Pinterest link-->
									<?php if ($geniorama['social-pt'] && $geniorama['float-pt-button'] == '1'): ?>
										<li class="nav-item">
											<a href="<?php echo $geniorama['social-pt']; ?>" class="button-icon <?php add_class_button('social-nav'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
										</li>
									<?php endif; ?>

									<!--LinkedIn link-->
									<?php if ($geniorama['social-li'] && $geniorama['float-li-button'] == '1'): ?>
										<li class="nav-item">
											<a href="<?php echo $geniorama['social-li']; ?>" class="button-icon <?php add_class_button('social-nav'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										</li>
									<?php endif; ?>
								</ul>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
					<div class="col-12 col-md-4 text-center">
						<p>Copyright <?php if ($geniorama['client-name']): echo $geniorama['client-name']; endif;?> 2019 | Todos los derechos reservados</p>
					</div>
					<div class="col-12 col-md-4 text-center">
						<p>Diseñado y desarrollado por <a href="<?php if ($geniorama['copy-url']): echo $geniorama['copy-url']; endif;?>" target="_blank" class="text-link"><?php if ($geniorama['copy-name']): echo $geniorama['copy-name']; endif;?></a></p>
					</div>
				</div>
			</div>
		</div>
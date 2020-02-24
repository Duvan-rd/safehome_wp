<?php
/**
 * Template part for displaying float buttons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<!-- FLOAT BUTTONS -->
		<div class="float-buttons  position-fixed <?php echo get_alignment_classes('float-buttons'); ?> animation-up">
			<ul class="nav flex-column">
                
                <!-- SOCIAL FLOAT BUTTONS -->
                <?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
                    <?php if ($valor_campo == '1'): ?>
                        <?php if ($geniorama['float-pt-button'] == '1'): ?>
                            <!-- Pinterest -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-pt']) {
                                        echo $geniorama['social-pt'];
                                    }	
                                ?>" class="float-link link-pinterest button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-li-button'] == '1'): ?>
                            <!-- Linked In -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-li']) {
                                        echo $geniorama['social-li'];
                                    }	
                                ?>" class="float-link link-linkedin button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-tw-button'] == '1'): ?>
                            <!-- Twitter -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-tw']) {
                                        echo $geniorama['social-tw'];
                                    }	
                                ?>" class="float-link link-twitter button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-ins-button'] == '1'): ?>
                            <!-- Instagram -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-ins']) {
                                        echo $geniorama['social-ins'];
                                    }	
                                ?>" class="float-link link-instagram button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-fb-button'] == '1'): ?>
                            <!-- Facebook -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-fb']) {
                                        echo $geniorama['social-fb'];
                                    }	
                                ?>" class="float-link link-facebook button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-yt-button'] == '1'): ?>
                            <!-- YouTube -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-yt']) {
                                        echo $geniorama['social-yt'];
                                    }	
                                ?>" class="float-link link-youtube button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>

                <!-- DEFAULT FLOAT BUTTONS -->

				<?php if ($geniorama['float-what-button'] == '1'): ?>
					<!-- Whatsapp -->
					<li class="nav-item">
						<a href="<?php
							if ($geniorama['opt-whp']) {
								$number_whatsapp = sanitizePhone($geniorama['opt-whp']);
							} else {
								$number_whatsapp = "#";
							}

							if ($geniorama['opt-whp-msje']) {
								$message_whatsapp = __($geniorama['opt-whp-msje'], 'master-template-woo');
							} else{
								$message_whatsapp = 'Hola';
							}

							echo $api_whatsapp = 'https://wa.me/' . $number_whatsapp . '?text=' . $message_whatsapp;
						?>" class="float-link link-whatsapp button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
					</li>
				<?php endif; ?>
				
				<?php if ($geniorama['float-custom-button'] == '1'): ?>
					<!-- Custom Link -->
					<li class="nav-item"><a href="<?php echo $geniorama['float-link-custom-button']; ?>" class="float-link link-custom button-icon <?php add_class_button('float-buttons'); ?>" target="_blank"><i class="<?php echo $geniorama['icon-custom-button']; ?>"></i></a></li>
				<?php endif; ?>			

				<?php if ($geniorama['float-top-button'] == '1'): ?>
					<!-- Back to top -->
					<li class="nav-item"><a href="#page" class="float-link link-backtop button-icon <?php add_class_button('float-buttons'); ?>"><i class="fa fa-angle-up" aria-hidden="true"></i></a></li>
				<?php endif; ?>
			</ul>
		</div>

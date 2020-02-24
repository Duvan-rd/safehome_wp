<?php
/**
 * Template part for displaying social buttons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<!-- MENU LATERAL BUTTONS -->
	
			<ul class="nav">
        
                <!-- SOCIAL MENU LATERAL BUTTONS -->
                        <?php if ($geniorama['float-pt-button'] == '1'): ?>
                            <!-- Pinterest -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-pt']) {
                                        echo $geniorama['social-pt'];
                                    }	
                                ?>" class="link-pinterest button-icon <?php add_class_button('menu-lateral-buttons'); ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-li-button'] == '1'): ?>
                            <!-- Linked In -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-li']) {
                                        echo $geniorama['social-li'];
                                    }	
                                ?>" class="link-linkedin button-icon <?php add_class_button('menu-lateral-buttons'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-tw-button'] == '1'): ?>
                            <!-- Twitter -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-tw']) {
                                        echo $geniorama['social-tw'];
                                    }	
                                ?>" class="link-twitter button-icon <?php add_class_button('menu-lateral-buttons'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-ins-button'] == '1'): ?>
                            <!-- Instagram -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-ins']) {
                                        echo $geniorama['social-ins'];
                                    }	
                                ?>" class="link-instagram button-icon <?php add_class_button('menu-lateral-buttons'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-fb-button'] == '1'): ?>
                            <!-- Facebook -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-fb']) {
                                        echo $geniorama['social-fb'];
                                    }	
                                ?>" class="link-facebook button-icon <?php add_class_button('menu-lateral-buttons'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php if ($geniorama['float-yt-button'] == '1'): ?>
                            <!-- YouTube -->
                            <li class="nav-item">
                                <a href="<?php
                                    if ($geniorama['social-yt']) {
                                        echo $geniorama['social-yt'];
                                    }	
                                ?>" class="link-youtube button-icon <?php add_class_button('menu-lateral-buttons'); ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                        <?php endif; ?>
			</ul>

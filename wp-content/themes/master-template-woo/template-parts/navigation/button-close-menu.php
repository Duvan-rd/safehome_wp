<?php
/**
 * Template part for displaying button menu lateral
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<?php if ($geniorama['button-menu-lateral-style'] == 1): ?>
							<div class="button-menu-lateral close-menu-lateral d-flex flex-column justify-content-center align-items-center">
								<span class="line"></span>
							</div>
						<?php endif; ?>
						<?php if ($geniorama['button-menu-lateral-style'] == 2): ?>
							<div class="button-menu-lateral close-menu-lateral button-style-grid">
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
								<span class="square"></span>
							</div>
						<?php endif; ?>
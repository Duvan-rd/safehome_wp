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
    <!-- Menu Lateral Lines -->
	<div class="button-menu-lateral open-menu d-flex flex-column justify-content-center align-items-center">
		<span class="line"></span>
	</div>
<?php endif; ?>

<?php if ($geniorama['button-menu-lateral-style'] == 2): ?>
    <!-- Menu Lateral Grid -->
	<div class="button-menu-lateral open-menu button-style-grid">
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
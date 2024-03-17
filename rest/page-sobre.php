<?php 
// Template Name: Sobre 
?>
<!--Header-->
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="container sobre">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-8">
		<img src="<?php the_field('foto_rest'); ?>" alt="<?php the_field('foto_rest_descricao'); ?>">
	</div>

	<div class="grid-8">
		

		<?php if(have_rows('conteudo_sobre')): while(have_rows('conteudo_sobre')) : the_row (); ?>
		<h2><?php the_sub_field('titulo_sobre'); ?></h2>
		<?php the_sub_field('texto_sobre'); ?>
		<?php endwhile; else : endif; ?>
		<h2>Visão</h2>
		<p>Não obstante, a expansão dos mercados mundiais faz parte de um processo de gerenciamento de alternativas às soluções ortodoxas.</p>
		<h2>Valores</h2>
		<p>O empenho em analisar a consolidação das estruturas apresenta tendências no sentido de aprovar a manutenção dos índices pretendidos.</p>
	</div>
</section>

<?php endwhile; else: endif; ?>
<!--Footer-->
<?php get_footer(); ?>
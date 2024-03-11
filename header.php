<!DOCTYPE html>
<html lang="pt-br">
	<head>
  <meta charset="utf-8">
  <!-- Título do site WordPress -->
  <title><?php bloginfo('name'); ?></title>

  <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <!--Header Wordpress-->
  <?php wp_head(); ?>
  <!-- Fecha Header Wordpress-->
</head>

<body>
  

<header>
  <nav>
    <ul>
      <li class="current_page_item"><a href="/">Menu</a></li>
      <li><a href="/teste2.local/sobre/">Sobre</a></li>
      <li><a href="/teste2.local/contato/">Contato</a></li>
    </ul>
  </nav>

  <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

  <?php $contato = get_page_by_title('contato') ; ?>
  <p><?php the_field('endereco_header', $contato); ?></p>
  <p class="telefone"><?php the_field('telefone_header', $contato); ?></p>
</header>

<!-- Descrição do site WordPress -->
<?php bloginfo('description'); ?>
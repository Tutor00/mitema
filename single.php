<?php get_header(); ?>

<div id="contentWrap">
    <div id="contenido"> 

<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
              
                <h2><?php the_title(); ?></h2>

                <div class="meta"
                        <em>Fecha:</em> <?php the_time('j-m-Y'); ?>
                        <em>por</em> <?php the_author(); ?>
                </div>

                <div class="entry">
                        <?php the_content(); ?>
                </div>
                <!-- Permitimos la paginación -->
                <?php wp_link_pages(array('before' => 'Paginas: ', 'next_or_number' => 'number')); ?>


                <div class="postmetadata">
                        <?php the_tags('Etiquetas:', ', ', '<br />');  ?>
                          Publicado en <?php the_category(', ') ?> |
                        <?php comments_popup_link('No hay comentarios &#187;', '1 Comentario &#187;', '% Comentarios &#187;'); ?>
                </div>
            </article>
        <!-- Permitimos la plantilla para comentarios -->
        <?php comments_template(); ?>

        <?php endwhile; ?>
	<?php else : ?>
        <h2> No hay entradas</h2>
        <?php endif; ?>

    </div><!-- cierre de contenido-->
<?php get_sidebar(); ?>
</div><!--ciere contentWrap-->
<?php get_footer(); ?>
<?php get_header(); ?>

<div id="contentWrap">
    <div id="contenido"> 

<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
              
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <div class="meta"
                        <em>Fecha:</em> <?php the_time('j-m-Y'); ?>
                        <em>por</em> <?php the_author(); ?>
                </div>

                <div class="entry">
                        <?php the_content(); ?>
                </div>

                <div class="postmetadata">
                        <?php the_tags('Etiquetas:', ', ', '<br />');  ?>
                          Publicado en <?php the_category(', ') ?> |
                        <?php comments_popup_link('No hay comentarios &#187;', '1 Comentario &#187;', '% Comentarios &#187;'); ?>
                </div>
            </article>
        <?php endwhile; ?>
	<?php else : ?>
        <h2> No hay entradas</h2>
        <?php endif; ?>

    </div><!-- cierre de contenido-->
<?php get_sidebar(); ?>
</div><!--ciere contentWrap-->
<?php get_footer(); ?>
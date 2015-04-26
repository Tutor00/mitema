<div class="widget-area">
        <?php if ( ! dynamic_sidebar( 'Sidebar Widgets' ) ): ?>
        <?php endif; // fin del area de widgets ?>
    <aside id="search" class="widget">
        <?php get_search_form(); ?>
    </aside>
    <aside id="archives" class="widget">
        <h3 class="titulo-widget">Archivos</h3>
        <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
        </ul>  
    </aside>
</div>
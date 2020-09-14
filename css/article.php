<?php get_header(); ?>
    <?php include('../includes/header-blog.php');  ?>
        <div class="section container-fluid" id="sub-header"></div>
        <!--/sub-header-->
        <section id="main">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-sm-4">
                        <h1>Noticias</h1>
                        <div class="separador"></div>
                        <p>Mant&eacute;ngase informado de las novedades de Lagos del Leyes.</p>
                        <?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
                    </aside>
                    <div class="col-md-8 col-sm-8">
                        <div class="panel panel-default">
                            <div class="panel-body">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <h2><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></h2>
                    <section class="entry">
                        <?php the_content(); ?>
                    </section>
                </article>
                <!-- /post -->
                <?php endwhile; else: ?>
                    <p>Lo sentimos, no hay entradas con ese criterio.</p>
                    <?php endif; ?>
         </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('../includes/footer.php'); ?>
            <?php get_footer(); ?>
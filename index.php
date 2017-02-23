<?php get_header(); ?>

    <section id="explore">
        <div class="container">
            <h1 class="titre">THE PADLOCKS</h1>
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory' ); ?>/img/bggif.gif" alt="">
                </div>
                <div class="col-sm-12 col-md-7">
                    <h2>qui sommes-nous ?</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vivamus ipsum metus, semper tristique consequat quis, efficitur non risus. Nam quis mauris velit. Fusce mauris enim, facilisis a egestas vel, venenatis et tortor.
                        Sed eros nunc, gravida pharetra lectus id, sodales imperdiet dolor. Integer et mattis ligula, cursus fringilla lorem. Nullam porttitor facilisis lectus.
                        Etiam porttitor orci turpis, vitae ultrices nisi varius non. Suspendisse tincidunt massa ut commodo rutrum. Vestibulum vitae ultrices elit.
                        Etiam consequat enim ac ex eleifend, quis dictum enim mollis. Sed feugiat tortor erat, non facilisis augue vestibulum ac.
                        Aenean hendrerit justo in metus vestibulum gravida.
                    </p>
                </div>
            </div>
        </div>
    </section><!--/#explore-->

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8 col-lg-offset-2 col-md-12 rowTeam">
                    <h2 class="heading">Musiciens</h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="single-event">
                                <img class="img-responsive" src="<?php bloginfo('template_directory' ); ?>/img/team/team1.png" alt="team-image">
                                <h4>Corentin Roux</h4>
                                <h5>Voix, Guitare</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="single-event">
                                <img class="img-responsive" src="<?php bloginfo('template_directory' ); ?>/img/team/team2.png" alt="team-image">
                                <h4>Nicolas Bertello</h4>
                                <h5>Basse, Choeurs</h5>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="single-event">
                                <img class="img-responsive" src="<?php bloginfo('template_directory' ); ?>/img/team/team3.png" alt="team-image">
                                <h4>Max Sanfilippo</h4>
                                <h5>Batterie, Choeurs</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="old">
                    <img class="oldImg" src="<?php bloginfo('template_directory' ); ?>/img/bgold.png" alt="bg">
                </div>
            </div>
        </div>
    </section><!--/#team-->

    <section id="music">
        <div class="container">
            <div class="row">
                <div class="col-md-12 player-container">
                    <h2 id="album">ECOUTEZ NOUS !</h2>
                    <div class="player">
                        <div class="player__wrapper">
                            <div class="player__holder">
                                <div class="player__cover"></div>
                                <div class="player__list tracks">
                                    <ul class="tracks__list"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="player__info">
                            <h3 class="player__title"></h3>
                            <h4 class="player__artist"></h4>
                            <div class="player__options options">
                                <button class="bttn options__bttn options__bttn--random">
                                    <i class="fa fa-random"></i>
                                </button>
                                <button class="bttn options__bttn options__bttn--playlist">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                        <div class="player__progressbar-holder">
                            <div class="player__progressbar"></div>
                        </div>
                        <div class="player__controls controls">
                            <button class="bttn controls__bttn controls__bttn--prev">
                                <i class="fa fa-backward"></i>
                            </button>
                            <button class="bttn controls__bttn controls__bttn--play-pause">
                                <i class="fa fa-fw fa-play"></i>
                            </button>
                            <button class="bttn controls__bttn controls__bttn--next">
                                <i class="fa fa-forward"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#musique-->

    <section id="concert">
        <div class="container">
            <div class="row">
                <div class="col-md-12 front">
                    <h2>PROCHAIN CONCERTS</h2>
                    <?php
                        $args = array( 'post_type' => 'dateconcerts', 'posts_per_page' => 20 );
                        $the_query = new WP_Query( $args );
                    ?>
                    <table cellpadding="0" cellspacing="0" class="concerts" width="100%">
                        <thead>
                            <tr>
                                <th class="date">Date</th>
                                <th class="salle">Salle</th>
                                <th class="lieu">Lieu</th>
                                <th class="lien"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ( $the_query->have_posts() ) : ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <tr>
                                        <td class="date"><?php echo get_post_meta( get_the_ID(), 'date', true ); ?></td>
                                        <td class="salle"><?php echo get_post_meta( get_the_ID(), 'salle', true ); ?></td>
                                        <td class="lieu"><?php echo get_post_meta( get_the_ID(), 'lieu', true ); ?></td>
                                        <td class="lieu">
                                                <a target="_blank" class="infos" title="Plus d'informations" href="<?php echo get_post_meta( get_the_ID(), 'lien', true ); ?>">Infos</a>
                                        </td>
                                    </tr>
                                    <?php wp_reset_postdata(); ?>
                                <?php endwhile;  ?>
                            <?php else:  ?>
                                <p><?php _e( 'Pas de concerts pour le moment.' ); ?></p>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="old">
                    <img class="oldImg" src="<?php bloginfo('template_directory' ); ?>/img/bgold.png" alt="bg">
                </div>
            </div>
        </div>
    </section><!--/#concert-->

    <section id="galerie">
        <div class="row">
            <div class="col-md-12">
                <a href="#galerie">
                    <h2>GALERIE</h2>
                    <div id="main-slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img alt="bg1" src="<?php bloginfo('template_directory' ); ?>/img/slider/bg1.jpg">
                            </div>
                            <div class="item">
                                <img alt="bg2" src="<?php bloginfo('template_directory' ); ?>/img/slider/bg2.jpg" >
                            </div>
                            <div class="item">
                                <img alt="bg3" src="<?php bloginfo('template_directory' ); ?>/img/slider/bg3.jpg" >
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#main-slider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#main-slider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </a>
                <div class="galerie_link">
                    <h3><a href="#galerie">Voir toute la galerie <i class="fa fa-angle-right"></i></a></h3>
                </div>
            </div>
        </div>
    </section><!--/#galerie-->

    <section id="contact">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-md-offset-6 front">
                        <div id="contact-section">
                            <h2>Contactez nous !</h2>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Entrez votre nom">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="Entrez votre email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Entrez votre message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="guitar">
                        <img class="guitarImg" src="<?php bloginfo('template_directory' ); ?>/img/guitar2.jpg" alt="guitar">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#contact-->

<?php get_footer(); ?>
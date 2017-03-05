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

                    <?php
                    $args = array( 'post_type' => 'albums', 'posts_per_page' => 20 );
                    $the_query = new WP_Query( $args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php $files = rwmb_meta( 'Pistes', array(), get_the_ID());
                            ?>
                            <div class="page">
                                <div id="player-wrap<?php echo get_the_ID() ?>" class="player-wrap track-view light" data-url="" data-title="" data-artist="" style="background-image: url('<?php echo get_post_meta( get_the_ID(), 'Cover', true ); ?>');">
                                    <audio preload></audio>
                                    <div class="player">
                                        <p class="title-text ellipsis"></p>
                                        <p class="artist-text ellipsis"></p>
                                        <div class="controls">
                                            <div class="play-pause">
                                                <div class="play-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150">
                                                        <path d="M43.3,11.1C36.6,7.1 30.3,9.6 30.3,18.6C30.3,27.6 30.3,121.3 30.3,131.7C30.3,142.1 35.6,144 43.6,139.7C51.6,134.7 133.5,87.5 141.5,83C149.3,78.5 149,72.5 141.5,68.2C134,63.8 52.2,16.4 43.3,11.1Z"/>
                                                    </svg>
                                                </div>
                                                <div class="pause-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                        <rect width="18%" height="90%" x="22.5%" y="5%" rx="5%" ry="5%"/>
                                                        <rect width="18%" height="90%" x="62.5%" y="5%" rx="5%" ry="5%"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="prev-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M8.7 12L22 18.9V5.1L8.7 12z"/>
                                                    <path d="M0 12l11.3 6.9V5.1L0 12z"/>
                                                </svg>
                                            </div>
                                            <div class="next-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M15.3 12L2 18.9V5.1L15.3 12z"/>
                                                    <path d="M24 12l-11.3 6.9V5.1L24 12z"/>
                                                </svg>
                                            </div>
                                            <div class="playlist-button">
                                                <svg viewBox="0 0 48 48">
                                                    <rect width="67%" height="13%" x="28%" y="19%" rx="5%" ry="5%"/>
                                                    <rect width="67%" height="13%" x="28%" y="45%" rx="5%" ry="5%"/>
                                                    <rect width="67%" height="13%" x="28%" y="71%" rx="5%" ry="5%"/>
                                                    <rect width="13%" height="13%" x="5%" y="19%" rx="6.5%" ry="7.5%"/>
                                                    <rect width="13%" height="13%" x="5%" y="45%" rx="6.5%" ry="7.5%"/>
                                                    <rect width="13%" height="13%" x="5%" y="71%" rx="6.5%" ry="7.5%"/>
                                                </svg>
                                            </div>
                                            <div class="seek-wrap"><input type="range" min="0" max="100" step=".1" value="0" class="seek-bar"></div>
                                            <div class="current-time">0:00:00</div>
                                            <div class="duration-time">0:00:00</div>
                                        </div>
                                    </div>
                                    <div class="big-play-pause">
                                        <div class="big-play-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150">
                                                <path d="M43.3,11.1C36.6,7.1 30.3,9.6 30.3,18.6C30.3,27.6 30.3,121.3 30.3,131.7C30.3,142.1 35.6,144 43.6,139.7C51.6,134.7 133.5,87.5 141.5,83C149.3,78.5 149,72.5 141.5,68.2C134,63.8 52.2,16.4 43.3,11.1Z"/>
                                            </svg>
                                        </div>
                                        <div class="big-pause-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                <rect width="18%" height="90%" x="22.5%" y="5%" rx="5%" ry="5%"/>
                                                <rect width="18%" height="90%" x="62.5%" y="5%" rx="5%" ry="5%"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="playlist-wrap">
                                        <h2><?php the_title(); ?></h2>
                                        <ol>
                                            <?php
                                            if ( !empty( $files ) ) {
                                                foreach ( $files as $file ) {
                                                    echo '<li><a href="' . $file["url"] . '" data-artist="' . $file["band"] . '">' . $file["title"] . '</a></li>';
                                                }
                                            }
                                            ?>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <?php wp_reset_postdata(); ?>
                        <?php endwhile;  ?>
                    <?php else:  ?>
                        <p><?php _e( 'Pas d\'album' ); ?></p>
                    <?php endif; ?>


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
                    <?php echo do_shortcode('[wonderplugin_gallery id="1"]'); ?>
                </a>
                <div class="galerie_link">
                    <h3 id="toggleGalerie">Voir toute la galerie <i class="fa fa-angle-down"></i></h3>
                </div>

                <?php echo do_shortcode('[wonderplugin_gridgallery id="1"]'); ?>
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
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php bloginfo('template_directory' ); ?>/sendemail.php">
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
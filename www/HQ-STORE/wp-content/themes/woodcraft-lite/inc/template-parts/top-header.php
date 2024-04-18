<?php
/**
 * The Top Header for our theme.
 *
 * Display all information related to top header
 *
 * @package Orphans Lite
*/

$tpbarphn = get_theme_mod( 'woodcraft_tpbar_phone' );
$tpbaradd = get_theme_mod( 'woodcraft_tpbar_add' );
$tpbarmail = get_theme_mod( 'woodcraft_tpbar_mail' );

$tpbarfb = get_theme_mod( 'woodcraft_tpbar_fb' );
$tpbartw = get_theme_mod( 'woodcraft_tpbar_tw' );
$tpbarins = get_theme_mod( 'woodcraft_tpbar_ins' );
$tpbarin = get_theme_mod( 'woodcraft_tpbar_in' );
$tpbargp = get_theme_mod( 'woodcraft_tpbar_gp' );
$tpbaryt = get_theme_mod( 'woodcraft_tpbar_yt' );	

$woodcraft_hide_tpbar = get_theme_mod( 'hide_tpbar','1' );
if( $woodcraft_hide_tpbar == '' ){
?>
<div class="top-bar">
    <div class="aligner">
        <div class="flex ac">
            <?php
                if( !empty( $tpbaradd ) ){
                    echo '<div class="top-bar-col flex ac">
                        <div class="top-icon">
                            <i class="fa fa-map-marker"></i>
                        </div><!-- top-icon -->
                        <div class="icon-text">
                            '.$tpbaradd.'
                        </div><!-- icon-text -->
                    </div>';
                } if( !empty( $tpbarmail ) ){
                    echo '<div class="top-bar-col flex ac">
                        <div class="top-icon">
                            <i class="fa fa-envelope"></i>
                        </div><!-- top-icon -->
                        <div class="icon-text">
                            '.$tpbarmail.'
                        </div><!-- icon-text -->
                    </div>';
                } if( !empty( $tpbarphn ) ){
                    echo '<div class="top-bar-col flex ac">
                        <div class="top-icon">
                            <i class="fa fa-phone"></i>
                        </div><!-- top-icon -->
                        <div class="icon-text">
                            '.$tpbarphn.'
                        </div><!-- icon-text -->
                    </div>';
                } if( !empty( $tpbarfb || $tpbartw || $tpbarins || $tpbarin || $tpbargp || $tpbaryt ) ) {
                    echo '<div class="top-bar-col flex ac jcfe"><div class="social-icons">';
                        if( !empty( $tpbarfb ) ) {
                            echo '<a href="'.$tpbarfb.'" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>';
                        }if( !empty( $tpbartw ) ) {
                            echo '<a href="'.$tpbartw.'" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a>';
                        }if( !empty( $tpbarins ) ) {
                            echo '<a href="'.$tpbarins.'" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>';
                        }if( !empty( $tpbarin ) ) {
                            echo '<a href="'.$tpbarin.'" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a>';
                        }if( !empty( $tpbargp ) ) {
                            echo '<a href="'.$tpbargp.'" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>';
                        }if( !empty( $tpbaryt ) ) {
                            echo '<a href="'.$tpbaryt.'" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>';
                        }
                    echo '</div></div>';
                }
            ?>
        </div><!-- flex -->
    </div><!-- aligner -->
</div><!-- top bar -->
<?php
}
?>
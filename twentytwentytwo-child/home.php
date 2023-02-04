    <?php /* Template Name: Homepage */ ?>
    <?php get_header(); ?>
    <div id="primary" class="content-area">
                    <?php // args
$args = array(
    'numberposts'   => -1,
    'post_type'     => 'team_member',
);


// query
$the_query = new WP_Query( $args );

?>
<?php if( $the_query->have_posts() ): ?>
    <ul id="members_team">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
                <img src="<?php the_field('profile_picture'); ?>" />
                <h2><?php the_field('name'); ?></h2>
                <h3><?php echo the_field('role'); ?></h3>
                <a href="mailto:<?php echo the_field('email'); ?>"><?php echo the_field('email'); ?></a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post(). ?>
    </div><!-- .content-area -->
<?php get_footer(); ?>
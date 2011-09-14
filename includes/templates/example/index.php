<?php

/**
 * BuddyPress - Example Directory
 *
 * @package BuddyPress_Skeleton_Component
 */

?>

<?php get_header( 'buddypress' ); ?>

	<?php do_action( 'bp_before_directory_example_page' ); ?>

	<div id="content">
		<div class="padder">

		<?php do_action( 'bp_before_directory_example' ); ?>

		<form action="" method="post" id="example-directory-form" class="dir-form">

			<h3><?php _e( 'High Fives Directory', 'bp-example' ); ?></h3>

			<?php do_action( 'bp_before_directory_example_content' ); ?>

			<div id="example-dir-search" class="dir-search" role="search">

				<?php bp_directory_groups_search_form() ?>

			</div><!-- #group-dir-search -->

			<?php do_action( 'template_notices' ); ?>

			<div class="item-list-tabs" role="navigation">
				<ul>
					<li class="selected" id="groups-all"><a href="<?php echo trailingslashit( bp_get_root_domain() . '/' . bp_get_example_root_slug() ); ?>"><?php printf( __( 'All High Fives <span>%s</span>', 'buddypress' ), bp_example_get_total_high_five_count() ); ?></a></li>

					<?php if ( is_user_logged_in() && bp_example_get_total_high_five_count_for_user( bp_loggedin_user_id() ) ) : ?>

						<li id="groups-personal"><a href="<?php echo trailingslashit( bp_loggedin_user_domain() . bp_get_example_slug() . '/screen-two' ); ?>"><?php printf( __( 'My High Fives <span>%s</span>', 'bp-example' ), bp_example_get_total_high_five_count_for_user( bp_loggedin_user_id() ) ); ?></a></li>

					<?php endif; ?>

					<?php do_action( 'bp_example_directory_example_filter' ); ?>

				</ul>
			</div><!-- .item-list-tabs -->

			<div id="example-dir-list" class="example dir-list">

				<?php locate_template( array( 'example/example-loop.php' ), true ); ?>

			</div><!-- #examples-dir-list -->

			<?php do_action( 'bp_directory_example_content' ); ?>

			<?php wp_nonce_field( 'directory_example', '_wpnonce-example-filter' ); ?>

			<?php do_action( 'bp_after_directory_example_content' ); ?>

		</form><!-- #example-directory-form -->

		<?php do_action( 'bp_after_directory_example' ); ?>

		</div><!-- .padder -->
	</div><!-- #content -->

	<?php do_action( 'bp_after_directory_example_page' ); ?>

<?php get_sidebar( 'buddypress' ); ?>
<?php get_footer( 'buddypress' ); ?>

<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="alert">This post is password protected. Enter the password to view comments.</p>
	<?php
	return;
}
?>

	<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

	<header class="comm-title wow fadeInUp">
		<h5><?php comments_number(__('No Commets', 'match'), __('1 Comment', 'match'), __('% Comments', 'match') );?></h5>
	</header>

	<ol class="commentlist wow fadeInUp">
		<?php wp_list_comments( array( 'callback' => 'mt_custom_comments' )); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav role="navigation" id="comment-nav-above" class="site-navigation comment-navigation">
			<h1 class="assistive-text"><?php echo $comments_navigation; ?></h1>
			<div class="nav-previous"><?php previous_comments_link( '&larr;'. $comments_older ); ?></div>
			<div class="nav-next"><?php next_comments_link($comments_newer .'&rarr;'); ?></div>
		</nav><!-- /coment-nav-above -->
	<?php endif; ?>

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.', 'match')?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

	<div id="respond" class="wow fadeInUp">

		<header class="comm-title">
			<h5><?php comment_form_title(__('Leave a Comment', 'match'), __('Leave a Comment to %s', 'match') ); ?></h5>
		</header>

		<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<div class="row">

					<div class="col-md-8">


						<?php if ( is_user_logged_in() ) : ?>

							<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

						<?php else : ?>

							<input type="text" name="author" id="author" class="comm-field-post"  value="" placeholder="<?php _e('Name', 'match')?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
							<input type="text" name="email" id="email" class="comm-field-post" value="" placeholder="<?php _e('Email', 'match')?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>   />
							<input type="text" name="url" id="url" class="comm-field-post" value="" placeholder="<?php _e('URL', 'match')?>" size="22" tabindex="3" <?php if ($req) echo "aria-required='true'"; ?>  />

						<?php endif; ?>

						<textarea name="comment" id="comment" placeholder="<?php _e('Message', 'match')?>" rows="9" tabindex="4"></textarea>

						<button class="btn-style-1 btn-form" name="submit" type="submit" tabindex="5">Submit</button>
						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>

					</div><!--end col-md-8-->

				</div>
			</form>

		<?php endif; // If registration required and not logged in ?>

	</div>

<?php endif; // if you delete this the sky will fall on your head ?>
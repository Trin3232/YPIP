<main class="error-main">
  <div class="error-wrapper">
    <div class="title-error" data-content="404">
      Error 404
    </div>
    <div class="subtitle-error">
      Oops, the page you're looking for doesn't exist.
    </div>
    <div class="button-error" title="Your Partner In Property">
      <a class="home-ypip" href="index.html">Go To Homepage</a>
    </div>
  </div>
</main>

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_page(); ?>

<?php get_footer(); ?>

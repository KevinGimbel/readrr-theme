<?php theme_include('header'); ?>

	<?php if(has_posts()): ?>
		<div class="posts-container">
			<?php posts(); ?>
				<article class="post-single--latest-post">
					<h4 class="post-single--latest-intro">Latest Blog Post</h4>
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>" class="post-single--headline"><?php echo article_title(); ?></a>
					</h1>

					<div class="post-single--content">
						<?php echo article_markdown(); ?>
					</div>

					<footer class="post-single--footer">
						Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> 
					</footer>
				</article>

			
			<?php $i = 0; while(posts()): ?>
			<h4 class="post-single--older-intro">Older Posts</h4>
				<article class="post-single--older-post">
					<h2>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>" class="post-single--older-headline"><?php echo article_title(); ?></a>
					</h2>
				</article>
			<?php endwhile; ?>
		</div>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

<?php theme_include('footer'); ?>
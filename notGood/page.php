
<?php $this->need('header.php');?>

<div class="contain">
	<div id="content" class="narrowcolumn">
			<div class="post">

					<h2 class="pagetitle"><?php $this->title() ?></h2>


					<div class="entry">
						<?php $this->content(); ?>
								<p class="meta">
									<small>
									» You can
									<a href="<?php $this->permalink() ?>#comments">leave a comment</a>
									, or
									<a rel="trackback" href="<?php $this->permalink() ?>">trackback</a>
									from your own site.
									</small>
									</p>
					</div>



			</div>
			<?php $this->need('comments.php'); ?>
</div>

	<?php $this->need('sidebar.php'); ?>
	</div>
	<?php $this->need('footer.php'); ?>

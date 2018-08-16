
<?php $this->need('header.php');?>
<div class="contain">
<div class="fn_previousNext">
<div class="h" titile="上一篇">
<?php thePrev($this); ?>
</div>
<div class="l" title="下一篇">
<?php theNext($this); ?>
</div>
</div>
	<div id="content" class="narrowcolumn">
			<div class="post">
				<div class="date">
					<div class="day"> <?php $this->date('j'); ?> </div>
					<div class="month"> <?php $this->date('M'); ?> </div>
				</div>
				<div class="title">
					<div class="topic"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
					<div class="postmeta">
						 <?php $this->date('l, Y'); ?> . Post by <?php $this->author(); ?> . under <?php $this->category(','); ?>
					</div>
				</div>
				<div class="clear"></div>
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

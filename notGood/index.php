<?php
/**
* 原作者:<a href="http://ooxx.me/">大猫</a> <br>2013-1-26
*
* @package notGood
* @author zh369ao
* @version 1.0
* @link 
*/

$this->need('header.php');
?>


<div class="contain">
	<div id="content" class="narrowcolumn">

<?php $this->pageNav(); ?>

		<?php while($this->next()): ?>
			<div class="post">
				<div class="date">
					<div class="day"> <?php $this->date('j'); ?> </div>
					<div class="month"> <?php $this->date('M'); ?> </div>
				</div>
				<div class="title">
					<div class="topic"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
					<div class="postmeta">
						 <?php $this->date('M d'); ?> . Post by <?php $this->author(); ?> . . .
						<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
					</div>
				</div>
				<div class="clear"></div>
				<div class="entry">
				<?php $this->content('More ……'); ?>
				</div>
				<span class="comments">
					<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
</span>
			</div>
		<?php endwhile; ?>
	
<?php $this->pageNav(); ?>
	
	</div>
	<?php $this->need('sidebar.php'); ?>
	</div>
	<?php $this->need('footer.php'); ?>

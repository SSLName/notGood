


<?php $this->need('header.php');?>
<div class="contain">
	<div id="content" class="narrowcolumn">
			<div class="post">
				<div class="title">
					
					<div class="postmeta">
					</div>
				</div>
				<div class="clear"></div>
				<div class="entry">
								<br><br><br>
<h2>404 - Not Found</h2>
				<p>亲 你大概走错路了</p>
<br><br>

				<strong>All posts:</strong>


				<ul>
				<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				</ul>
</div>
	</div>
	</div>
	<?php $this->need('sidebar.php'); ?>
	</div>
	<?php $this->need('footer.php'); ?>

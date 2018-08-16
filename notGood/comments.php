<?php function threadedComments($comments, $singleCommentOptions) {
    
	$commentClass = '';
	if ($comments->authorId) {
		if ($comments->authorId == $comments->ownerId) {
			$commentClass .= ' comment-by-author';
		} else {
			$commentClass .= ' comment-by-user';
		}
	} 
	
	$commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>
<li id="<?php $comments->theId(); ?>" class="parent comment <?php
    if ($comments->_levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;

?>">


<div class="comment-body" id="div-<?php $comments->theId(); ?>">
<div class="comment-author vcard">
<?php $comments->gravatar(32); ?>
<cite class="fn"><?php $comments->author(); ?></cite>
<span class="says">说道：</span>
</div>
<div class="comment-meta commentmetadata">
<a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y 年 n 月 j 日 H:i'); ?></a>
</div>



<p>
<?php $comments->content();  ?>
</p>
<div class="reply">
<?php $comments->reply('回复'); ?>
</div>

<?php if ($comments->children) { ?>
<ul class="comment-children"><?php $comments->threadedComments($singleCommentOptions); //评论嵌套 ?></ul>

<?php } ?>

</li>

<?php } ?>


<div class="maya2">

<?php $this->comments()->to($comments); ?>


<?php if ($comments->have()): ?>

<h3 id="comments"><?php $this->commentsNum('%d'); ?> responses to <?php $this->title() ?></h3>

<?php $comments->listComments(); ?>


<?php $comments->pageNav(); ?>


<?php endif; ?>



<?php if($this->allow('comment')): ?>



<div id="<?php $this->respondId(); ?>" class="respond">



<h3>Leave a Reply</h3>
<div class="cancel-comment-reply">
<small>
<p class="cancel-comment-reply"><?php $comments->cancelReply('点击这里取消回复。'); ?>
</small>
</div>

<form id="commentform" method="post" action="<?php $this->commentUrl() ?>">

<?php if($this->user->hasLogin()): ?>

<p class="ctip">Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></p>

<?php else: ?>

<p>
<input type="text" name="author" class="text" size="22" value="<?php $this->remember('author'); ?>" />
<label for="author">
<small> 江湖人称 (required)</small>
</label>
</p>

<p>
<input type="mail" name="mail" class="text" size="22" value="<?php $this->remember('mail'); ?>" />
<label for="email">
<small> 君之信址(隐) (required)</small>
</label>
</p>

<p>
<input type="url" name="url" class="text" size="22" value="<?php $this->remember('url'); ?>" />
<small> ブログ </small>
</label>
</p>


<?php endif; ?>
<p>
<textarea rows="10" cols="100%" name="text"><?php $this->remember('text'); ?></textarea>
</p>

<p>

<input id="submit" type="image" value="Submit Comment" tabindex="5" src="<?php $this->options->themeUrl('images/submit.png'); ?>" name="submit"/>
</p>

</form>
</div>
<?php else: ?>

<h4><?php _e('Comments are closed.'); ?></h4>

<?php endif; ?>

</div>
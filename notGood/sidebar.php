
<div id="sidebar">


<ul>

<li>
<form id="searchform" method="post" action="">
<input type="text" name="s" class="text" size="12" /> <input type="submit" value="Search">
</form>
</li>

<li>
<h2 class="widgettitle">评论</h2>

<ul>
<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
<?php while($comments->next()): ?>
<li><?php $comments->author(false); ?>: <a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(7, '..'); ?></a></li>
<?php endwhile; ?>
</ul>
</li>


<li>
<h2 class="widgettitle">分类</h2>

<ul>
<?php $this->widget('Widget_Metas_Category_List')
->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
</ul>
</li>

<li>
<h2 class="widgettitle">归档</h2>

<ul>
<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年n月')
->parse('<li><a href="{permalink}">{date}</a> ({count})</li>'); ?>
</ul>
</li>


<li>
<h2 class="widgettitle">操作</h2>

<?php if($this->user->hasLogin()): ?>
<ul>
<li><a href="<?php $this->options->adminUrl(); ?>"><?php _e('管理'); ?></a></li>
<li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
</ul>
<?php else: ?>
<ul>
<li>
<a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a>
</li>
</ul>
<?php endif; ?>
</li>




</ul>



</div>

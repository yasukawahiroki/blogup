
<h2>‹LŽ–ˆê——<h2>



<u1>
<?php foreach ($posts as $post) : ?>
<li id="post_<?php echo h($post['Post']['id']); ?>">
<?php
//debug($post);
//echo h($post['Post']['title']);
echo $this->Html->link($post['Post']['title'], '/posts/view/' .$post['Post']['id']);
?> 
<?php echo $this->Html->link('edition',array('action'=>'edit',$post['Post']['id'])); ?> 
<?php
	echo $this->Html->link('delete', '#',array('class'=>'delete', 'data-post-id'=>$post['Post']['id']));
?>
</li>
<?php endforeach; ?>
</ul>

<h2>Add Post</h2>
<?php echo $this->Html->link('Add post', array('controller'=>'posts','action'=>'add'));
?>
<script>
$(function () {
	$('a.delete') .click(function(e) {
	if (window.confirm('sure?')) {
	 $.post('/blog/posts/delete/'+$(this).data('post-id'), { }, function(res) {
	$('#post_'+res.id).fadeOut();
},"json");
}
return false;
});
});
</script>

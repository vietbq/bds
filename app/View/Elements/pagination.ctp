<?php if ($this->Paginator->hasPage(2)):?>

	    <ul class="pagination">
	        <?php echo $this->Paginator->prev('←Sau', array('tag'	=>	'li'), null, array('class' => 'prev disabled', 'disabledTag'	=>	'a', 'tag'	=>	'li'));?>
	        <?php echo $this->Paginator->numbers(array('first' => false, 'last' => false, 'modulus' => 4, 'separator' => false, 'tag'	=>	'li', 'currentTag' => 'a', 'currentClass' => 'active' ));?>
	        <?php echo $this->Paginator->next('Tiếp → ', array('tag'	=>	'li'), null, array('class' => 'next disabled', 'disabledTag'	=>	'a', 'tag'	=>	'li'));?>
	    </ul>

<?php endif;?>

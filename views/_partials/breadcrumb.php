<ol class="breadcrumb">

    <?php foreach($this->Breadcrumb->get(TRUE) as $br): ?>

    <li <?php echo isset($br['active']) ? 'class="active"' : ''; ?>>
    	<?php if(!empty($br['url'])): ?>
    	<a href="<?php echo $br['url']; ?>"><?php echo $br['label']; ?></a>
    	<?php else: ?>
    	<?php echo $br['label']; ?>
    	<?php endif; ?>
    </li>

    <?php endforeach; ?>

</ol>


<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<?php $url =  /*JRoute::_('index.php')*/ '?index.php' . '?option=com_miniquiz'; ?>
<style>
.right-slider {display: none;}
</style>

<script>
$(document).ready(function() {
	$("#quiz_form")
    	.appendAfter(".right-slider");
});
</script>

<?php if (isset($q)): ?>
<form action="<?php echo $url; ?>" method="post" id="quiz_form">
	<?php echo $q->name; ?>
	<br/>
	&nbsp;
	<br/>
	
    <label>
		<input type="radio" name="var" value="A" /> <?php echo $q->varianta; ?>
	</label>
	<br/>
    <label>
		<input type="radio" name="var" value="B" /> <?php echo $q->variantb; ?>
	</label>
	<br/>
    <label>
		<input type="radio" name="var" value="C" /> <?php echo $q->variantc; ?>
	</label>
	<br/>
    <label>
		<input type="radio" name="var" value="D" /> <?php echo $q->variantd; ?>
	</label>
	<br/>
	&nbsp;
	<br/>
    <input type="hidden" name="id" value="<?php echo $q->id; ?>" />
    <input type="submit" class="button" value="Ответить" />
</form>
<?php else: ?>
<?php ?>
	<a href="<?php echo $url; ?>">Перейти к результатам викторины</a>
<?php endif; ?>


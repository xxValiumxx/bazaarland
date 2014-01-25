<h2>Listing <span class='muted'>Messages</span></h2>
<br>
<?php if ($messages): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Message</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($messages as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->message; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('messages/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('messages/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-small')); ?>						<?php echo Html::anchor('messages/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-small btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Messages.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('messages/create', 'Add new Message', array('class' => 'btn btn-success')); ?>

</p>

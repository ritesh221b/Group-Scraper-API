<?php 
$collect = [];
$file = fopen("test.csv","r");
while(! feof($file))
{
	array_push($collect,(fgetcsv($file)) );
}
fclose($file);

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />


<table class="ui red table" style="width: 100%">
	<thead>
		<tr>
			<th>Company Name</th>
			<th>Website  URL</th>
			<th>Eamil</th>
			<th>Location</th>
			<th>Instagram page</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($collect as $key => $value): ?>
			<?php if ($key>0 && !empty($value[0])): ?>
				<tr>
					<?php foreach ([1,2,3,4,5,6] as $key): ?>
						<td><?php echo $value[$key] ?></td>
					<?php endforeach ?>
				</tr>
			<?php endif ?>
		<?php endforeach ?>

	</tbody>
</table>

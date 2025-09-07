<html>
<body>
<table cellpadding="0" cellspacing="2">
	<tr>
		<td><input type="checkbox" name="how_hear[]" id="how_hear1" value="Website" 
			<?php 
				echo in_array('Website',$how_hear) ? 'checked="checked"' : ''; 
			?> 
		/>
		</td>
		<td style="padding-left:3px"><label for="how_hear1">Website</label></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="how_hear[]" id="how_hear2" value="TV Commercial" <?php echo in_array('TV Commercial',$how_hear) ? 'checked="checked"' : ''; ?> /></td>
		<td style="padding-left:3px"><label for="how_hear2">TV Commercial</label></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="how_hear[]" id="how_hear3" value="Magazine Ad" <?php echo in_array('Magazine Ad',$how_hear) ? 'checked="checked"' : ''; ?> /></td>
		<td style="padding-left:3px"><label for="how_hear3">Magazine Ad</label></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="how_hear[]" id="how_hear4" value="Billboard" <?php echo in_array('Billboard',$how_hear) ? 'checked="checked"' : ''; ?> /></td>
		<td style="padding-left:3px"><label for="how_hear4">Billboard</label></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="how_hear[]" id="how_hear5" value="Other" <?php echo in_array('Other',$how_hear) ? 'checked="checked"' : ''; ?> /></td>
		<td style="padding-left:3px"><label for="how_hear5">Other</label></td>
	</tr>
</table>
</body>
</html>
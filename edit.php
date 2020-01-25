<tr>
<td>Country <td>
<td>
<select name='country'>
	<option value="India"
	<?php
	if($row["country"]=="India")
	{
		echo "selected";	
	}
	?>
	>India</option>
	<option value="America"
	<?php
	if($row["country"]==" America ")
	{
		echo "selected";	
	}
	?>
	>America</option>
</select>
<td>
</tr>

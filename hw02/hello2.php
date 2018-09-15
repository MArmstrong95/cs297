<!--

	Morgan Armstrong
	CSCI 297 - HW02
	09/17/17

-->

<html>
<body>
<P>
<center>
	<table rules='all' cellpadding='20' bgcolor='white'>
		<tbody>
			<tr>
				<td>
					Hello World. The next 7 days are: <P>
					<?php
						echo "<ul>";
						for($i = 1; $i < 8; $i++)
						{
							echo "<li>";
							echo date("D M jS Y", time() + ($i * 24 * 60 * 60));
							echo "</li>";
						}
						echo "</ul>";
					?>
				</td>
			</tr>
		</tbody>
	</table>
</center>
</P>
</body>

<?php
    require "core/User.php";
    $user = new User();
    include "components/dash_header.php";
?>
    

    <br><br><br><br>
        <form method="POST" action="">
			<div class="container" style="color:black" id="logincont">
				<table align="center" border="0px" style="margin:0px auto;";>
					<tr>
						<td width="140px" id="deftext">Barcode</p></td>
						<td><input type="text" required name="barcode"></td>
					</tr>
					<tr>
						<td width="140px" id="deftext">Item Name</td>
						<td> <input type="text" required name="item_name"></td>
					</tr>
                    <tr>
						<td width="140px" id="deftext">Item Quantity</td>
						<td> <input type="number" required name="item_qty"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><br><br><button type="submit" name="submit" id="black" class="yellowbutton">Submit</button></td>
					</tr>
				</table>
			</div>
		</form>

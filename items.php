<?php
    require "core/User.php";
    $user = new User();

    $search = "";
    if(isset($_POST['submit'])){
        $search=$_POST['search'];
        // $user->read_items($search);
        header("items.php");
    }
    include "components/dash_header.php";
?>
    

    <br><br><br><br>
        <!-- <form method="POST" action="">
			<div class="container" style="color:black" id="logincont">
				<table align="center" border="0px" style="margin:0px auto;";>
					<tr>
						<td width="140px" id="deftext">Search by</p></td>
						<td><input type="text" required name="search"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><br><br><button type="submit" name="submit" id="black" class="yellowbutton">Submit</button></td>
					</tr>
				</table>
			</div>
		</form> -->

        <table border="1" id="full">
            <tr>
                <th width="40%">Barcode</th>
                <th width="40%">Item Name</th>
                <th width="20%">Item Quantity</th>
                <th> Alat </th>
            </tr>
            <br>
            
            <?php
                $result=$user->read_items($search);
                while ($row=$result->fetch_assoc()){
            ?>

            <tr>
                <td id="center"><aaa><?php echo $row['barcode'];?></aaa></td>
                <td id="center"><aaa><?php echo $row['item_name'];?></aaa></td>
                <td id="center"><aaa><?php echo $row['item_qty'];?></aaa></td>
                <td id="center" colspan="2">
                    <a href="edit.php?barcode=<?php echo $row['barcode'];?>" id="actG">&#9998;</a>
                    <a href="hapus.php?barcode=<?php echo $row['barcode'];?>" id="actG">&#10008;</a>
                </td>
            </tr>
            <?php }?>
        </table>

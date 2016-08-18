<table width="876" cellspacing="0" border="1" align="center">
<tbody>
	<tr><td align="center" style="height:50px;" colspan="21">
		<span><h3>Matching Results</h3></span>
</td></tr>
 <tr>
	<td>Properties</td>
	<td>Invester</td>
 </tr>

<?php
        $con=mysql_connect('localhost','root','');
        mysql_select_db('matchingapp');


        $sql='select * from properties';
        $data = mysql_query($sql) or die(mysql_error());
        while($properties = mysql_fetch_array($data))
        {

            $property=array();
            $weight=array();
            $name=array();
			
            echo '<tr><td>'.$properties['title'].'</td><td><table>';
            $query='SELECT * FROM `nonprofits_requirements` where state="'.$properties['state'].'" and budget_maximum_price>='.$properties['price'].' and budget_minimum_price<='.$properties['price'];
            //echo $query;die;
            $result = mysql_query($query) or die(mysql_error());

            //$title=array();
				
			while($row = mysql_fetch_array($result))
			{									
				$name=$row['firstname'].'  '.$row['lastname'];				
				echo '<tr><td>'.$name;
			
				$temp=80;
				$sql='select id from nonprofits_requirements where  bedrooms_max>='.$properties['bedrooms'].' and bedrooms_min<='.$properties['bedrooms'].' and id='.$row['id'];
				$result2 = mysql_query($sql) or die(mysql_error());
				if($row2 = mysql_fetch_assoc($result2)){
				   $temp+=6;
				}

				$sql='select id from nonprofits_requirements where  bathrooms_max>='.$properties['bathrooms'].' and bathrooms_min<='.$properties['bathrooms'].' and id='.$row['id'];
				$result3 = mysql_query($sql) or die(mysql_error());
				if($row3 = mysql_fetch_assoc($result3)){
					$temp+=6;
				}
				$sql='select id from nonprofits_requirements where  area_max>='.$properties['area'].' and area_min<='.$properties['area'].' and id='.$row['id'];
				$result4 = mysql_query($sql) or die(mysql_error());
				if($row4 = mysql_fetch_assoc($result4)){
					$temp+=8;
					//pa($investor[$i].'=>'.$temp);
				}
															
				echo  $temp.'</td></tr>';
			}
				echo '</table>';
			
			echo '</td></tr>';
            //pa($weight);
        }
		
?>
</table>
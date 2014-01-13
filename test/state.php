<?php
        $con=mysql_connect('localhost','root','');
        mysql_select_db('sundaydriver');


        $sql="SELECT id,abbreviations FROM `state` where abbreviations in ('MA','MD','WV','DE','PA','NC','VA','NJ','NY','VT','OH','KY')";
        $data = mysql_query($sql) or die(mysql_error());$state=array(0=>'asdf');
        while($properties = mysql_fetch_assoc($data)) array_push($state,$properties['id']['abbreviations']);
		
		pa($state);

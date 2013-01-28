<?php

    if(mysql_connect('192.168.1.2','admin','admin'))
    {
      mysql_select_db('testdb');
      $result=mysql_query('select isactive  from test');
      while($dataSet=mysql_fetch_assoc($result))
      {
		echo PHP_OS.'<br>';
        if(PHP_OS=='Linux' || PHP_OS=='linux')		
        $dataSet['isactive']=ord($dataSet['isactive']);
		echo $dataSet['isactive'];
        
		
      }
    }
?>
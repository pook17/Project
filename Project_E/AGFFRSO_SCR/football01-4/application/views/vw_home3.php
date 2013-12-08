<?php

foreach($teacher->result() as $row)
	{
		echo $row->t_id;
		echo $row->t_name;
		echo $row->t_tel;
		echo '<br>';
	}


?>
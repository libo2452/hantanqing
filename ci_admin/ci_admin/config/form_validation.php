<?php

$config = array(
                'Auth/login' => array(
                    array(
                    	'field'=>'username',
                    	'label'=>'用户名',
                    	'rules'=>'trim|required|xss_clean'
                    ),
				    array(
                    	'field'=>'password',
                    	'label'=>'密码',
                    	'rules'=>'trim|required|xss_clean'
                    ),
				    array(
                    	'field'=>'remember',
                    	'label'=>'记住我',
                    	'rules'=>'integer'
                    )
			     )
            );
			   
?>
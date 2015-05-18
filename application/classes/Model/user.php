<?php

class Model_User extends Model_Auth_User {
	protected $_has_one = array(
    'courses' => array(
      'model' => 'profile',
      'foreign_key' => 'user_id',
    ),
  );
}

?> 
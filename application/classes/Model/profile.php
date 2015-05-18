<?php

class Model_Profile extends ORM {
	protected $_belongs_to = array(
    'department' => array(
      'model' => 'user',
    ),
  );
}

?> 
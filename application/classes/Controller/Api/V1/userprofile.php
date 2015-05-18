<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_V1_Userprofile extends Controller_REST {

	public function action_create() 
	{
			
		if (HTTP_Request::POST == $this->request->method()) 
		{  

			if (array_key_exists('name', $this->_params) and array_key_exists('address', $this->_params) and array_key_exists('sex', $this->_params ) and array_key_exists('phone', $this->_params ))
			{
				$user_token = ORM::factory('user_token')->where('token', ' = ', $this->request->headers('access_token'))->find();
				// If successful, redirect user
				if ($user_token->token) 
				{   
					$user = ORM::factory('profile');
					$user->name = $this->_params['name'];
					$user->address = $this->_params['address'];
					$user->sex = $this->_params['sex'];
					$user->phone = $this->_params['phone'];
					$user->user_id = (int) $user_token->user_id;
					try { 
					$user->save(); 
					$message = "successfully created";
				    $this->response->body(json_encode(array("message"=>$message)));
				    }
				    catch(ORM_Validation_Exception $e) {
			    	$this->response->status(422);
			        $errors = $e->errors('models');
			        $this->response->body(json_encode($errors));
			        }
				

				} 
				else 
				{   $message = 'Unauthorized';
					$this->response->status(401);
					$this->response->body(json_encode(array("message"=>$message)));
				}
			}
			else
			{	
				$message = 'Insufficient Params';
				$this->response->status(400);
				$this->response->body(json_encode(array("message"=>$message)));	
		    }		
		}

		else 
        {   
        	$message = 'Unauthorized';
			$this->response->status(401);
			$this->response->body(json_encode(array("message"=>$message)));
		}
	}

	public function action_index() 
	{
			
		if (HTTP_Request::GET == $this->request->method()) 
		{
			$user_token = ORM::factory('user_token')->where('token', ' = ', $this->request->headers('access_token'))->find();
			// If successful, redirect user
			if ($user_token->token) 
			{   
				$user = ORM::factory('profile')->where('user_id', ' = ', (int) $user_token->user->id )->find();
				if($user!= Null) 
				{ 
					$this->response->body(json_encode(array("name"=>$user->name,"addess"=>$user->address,"sex"=>$user->phone,"sex"=>$user->sex)));
				}

				else
				{
					$this->response->body(json_encode(array("message"=>"no profile associated with this user")));
				}	
			} 
			else 
			{
				$message = 'Unauthorized';
				$this->response->status(401);
				$this->response->body(json_encode(array("message"=>$message)));
			}
		}	
		else 
        {   
        	$message = 'Unauthorized';
			$this->response->status(401);
			$this->response->body(json_encode(array("message"=>$message)));
		}	
		
	}



}
?>
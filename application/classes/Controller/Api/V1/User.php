<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Api_V1_User extends Controller_REST {


	public function action_signup() 
	{ 
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			
            if (array_key_exists('username', $this->_params) and array_key_exists('password', $this->_params ) and array_key_exists('email', $this->_params ) )
            {	
				try {
			
					// Create the user using form values
					$user = ORM::factory('user')->create_user($this->_params, array(
						'username',
						'password',
						'email'				
					));
					
					// Grant user login role
					$user->add('roles', ORM::factory('role', array('name' => 'login')));
					if ($user) 
					{
		               $this->response->body(json_encode(array("message"=>"successful")));
					}
					else
				    {
				    	$this->response->body(json_encode(array("message"=>"unsuccessful")));
				    }		
					
			    }
			    catch(ORM_Validation_Exception $e){
			    	$this->response->status(403);
			        $errors = $e->errors('models');
			        $this->response->body(json_encode($errors));
			    }
			    catch (Kohana_HTTP_Exception $khe)
			    {   
					$this->_error($khe);
					return;
				}
				catch (Kohana_Exception $e)
				{
					$this->_error('An internal error has occurred', 500);
					throw $e;
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
	
	public function action_login() 
	{
			
		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Attempt to login user
			// $remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			if (array_key_exists('username', $this->_params) and array_key_exists('password', $this->_params ))
			{	
				$user = Auth::instance()->login($this->_params['username'], $this->_params['password'], TRUE);
				
				// If successful, redirect user
				if ($user) 
				{   $user = ORM::factory('user');
	                $user->where('username', ' = ', $this->_params['username'])->find();
	                $user_token = ORM::factory('user_token')->where('user_id', ' = ', (int) $user->id)->find();
					$this->response->body(json_encode(array("access_token"=>$user_token->token,'email'=>$user->email,'id'=>$user->id)));
				} 
				else 
				{
					$message = 'Login failed';
					$this->response->status(401);
					$this->response->body(json_encode(array("message"=>$message)));
				}
			}
			else
			{
				$message = 'Username or Password is missing';
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

	
	public function action_logout() 
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{	
			$user_token = ORM::factory('user_token')->where('token', ' = ', $this->request->headers('access_token'))->find();
			if ($user_token->token)
			{
				$user_token->delete();
				$message = 'Logged out successful';
				$this->response->body(json_encode(array("message"=>$message)));
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
<?php 

namespace Forms;
use Laracasts/Validation/FormValidator;

class RegistrationForm extends FormValidator{

	projected $rules =[



            'contactName' => 'required',
            'contactEmail' => 'required|email',
            'contactMessage' => 'required',
           // 'recaptcha_response_field' => 'required|recaptcha',
       
	]


}

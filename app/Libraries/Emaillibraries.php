<?php

namespace App\Libraries;

class Emaillibraries
{
    private $email;

    public function __construct()
    {
        $this->email = \Config\Services::email();
    }

    public function send_mail($form_data)
    {
        $email_content = '<h3>Name: ' . $form_data['name'] . '</h3>';
        $email_content .= '<h3>Contact Number: ' . $form_data['pnumber'] . '</h3>';
        $email_content .= '<h3>Contact Email: ' . $form_data['email'] . '</h3>';
        $email_content .= '<h3>Description:</h3>';
        $email_content .= '<p>' . $form_data['msg'] . '</p>';
    
        $this->email->setFrom($form_data['email']); 
        $this->email->setTo("santu.koffeekodes@gmail.com", 'Fitness');
        $this->email->setSubject('New Enquiry from fitness');
        $this->email->setMessage($email_content);
        $this->email->setMailType('html');
    
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }
    
    
}

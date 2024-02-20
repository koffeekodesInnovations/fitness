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

        $this->email->setTo('ashishdadhich15@gmail.com');
        $this->email->setFrom("ashishdadhich15@gmail.com", 'Earth Mover Enterprise');
        $this->email->setSubject('New Enquiry from Earth Mover Enterprise');
        $this->email->setMessage($email_content);
        $this->email->setMailType('html');

        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }
    
}

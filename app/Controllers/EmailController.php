<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Emaillibraries;

class EmailController extends BaseController
{
    public function sendMail()
    {
        // Validate the form fields
        $validationRules = [
            'name'    => 'required',
            'email'   => 'required|valid_email',
            'pnumber' => 'required',
            'msg'     => 'required',
        ];
    
        $isValid = $this->validate($validationRules);
    
        if (!$isValid) {
            // Validation failed
            return $this->response->setJSON([
                'success' => false,
                'message' => $this->validator->getErrors(),
            ]);
        }
    
        $form_data = $this->request->getPost();
    
        // Initialize the email library
        $emailLib = new Emaillibraries();
    
        // Send email
        $emailSent = $emailLib->send_mail($form_data);
    
        if ($emailSent) {
            return $this->response->setJSON(['success' => true, 'message' => 'Message submitted successfully!']);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => 'Server Error']);
        }
    }
    
}

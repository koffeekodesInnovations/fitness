<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\Emaillibraries;

class EmailController extends BaseController
{
    // public function sendMail()
    // {
    //     // Validate the form fields
    //     $validationRules = [
    //         'name'    => 'required',
    //         'email'   => 'required|valid_email',
    //         'pnumber' => 'required',
    //         'msg'     => 'required',
    //     ];
    
    //     $isValid = $this->validate($validationRules);
    
    //     if (!$isValid) {
    //         // Validation failed
    //         return $this->response->setJSON([
    //             'success' => false,
    //             'message' => $this->validator->getErrors(),
    //         ]);
    //     }
    //     $form_data = $this->request->getPost();
    //     // Initialize the email library
    //     $emailLib = new Emaillibraries();
    //     // Send email
    //     $emailSent = $emailLib->send_mail($form_data);
    //     if ($emailSent) {
    //         return $this->response->setJSON(['success' => true, 'message' => 'Message submitted successfully!']);
    //     } else {
    //         return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => 'Server Error']);
    //     }
    // }

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

    // Check if email was sent successfully
    if (!$emailSent) {
        return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => 'Server Error']);
    }

    // If email sent successfully, proceed to insert data into the database
    try {
        // Get database connection from configuration
        $db = \Config\Database::connect();
        
        // Insert data into the database using Query Builder
        $data = [
            'name' => $form_data['name'],
            'phonenumber' => $form_data['pnumber'],
            'email' => $form_data['email'],
            'message' => $form_data['msg'],
            'created_at' => date('Y-m-d H:i:s')
        ];
        
        $db->table('email')->insert($data);
        
        // Check if insertion was successful
        if ($db->affectedRows() > 0) {
            // Email sent and data inserted successfully
            return $this->response->setJSON(['success' => true, 'message' => 'Message submitted successfully!']);
        } else {
            // Insertion failed
            return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => 'Database Error']);
        }
    } catch (\Exception $e) {
        // Database connection or query execution error
        return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => $e->getMessage()]);
    }
}

    
}

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

            return $this->response->setJSON([
                'success' => false,
                'message' => $this->validator->getErrors(),
            ]);
        }
        $form_data = $this->request->getPost();


        // send email to  Admin
        $admin_msg = '<h3>Name: ' . $form_data['name'] . '</h3>';
        $admin_msg .= '<h3>Contact Number: ' . $form_data['pnumber'] . '</h3>';
        $admin_msg .= '<h3>Contact Email: ' . $form_data['email'] . '</h3>';
        $admin_msg .= '<h3>Description:</h3>';
        $admin_msg .= '<p>' . $form_data['msg'] . '</p>';
        $to = "bhumika.sf2stayfitforever@gmail.com";
        $subject = "Enquiry from SF2 Website";

        $this->sendEmail($to, $subject, $admin_msg);



        // send email to  User
        $email_content = "<p>
            Dear $form_data[name], <br><br>
            Thank you for reaching out to us! <br>
            We have received your message and appreciate you taking the time to contact us. Our team is reviewing your inquiry and will get back to you as soon as possible. <br>
            If you have any urgent concerns or need immediate assistance.<br>
            Thank you for choosing SF2 . We look forward to assisting you.<br><br>
            Best regards,
            SF2 Admin
        </p>";

        $to = $form_data['email'];
        $subject = "Thanks for Contact us | Sf2 ";
        $emailSent = $this->sendEmail($to, $subject, $email_content);

        if (!$emailSent) {
            return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => 'Server Error']);
        }
        try {
            $db = \Config\Database::connect();
            $data = [
                'name' => $form_data['name'],
                'phonenumber' => $form_data['pnumber'],
                'email' => $form_data['email'],
                'message' => $form_data['msg'],
                'created_at' => date('Y-m-d H:i:s')
            ];
            $db->table('email')->insert($data);
            if ($db->affectedRows() > 0) {
                return $this->response->setJSON(['success' => true, 'message' => 'Message submitted successfully!']);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => 'Database Error']);
            }
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'message' => 'Message submission failed.', 'debug' => $e->getMessage()]);
        }
    }



    public function sendEmail($to, $subject, $email_content)
    {
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom("bhumika.sf2stayfitforever@gmail.com", 'SF2');
        $email->setSubject($subject);
        $email->setMessage($email_content);
        $email->setMailType('html');
        if ($email->send()) {
            return true;
        } else {
            return false;
        }
    }
}

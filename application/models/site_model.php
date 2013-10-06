<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: OpenSkyMedia
 * Date: 12/12/11
 * Time: 11:44 AM
 */
class Site_model extends CI_Model
{
    public function createContact($uid,$firstname, $lastname, $email, $street, $city, $state, $zip, $telephone, $message)
    {
        $data = array(
            'uid'       => $uid,
            'firstname' => $firstname,
            'lastname'  => $lastname,
            'email'     => $email,
            'street'    => $street,
            'city'      => $city,
            'state'     => $state,
            'zip'       => $zip,
            'telephone' => $telephone,
            'message'   => $message,
        );

        $this->db->insert('contacts', $data);

    }

    public function emailContact($uid, $firstname, $lastname, $subject, $email, $street, $city, $state, $zip, $telephone, $message, $recipient)
    {
        /* Send to Permian Homes */

        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $data = array(
            'uid'       => $uid,
            'firstname' => $firstname,
            'lastname'  => $lastname,
            'email'     => $email,
            'street'    => $street,
            'city'      => $city,
            'state'     => $state,
            'zip'       => $zip,
            'telephone' => $telephone,
            'message'   => $message,
        );

        $fullname = $firstname . ' ' . $lastname;

        $this->email->from($email, $fullname);

        $this->email->to($recipient);

        $email_message = "Customer Contact created for: " . $firstname . ' ' . $lastname . '<br/>';
        $email_message .= "Customer ID: " . $uid . "<br/>";
        $email_message .= "Email Address (if provided): " . $email . '<br/>';
        $email_message .= "Address (if provided): " . $street . '<br/>';
        $email_message .= $city . ', ' . $state . ' ' . $zip . '<br/>';
        $email_message .= "Telephone (if provided): " . $telephone . '<br/>';
        $email_message .= "Message: " . $message;


        $this->email->subject($subject);

        $this->email->message($email_message);

        $this->email->send();

        /* Send to Requesting Person */

        $config2['charset'] = 'iso-8859-1';
        $config2['wordwrap'] = TRUE;
        $config2['mailtype'] = 'html';

        $this->email->initialize($config2);

        $fullname2 = $firstname . ' ' . $lastname;

        $this->email->from($recipient, 'Permian Homes');

        $this->email->to($email);

        $email_message2 = 'Thank you ' .$firstname . ' for your request.  We will be in contact with you within 48 hours.  If this is an emergency, please call (432) 362-3436';

        $this->email->subject('Permain Homes: Thank You For Your Request');

        $this->email->message($email_message2);

        $this->email->send();

    }
}

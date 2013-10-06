<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: OpenSkyMedia
 * Date: 12/12/11
 * Time: 11:18 AM
 */
class Site extends CI_Controller
{


    function newContact()
    {
        $this->load->model('Site_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert-box error">', '</div>');

        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim');
        $this->form_validation->set_rules('street', 'Street Address', 'required|trim');
        $this->form_validation->set_rules('city', 'City Address', 'required|trim');
        $this->form_validation->set_rules('state', 'State Address', 'required|trim');
        $this->form_validation->set_rules('zip', 'Zip Address', 'required|trim');
        $this->form_validation->set_rules('telephone', 'Telephone', 'required|trim');
        $this->form_validation->set_rules('message', 'Your Message', 'required|trim');

        $this->form_validation->set_rules('human', 'Are You Human?', 'trim|required');
        $this->form_validation->set_rules('human_again', 'Please type the same word again', 'trim|required|matches[human]');

        if ($this->form_validation->run() == FALSE)
        {
            $newdata = array(
                'form_error'  => 'You are missing a required field or you did not enter matching info in the "Are You Human" fields. We apologize for the inconvenience.'
            );

            $this->session->set_userdata($newdata);

            if ($this->input->post('recipient') == 'warranty') {
                redirect('/about#tabs-2');
            } else {
                redirect('/about#tabs-3');
            }
        }
        else
        {
            // validation has passed. Now send to model
            $uid        = uniqid();
            $firstname = (string)$this->input->post('firstname', TRUE);
            $lastname = (string)$this->input->post('lastname', TRUE);
            $email = (string)$this->input->post('email', TRUE);
            $street = (string)$this->input->post('street', TRUE);
            $city = (string)$this->input->post('city', TRUE);
            $state = (string)$this->input->post('state', TRUE);
            $zip = (string)$this->input->post('zip', TRUE);
            $telephone = (string)$this->input->post('telephone', TRUE);
            $message = (string)$this->input->post('message', TRUE);

            if ($this->input->post('recipient') == 'warranty') {
                $subject = 'Warranty Request';
                $recipient = 'customerservice@permianhomes.com';
//            $recipient = 'jasshultz@gmail.com';
            } else {
                $subject = 'New Contact';
                $recipient = 'david@permianhomes.com';
//            $recipient = 'jasshultz@gmail.com';
            }



            $this->Site_model->createContact($uid, $firstname, $lastname, $email, $street, $city, $state, $zip, $telephone, $message);

            $this->Site_model->emailContact($uid, $firstname, $lastname, $subject, $email, $street, $city, $state, $zip, $telephone, $message, $recipient);

            redirect('/pages/index/1/21');
        }



    }

}

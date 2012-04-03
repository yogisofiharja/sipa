<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_auth extends CI_Controller {

    function __construct() {
        parent::__construct();

        /*
         * muat library dan helper yang dibutuhkan
         * $this->load->database(); library ini tidak perlu diload lagi karena sudah diload di model
         */
        $this->load->library('ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }

    public function login() {
        $main['page'] = 'dashboard';
        $main['message'] = '';
        $main['sidemenu'] = 'overview';
        /* bila sudah login */
        if ($this->ion_auth->logged_in()) {
            /* tidak perlu lagi mengakses halaman form login */
            redirect('');
        }
        /*
         * buat validasi input form login
         * validasi username wajib diisi dan bersih dari cross site scripting
         */
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        /* validasi password wajib diisikasir1 */
        $this->form_validation->set_rules('password', 'Password', 'required');
        /* apabila validasi benar */
        if ($this->form_validation->run() == true) {
            /* cek apakah "remember me" dicentang */
            $remember = (bool) $this->input->post('remember');
            /* cek pada database, bila kombinasi username dan password benar */
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember)) {
                /* set pesan berhasil login pada session flashdata */
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                /* redirect ke halaman beranda untuk dirouting sesuai rolenya */
                $user = $this->ion_auth->get_user_by_email($this->input->post('email'));
                /*
                 * kalo berhasil
                 */
                redirect(getenv(HTTP_REFERER));
            } else {
                /*
                 * apabila login gagal
                 * set pesan error login pada session flashdata 
                 */
                $main['message'] = $this->session->set_flashdata('message', '<div class="message error" style="text-align:center;height:38px;">' . $this->ion_auth->errors() . '</div>');
                /* redirect kembali ke halaman login */
                redirect('', $main);
            }
        } else {
            /*
             * apabila validasi form login salah atau belum diisi
             * set flashdata untuk kesalahan input atau untuk pesan error sebelumnya
             */
            $main['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            redirect('', $main);
        }
    }

    function registrasi() {
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('name', 'Sure Name', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required');
        /* apabila validasi benar */
        if ($this->form_validation->run() == true) {
            /*
             * Field utama untuk autentikasi adalah username, email dan password, disimpan di table users
             * selain ketiga itu dikelompokkan ke additional data dan disimpan di table meta
             * post nilai untuk username, email dan password
             */
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            /* ini data tambahan untuk profil user */
            $additional_data = array(
                'name' => $this->input->post('name'),
                'gender' => $this->input->post('gender')
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($password, $email, $additional_data)) {
            /* apabila proses registrasi berhasil */
            echo"Register Succes!";
        } else {
            /* apabila proses registrasi gagal */
            $message = (validation_errors()) ? validation_errors() : $this->ion_auth->errors();
            echo"$message";
        }
    }

    function lupa_password() {
        $main['page'] = 'dashboard';
        $main['message'] = '';
        $main['sidemenu'] = 'overview';
        /* set validasi untuk email */
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
        /* apabila validasi salah atau form dibuka pertama kali */
        if ($this->form_validation->run() == false) {
            $main['email'] = array('name' => 'email',
                'id' => 'email',
                'type' => 'text'
            );
            $main['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $redirect('', $main);
        } else {
            /*
             * apabila validasi benar
             * jalankan fungsi forgotten_password() untuk mengirimkan link reset password melalui email
             */
            $forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));
            /* apabila tidak ada error */
            if ($forgotten) {
                /* set message dari library ke flashdata */
                $main['message'] = $this->session->set_flashdata('message', '<div class="message info" style="text-align:center;height:38px;">' . $this->ion_auth->messages() . '</div>');
                redirect('', $main);
            } else {
                /*
                 * apabila ada error pada saat menjalankan forgotten_password()
                 * set pesan error dari library ke flashdata 
                 */
                $main['message'] = $this->session->set_flashdata('message', '<div class="message error" style="text-align:center;height:38px;">' . $this->ion_auth->errors() . '</div>');
                redirect('', $main);
            }
        }
    }

    public function reset_password($code) {
        /*
         * mengirimkan kode $code, mencocokkannya dengan database dan mereset password
         */
        $reset = $this->ion_auth->forgotten_password_complete($code);
        if ($reset) {
            /*
             * apabila reset password sukses 
             * redirect ke halaman index
             */
            $main['message'] = $this->session->set_flashdata('message', '<div class="message info" style="text-align:center;height:38px;">' . $this->ion_auth->messages() . '</div>');
            redirect('', $main);
        } else {
            /*
             * apabila reset password gagal
             * redirect ke halaman lupa_password()
             */
            $main['message'] = $this->session->set_flashdata('message', '<div class="message error" style="text-align:center;height:38px;">' . $this->ion_auth->errors() . '</div>');
            redirect('', $main);
        }
    }

    function aktivasi($id, $code = false) {
        /*
         * apabila $code berisi nilai dari link yang dikirim melalui email
         */
        if ($code !== false
        )
        /*
         * aktifkan akun dengan id $id dengan terlebih dahulu mencocokkan $code -
         * dengan yang sudah terdaftar di dalam database
         */
            $activation = $this->ion_auth->activate($id, $code);
        if ($activation) {
            /*
             * Aktivasi Berhasil
             */
            $main['message'] = $this->session->set_flashdata('message', '<div class="message info" style="text-align:center;height:38px;">' . $this->ion_auth->messages() . '</div>');
            redirect('', $main);
        } else {
            /*
             * Aktivasi Gagal
             */
            $main['message'] = $this->session->set_flashdata('message', '<div class="message error" style="text-align:center;height:38px;">' . $this->ion_auth->errors() . '</div>');
            redirect('', $main);
        }
    }

    function logout() {
        $this->ion_auth->logout();
        redirect('');
    }

}
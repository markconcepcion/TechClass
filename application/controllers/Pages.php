 <?php
class Pages extends CI_Controller 
{
    public function view($page = 'homepage_teach')
	{
       
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['classes'] = $this->course_model->get();
        $data['title'] = ucfirst($page); // Capitalize the first letter
        //$data['results'] = $this->payment_model->get_list();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}


}
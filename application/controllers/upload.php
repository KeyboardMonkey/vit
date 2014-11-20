<?php

class upload extends MY_Controller{
    public function  __construct(){
        parent::__construct();
    }
    public function upload_course_lecture($course_id=NULL)
    {
        $status = "";
        $msg = "";
        $file_element_name = 'videofile';
        if($course_id == NULL)
        {
            $status = "error";
            $msg = "NO SUCH COURSE";
        }
        else if (empty($_POST['title']))
        {
            $status = "error";
            $msg = "Please enter a title";
        }

        if ($status != "error")
        {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'mp4|3gp|flv';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $lecture = new lecture();
                $lecture -> course_id = $course_id;
                $lecture -> vid_path = 'files/' .  $data['file_name'];
                $lecture -> vid_title = $this -> input -> post('title');
                $lecture -> save();
                //$file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
                if($lecture -> $lect_id)
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }
}

?>
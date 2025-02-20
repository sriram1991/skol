<?php if(!defined('BASEPATH')) exit('Direct script access is prohibited');
class Report_model extends CI_Model {

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function get_payment_status_students($status){
      $querry = array('payment_status' => $status);
      $result = $this->db->get_where('student_batch_payment_view',$querry);
      if(isset($result)){
        return $result->result();
      }
      return null;
    }
    
    public function get_payment_status_assocaites($status){
      $querry = array('payment_status' => $status );
      $result = $this->db->get_where('associate_subject_payment_view',$querry);
      if(isset($result)){
        return $result->result();
      }
      return null;
    }

    public function payment_unverified_students(){
      $querry = array('payment_status' => 8);
      $result = $this->db->get_where('batch_master',$querry);
      if(isset($result)){
        return $result->result();
      }
      return null; 
    }

    public function get_batchwise_students($batch){
      if($batch!=null){
        $querry = array('batch_name'=>$batch);
        $result = $this->db->get_where('student_batch_payment_view',$querry);
        if(isset($result)){
          return $result->result();
        }
        return null;
      }else{
        return null;
      }

    }

    public function get_batchwise_associates($batch){
      if($batch!=null){
        $querry = array('user_state' => $batch ,'user_status'=>1,'user_role'=>3);
        $result = $this->db->get_where('user_master',$querry);
        if(isset($result)){
          return $result->result();
        }
        return null;
      }else{
        return null;
      }
    }

    // Operation : get unregistered associates and students details Note: Type could be number 
    public function get_unregistered_list_view($user_role,$user_status){
      $result = $this->db->query('SELECT registration_no,user_fname,user_email,user_phone,status_name from user_status_role_view where user_status= "'.$user_status.'" AND user_role="'.$user_role.'"');

        if($result->num_rows() > 0) {
          return $result->result();
        }
        return null;
    }

    // Opetation : Get USER Count 
    function get_user_count($user_role){
        $result = $this->db->get_where('user_master',array('user_role' => $user_role));
        return $result->num_rows();
    }

    // Operation : get parent childrens
    public function get_parent_children($parent_id){
      $result = $this->db->get_where('parent_student_details_view',array('parent_id' => $parent_id));
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

    
    // public function get_no_of_students($parent_id){
    //   $result = $this->db->query('SELECT count(user_id) from user_master,student_parent_map where student_id = user_id and parent_id="'.$parent_id.'"');

    //     if($result->num_rows() > 0) {
    //       return $result->result();
    //     }
    //     return null;
    // }

    function get_student_ranks($test_no,$course_id){
      
      $test_details_array = $this->db->get_where('assessment_master',array('test_no' =>$test_no));
      $test_details = array_shift($test_details_array->result_array());
      $test_date = $test_details['test_date'];
      // Furture use for getting reports based on test time
      // $start_time = $test_details['start_time'];
      // $end_time = $test_details['end_time'];
      // $test_start_time = $test_date +' '+$start_time;
      // $test_end_time = $test_date +' '+$end_time;
      // $result = $this->db->query("SELECT * FROM student_assessment_score_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and test_score>0 and Date(test_date)='".$test_date."' ORDER BY test_percentage DESC");
      $result = $this->db->query("SELECT * FROM students_assessments_scores_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and test_score > 0 ORDER BY test_percentage DESC;");
      if($result->num_rows>0){
        return $result->result();
      }else{
        return null;
      }
    }

    function get_nation_student_ranks($user_country,$test_no,$course_id){

      $test_details_array = $this->db->get_where('assessment_master',array('test_no' =>$test_no));
      $test_details = array_shift($test_details_array->result_array());
      $test_date = $test_details['test_date'];
      // Furture use for getting reports based on test time
      // $start_time = $test_details['start_time'];
      // $end_time = $test_details['end_time'];
      // $test_start_time = $test_date +' '+$start_time;
      // $test_end_time = $test_date +' '+$end_time;
      // $result = $this->db->query("SELECT * FROM student_assessment_score_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and test_score>0 and Date(test_date)='".$test_date."' ORDER BY test_percentage DESC");
      $result = $this->db->query("SELECT * FROM students_assessments_scores_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and user_country='".$user_country."' and test_score > 0 ORDER BY test_percentage DESC;");
      if($result->num_rows>0){
        return $result->result();
      }else{
        return null;
      }
    }


    function get_student_batchwise_ranks($test_no,$batch_name,$course_id){
      $test_details_array = $this->db->get_where('assessment_master',array('test_no' =>$test_no));
      $test_details = array_shift($test_details_array->result_array());
      $test_date = $test_details['test_date'];
      
      // $result = $this->db->query("SELECT * FROM student_assessment_score_view WHERE user_state = '".$batch_name."' and test_no='".$test_no."' and course_id='".$course_id."' and test_score>0 and Date(test_date)='".$test_date."' ORDER BY test_percentage DESC");
      // Batch View Taken From Batch_master table 
      // $result = $this->db->query("SELECT * FROM students_assessments_scores_view WHERE user_state = '".$batch_name."' and test_no='".$test_no."' and course_id='".$course_id."' and test_score>0 and Date(test_date)='".$test_date."' ORDER BY test_percentage DESC");
      $result = $this->db->query("SELECT * FROM students_assessments_scores_view WHERE user_state = '".$batch_name."' and test_no='".$test_no."' and course_id='".$course_id."' and test_score > 0 ORDER BY test_percentage DESC;");
      if ($result->num_rows>0) {
        return $result->result();
      }else{
        return null;
      }
    }

    function get_batchwise_student_ranks($test_no,$batch_name,$course_id){
      $test_details_array = $this->db->get_where('assessment_master',array('test_no' =>$test_no));
      $test_details = array_shift($test_details_array->result_array());
      $test_date = $test_details['test_date'];
      // Furture use for getting reports based on test time
      // $start_time = $test_details['start_time'];
      // $end_time = $test_details['end_time'];
      // $test_start_time = $test_date +' '+$start_time;
      // $test_end_time = $test_date +' '+$end_time;
      // $result = $this->db->query("SELECT * FROM student_assessment_score_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and test_score>0 and user_state = '".$batch_name."' and Date(test_date)='".$test_date."' ORDER BY test_percentage DESC");
      // Changing to get batch name as user_state 
      // $result = $this->db->query("SELECT * FROM students_assessments_scores_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and test_score>0 and user_state = '".$batch_name."' and Date(test_date)='".$test_date."' ORDER BY test_percentage DESC");
      $result = $this->db->query("SELECT * FROM students_assessments_scores_view WHERE test_no='".$test_no."' and course_id='".$course_id."' and test_score > 0 and user_state = '".$batch_name."' ORDER BY test_percentage DESC;");
      if($result->num_rows>0){
        return $result->result();
      }else{
        return null;
      } 

    }


    function get_all_course_tests($course_id){
      $result = $this->db->get_where('course_assessment_mapview',array('course_id' => $course_id,'resource_status' =>'Published'));
      if($result->num_rows>0){
        return $result->result();
      }else{
        return null;
      }
    }

    // Operation : Get SMS Logs
    function get_sms_log(){
      $result = $this->db->get('unsend_sms_alert');
      if(isset($result)){
        return $result->result();
      }
      return null;
    }

    // Operation : Delete SMS Log
    function delete_sms_log($sms_id){
      $result = $this->db->delete('unsend_sms_alert',array('id' => $sms_id ));
      return $result;
    }

    // Operation : Get all Country list from test taken table  1
    function get_all_country_list() {
                $this->db->group_by('user_country');
      $result = $this->db->get('students_assessments_scores_view');
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

    // Operation : Get all States list from test taken table   2
    function get_state_list() {
                $this->db->group_by('user_state');
      $result = $this->db->get('students_assessments_scores_view');
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

    // Operation : Get all Area of interest ie test_subject list from test taken table   3
    function get_aoi_list() {
                $this->db->group_by('test_subject');
      $result = $this->db->get('students_assessments_scores_view');
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

    // Operation : Get all course list from test taken table 
    function get_course_list() {
                $this->db->group_by('course_id');
      $result = $this->db->get('students_assessments_scores_view');
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

    // Operation : Get all test name list from test taken table 
    function get_test_name_list() {
                $this->db->group_by('test_no');
      $result = $this->db->get('students_assessments_scores_view');
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

    // Operation : Get New Student Rank List 
    function get_new_student_ranks($search_filter) {
      // $result = $this->db->query("SELECT * FROM student_assessment_score_view WHERE test_no='".$search_filter['test_no']."' and course_id='".$search_filter['course_id']."' and test_score > 0 ORDER BY test_percentage DESC;");
      // $search_filter['test_score > '] = '0';
                $this->db->order_by("test_percentage", "desc");
      $result = $this->db->get_where("students_assessments_scores_view",$search_filter);
      if($result->num_rows() > 0){
        return $result->result();
      }
      return null;
    }

}
    <div class="sometype">
    </div> <br> <br> <br>
         <h4>State Level Rank</h4>
        <div class="box">
            <div class="box-body table-responsive">

                <table id="st_rank_list" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Registration NO</th>
                            <th>User Name</th>
                            <th>Test No</th>
                            <th>Test Name</th>
                            <th>Test Taken Date</th>
                            <th>Total Marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody> 
                            <?php  
                            $count = 1;
                            if(isset($batch_rank_list)){
                                $student_id = $this->session->userdata("CR_child_id");

                                foreach ($batch_rank_list as $res) {
                                    if($student_id == $res->user_id) {
                                            echo "<tr>";
                                            echo "<td>".$user_st_rank_count."</td>";
                                            echo "<td>".$res->registration_no."</td>";
                                            echo "<td>".$res->user_fname."</td>";
                                            echo "<td>".$res->test_no."</td>";
                                            echo "<td>".$res->test_name."</td>";
                                            echo "<td>".$res->test_date."</td>";
                                            echo "<td>".($res->no_of_questions*4)."</td>";
                                            echo "<td>".$res->test_score."</td>";
                                            echo "<td>".$res->test_percentage."</td>";                                    
                                    }else{
                                        $count ++;
                                    }
                                }
                            }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rank</th>
                            <th>Registration NO</th>
                            <th>User Name</th>
                            <th>Test No</th>
                            <th>Test Name</th>
                            <th>Test Taken Date</th>
                            <th>Total Marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    <br> <br>

    <h4>Nation Level Rank</h4>
        <div class="box">
            <div class="box-body table-responsive">

                <table id="na_rank_list" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Registration NO</th>
                            <th>User Name</th>
                            <th>Test No</th>
                            <th>Test Name</th>
                            <th>Test Taken Date</th>
                            <th>Total Marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php  
                            $count = 1;
                            if(isset($country_rank_list)){
                                $student_id = $this->session->userdata("CR_child_id");

                                foreach ($country_rank_list as $res) {
                                    if($student_id == $res->user_id){
                                            echo "<tr>";
                                            echo "<td>".$user_na_rank_count."</td>";
                                            echo "<td>".$res->registration_no."</td>";
                                            echo "<td>".$res->user_fname."</td>";
                                            echo "<td>".$res->test_no."</td>";
                                            echo "<td>".$res->test_name."</td>";
                                            echo "<td>".$res->test_date."</td>";
                                            echo "<td>".($res->no_of_questions*4)."</td>";
                                            echo "<td>".$res->test_score."</td>";
                                            echo "<td>".$res->test_percentage."</td>";      
                                        }else{
                                            $count++;
                                        }
                                }
                            }
                ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rank</th>
                            <th>Registration NO</th>
                            <th>User Name</th>
                            <th>Test No</th>
                            <th>Test Name</th>
                            <th>Test Taken Date</th>
                            <th>Total Marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    <br> <br>
         <h4>Internation Level Rank</h4>
        <div class="box">
            <div class="box-body table-responsive">

                <table id="in_rank_list" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Registration NO</th>
                            <th>User Name</th>
                            <th>Test No</th>
                            <th>Test Name</th>
                            <th>Test Taken Date</th>
                            <th>Total Marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php  
                            $count = 1;
                            if(isset($rank_list)){
                                $student_id = $this->session->userdata("CR_child_id");

                                foreach ($rank_list as $res) {
                                    if($student_id == $res->user_id){
                                            echo "<tr>";
                                            echo "<td>".$user_in_rank_count."</td>";
                                            echo "<td>".$res->registration_no."</td>";
                                            echo "<td>".$res->user_fname."</td>";
                                            echo "<td>".$res->test_no."</td>";
                                            echo "<td>".$res->test_name."</td>";
                                            echo "<td>".$res->test_date."</td>";
                                            echo "<td>".($res->no_of_questions*4)."</td>";
                                            echo "<td>".$res->test_score."</td>";
                                            echo "<td>".$res->test_percentage."</td>";      
                                        }else{
                                            $count++;
                                        }
                                }
                            }
                ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Rank</th>
                            <th>Registration NO</th>
                            <th>User Name</th>
                            <th>Test No</th>
                            <th>Test Name</th>
                            <th>Test Taken Date</th>
                            <th>Total Marks</th>
                            <th>Marks Obtained</th>
                            <th>Percentage</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
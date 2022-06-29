<?php 
  $conn=@mysqli_connect('localhost','root','','merit');
  $ans;
  if(!$conn)
  {
    $ans='<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> We Can Not Able To connect You At This Moment...
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
    echo $ans;
    exit();
  }
  else{
    if($_SERVER['REQUEST_METHOD']=='GET')
    {
        $merit=$_GET["merit"];
        $category=$_GET["category"];
        $branch=$_GET["branch"];
        $query= "SELECT * FROM `merit` WHERE `openrank`>'$merit' OR `openrank`=0 ";
        $result= @mysqli_query($conn,$query);
        if(!$result)
        {
            $ans='<div class="alert alert-Warning alert-dismissible fade show" role="alert">
            <strong>Sorry !</strong> We Can Not Find Any Result...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            echo $ans;
            exit();

        }
        else
        {
            $num = @mysqli_num_rows($result);
            if($num==0)
            {
               $ans='<div class="alert alert-warning alert-dismissible fade show" role="alert">
               <strong>Sorry !</strong> We can not Find Any Record.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               </div>';
               echo $ans;
                exit();
            }
            else
            {
                $ans="<div class='container-fluid my-3'>
                <table class='table' id='myTable'>
                  <thead>
            
                    <tr>
                      <th scope='col'>Closing Merit No</th>
                      <th scope='col'>Closing Merit Mark</th>
                      <th scope='col'>Institute</th>
                      <th scope='col'>IC Code</th>";
            if($_SERVER['REQUEST_METHOD']=='GET')
          {
          $branch=$_POST['branch'];
          if($branch=='All')
          {

            $ans=.'<th scope="col">Branch</th>';
          }
          }
                $ans=."</tr>
                </thead>
                <tbody>";
                $result=FALSE;
    if($_SERVER['REQUEST_METHOD']=='GET')
    {
        $merit=$_GET["merit"];
        $category=$_GET["category"];
        $branch=$_GET["branch"];

            }

        }


    }
  }
?>

         


        
        <?php
        
        

        
        echo '<div class="alert alert-info" role="alert">
        You Select '.$branch.' Branch With Category '.$category.' On Merit Rank '.$merit.'
        
        </div>';

        //SEBC CHecker
        if($category=="SEBC")
        {
          if($branch=='All')
          {
            $query= "SELECT * FROM `merit` WHERE `sebcrank`>'$merit' ";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['sebcrank'].'</th>
                <td>'.$row['sebcmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                <td>'.$row['course'].'</td>
                
                
                </tr>';
   
                }

            }

          }
          else
          {

          
            $query= "SELECT * FROM `merit` WHERE (`sebcrank`>'$merit' ) AND `course`='$branch'";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['sebcrank'].'</th>
                <td>'.$row['sebcmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                
                
                </tr>';
   
                }

            }
          }

                

        }
        //open checker

        if($category=="GENERAL")
        {
          if($branch=='All')
          {
            $query= "SELECT * FROM `merit` WHERE `openrank`>'$merit' ";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['openrank'].'</th>
                <td>'.$row['openmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                <td>'.$row['course'].'</td>
                
                
                </tr>';
   
                }

            }

          }
        
          else
          {
            $query= "SELECT * FROM `merit` WHERE `openrank`>'$merit' AND `course`='$branch'";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['openrank'].'</th>
                <td>'.$row['openmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                
                
                </tr>';
   
                }

            }
          }

                

        }

        //sc checker

        if($category=="SC")
        {
          if($branch=='All')
          {
            $query= "SELECT * FROM `merit` WHERE `scrank`>'$merit' ";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['scrank'].'</th>
                <td>'.$row['scmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                <td>'.$row['course'].'</td>
                
                
                </tr>';
   
                }

            }

          }
          else
          {
            $query= "SELECT * FROM `merit` WHERE `scrank`>'$merit' AND `course`='$branch'";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['scrank'].'</th>
                <td>'.$row['scmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                
                
                </tr>';
   
                }

            }
          }

                

        }
        //st checker

        if($category=="ST")
        {
          if($branch=='All')
          {
            $query= "SELECT * FROM `merit` WHERE `strank`>'$merit' ";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['strank'].'</th>
                <td>'.$row['stmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                <td>'.$row['course'].'</td>
                
                
                </tr>';
   
                }

            }

          }
          else
          {
            $query= "SELECT * FROM `merit` WHERE `strank`>'$merit' AND `course`='$branch'";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['strank'].'</th>
                <td>'.$row['stmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                
                
                </tr>';
   
                }

            }
          }

                

        }
        //ews checker

        if($category=="EWS")
        {
          if($branch=='All')
          {
            $query= "SELECT * FROM `merit` WHERE `ewsrank`>'$merit' ";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['ewsrank'].'</th>
                <td>'.$row['ewsmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                <td>'.$row['course'].'</td>
                
                
                </tr>';
   
                }

            }

          }
           else
           {
            $query= "SELECT * FROM `merit` WHERE `ewsrank`>'$merit' AND `course`='$branch'";
            $result= @mysqli_query($conn,$query);
        
            $num = @mysqli_num_rows($result);

            if($num>0)
              { 
                while($row=mysqli_fetch_assoc($result))
                {
                echo '<tr>
                <th scope="row">'.$row['ewsrank'].'</th>
                <td>'.$row['ewsmm'].'</td>
                <td>'.$row['institute'].'</td>
                <td>'.$row['iccode'].'</td>
                </tr>';
             }
            }
           }
        }        
    }    
  ?>
      </tbody>
    </table>



  </div>
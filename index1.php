<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <title>College Predictor</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    h1,
    h5 {
      font-family: Forte;
    }


    #logo {
      height: 45px;
      width: auto;

    }
  </style>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
<h1 font="Forte" class="text-justify bg-dark my-0 text-light text-lg-center">Merit to College Predictor <br>(For Engineering
    College Of Gujarat)</h1>
  <hr color="white" class="my-0">
  <h5 class="text-justify bg-dark my-0 text-light text-lg-center">This Website May Help You to Find Engineering
    College's In Gujarat With Respect Of Your Merit ( Not Official ) ...</h5>
  <hr color="white" class="my-0">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="darpantank.epizy.com">Contact Us</a>
        </li>


      </ul>

    </div>
  </nav>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Hello Students!</strong> We are Predict From Previous Years Merit, Actual Merit is differ from it.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">With Merit Rank</a></li>
    <li><a href="#tabs-2">Without Merit Rank</a></li>
  </ul>
<div id="tabs-1">
<?php 
  $conn=@mysqli_connect('localhost','root','','merit');
  if(!$conn)
  {
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Sorry !</strong> We Can Not Able To connect You At This Moment...
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
  }
  else{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $merit=$_POST["merit"];
        $category=$_POST["category"];
        $branch=$_POST["branch"];
        $query= "SELECT * FROM `merit` WHERE `openrank`>'$merit' OR `openrank`=0 ";
        $result= @mysqli_query($conn,$query);
        if(!$result)
        {
            echo'<div class="alert alert-Warning alert-dismissible fade show" role="alert">
            <strong>Sorry !</strong> We Can Not Find Any Result...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';

        }
        else
        {
            $num = @mysqli_num_rows($result);
            if($num==0)
            {
               echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
               <strong>Sorry !</strong> We can not Find Any Record.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
               </div>';
            }
            else
            {
                

            }

        }


    }
  }



  ?>
  <div class="container-fluid my-3">
    <form action="/merit/index1.php" method="POST">
      <div class="form-group">
        <label for="meritno">Enter Merit No</label>
        <input type="text" class="form-control" id="merit" name="merit" required>
      </div>

      <div class="form-group">
        <label for="category">Select Category</label><br>
        <select class="category" id="category" name="category" required>
          <option>GENERAL</option>
          <option>EWS</option>
          <option>SEBC</option>
          <option>SC</option>
          <option>ST</option>
        </select>
      </div>
      <div class="form-group">
        <label for="branch">Select Branch</label><br>
        <select class="branch" id="branch" name="branch" required>
          <option selected>All
          <option>Computer
          <option>IT
          <option>Chemical
          <option>Civil
          <option>EC
          <option>Electrical
          <option>Mech
          <option>B.Tech(ICT)
          <option>Info&Comm
          <option>CompSc
          <option>Petrolium
          <option>ELCE
          <option>Computer-2
          <option>Comp(CyberSec)
          <option>IC
          <option>Auto
          <option>Environment
          <option>Met. Mat. Eng.
          <option>Rubber
          <option>CompSc-2
          <option>Bio-Med
          <option>Civil Infra.
          <option>Aero
          <option>PlasticTech
          <option>WaterMan
          <option>Prod
          <option>TextTech
          <option>PowerElect
          <option>FoodTech
          <option>TextEngg
          <option>Civil-2
          <option>Mech-2
          <option>Industrial
          <option>Mining
          <option>TextProcess
          <option>Met
          <option>Elect-2
          <option>Bio-Tech
          <option>Mecha
          <option>Marine
          <option>Comp(AI)
          <option>NavalShip
          <option>PetroChem
          <option>Robotics
          <option>Metal. Eng.
          <option>AgriEngg
          <option>Ch-Biochem
          <option>Manufact
          <option>PlasticEngg
          <option>Dairy Tech.
          <option>CompSc (Big Data)
          <option>Chem.Tech.
          <option>Env.Sc.Tech.
          <option>Elect&Electro
          <option>Civil(Cons-Man)
          <option>Mechatro(IAR)
          <option>Comp(DataSc)
          <option>Mech(CAD)
          <option>Comp(Cloud-IS)
          <option>FireSafety
          <option>CompSc (Cloud)
          <option>Nano
          <option>Elec IC
        </select>
      </div>


      <input type="submit" value="Check Result" class="btn btn-primary btn-lg">
    </form>
  </div>
  <div class="container-fluid my-3">
    <table class="table" id="myTable">
      <thead>

        <tr>
          <th scope="col">Closing Merit No</th>
          <th scope="col">Closing Merit Mark</th>
          <th scope="col">Institute</th>
          <th scope="col">IC Code</th>
          <?php
          if($_SERVER['REQUEST_METHOD']=='POST')
          {
          $branch=$_POST["branch"];
          if($branch=="All")
            
          {

            echo '<th scope="col">Branch</th>';
          }
          }?>


        </tr>
      </thead>
      <tbody>
        <?php
        $result=FALSE;
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $merit=$_POST["merit"];
        $category=$_POST["category"];
        $branch=$_POST["branch"];
        

        
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  <script>
    $(function () {
      $('#myTable').DataTable();
    });
  </script>
 
 </div>
<div id="tabs-2">

  </div>
</div>
<div class="container-fluid my-3">
    <h3>If Any College Not Found In List For Your Respected Input Means Seats Are Vacant In College </h3>
    Here You Can't Find the college Name where seat is vacant...

    <h5 class="text-justify bg-dark my-0 text-light text-lg-center">Website Design BY Darpan Tank</h5>

  </div>
  
 
</body>
</html>
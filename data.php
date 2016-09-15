
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Cars' Website for SV.co</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="AVK DJV SB SEP">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <style type="text/css">
    body{
        background-image: url("img/bindex.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body class="NO_RESULT_DISPLAY">
       <div>
          <h1 align="center"  style="color:white;"><b><i> THE CAR YOU ARE LOOKING FOR IS...</i></b></h1></br></br></br></br></br></br>
          <h2 align="center"  style="color:green;"><b><u>
          <?php
                include 'config.php';
                $make =$_POST['make'];
                $c_type =$_POST['c_type'];
                $f_type="%".$_POST['f_type']."%";
                $mpg=$_POST['mpg'];
                $pz =$_POST['pz'];
                if($mpg=="")
                {
                    $mpg="0";
                }
                if($pz=="")
                {
                    $pz="1000000";
                }
                $query=" SELECT * from cars_details where make like '$make' and c_type like '$c_type' and mileage>=$mpg and price<=$pz and Fuel_type like '$f_type' order by price desc,mileage desc  limit 1 ";
                $result=mysqli_query($conn,$query);
                if($result)
                {  
                    if(mysqli_num_rows($result)>"0")
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            echo   nl2br("\n".$row['make']." ".$row['model']);
                        }
                    }
                    else
                    {
                        header('Location:no_result.html');
                    }
                }
                else 
                {
                    echo "error";
                }    
                ?>
            </u></b></h2>  

         <div>
    <div col-md-60>
      <a href="filter.php">

            </br>
        <label align="center" style="color:black;"><br/>
        <input type="button" align="center" value="SEARCH ANOTHER CAR"  style="height:100px;width:300px; color:white;background-color:black;border:10px solid green;padding:5px"/>
      </a>
    </div>
  </div>    
</body>    
</html>


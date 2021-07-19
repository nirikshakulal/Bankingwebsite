<?php
include 'DBCONFIG/config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from sparksusers where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from sparksusers where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



   if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("SORRY!!!NEGATIVE VALUES CANNOT BE TRANSFERRED")';  
        echo '</script>';
    }


  
    
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("SORRY!!!INSUFFICIENT BALANCE")';  
        echo '</script>';
    }
    


    
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('SORRY!!!PLEASE ENTER VALID VALUE')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE sparksusers set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE sparksusers set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO sparkstransact(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('YOUR TRANSACTION IS SUCCESSFUL');
                                     window.location='usertable.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/transact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 <?php
   include 'navbar.php';
 ?>
	<div class="container">
        <?php
                include 'DBCONFIG/config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  sparksusers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div align="center">
        <h2 class="text-center pt-4" style="font-weight:bold;">USER DETAILS</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="text-center">C.NO</th>
                        <th class="text-center">NAME</th>
                        <th class="text-center">E-MAIL</th>
                        <th class="text-center">PHONE</th>
                        <th class="text-center">BALANCE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['email'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['phone'] ?></td>
                        <td class="text-center py-2">₹<?php echo $rows['balance'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div align="center">
        <h2 class="text-center pt-4" style="font-weight:bold;">TRANSACTION</h2>
        </div>
   
        <label class="ft">Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'DBCONFIG/config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM sparksusers where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['id'] ;?> - 
                    <?php echo $rows['name'] ;?> (Balance:₹
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label class="ft">Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button style="border:none;" name="submit" type="submit" id="myBtn"><span class="btn message" style="color:white;">TRANSFER</span></button>
            </div>
        </form>
    </div>
</body>
</html>

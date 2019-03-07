<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number session variable to a text
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title> eBusiness 2 </title>
</head>
<body background="pink.jpg">
    <div class ="form">
        <form name ="Details" method ="post" action= "eBUS3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
        
                    <tr>
                         <td> Name </td>
                         <td><input type="text" id="txtName" name="txtName" value="" /> </td>
                    </tr>
        
                     <tr>
                         <td> Phone Number </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" /> </td>
                    </tr>
        
                    
        
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
               <td>Password</td>
                            <td><input type="password" id="myInput"  value="" required/><br>
                                <input type="checkbox" onclick="myFunction()">Show Password
                                
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myInput");
                                if (x.type === "password"){
                                    x.type = "text";
                                } else {
                                    x.type = "password"
                                }
                            }
                            </script>
                </table>
         </center>
        
        
            <center>   
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" />
        
            </center>
    </div>
</form>
    </body>
    </html>


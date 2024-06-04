<?php include('config\constants.php'); ?>


<link rel="stylesheet" href="css\authentication.css">
<div class="main-content">
    <div class="wrapper">


        <br><br>

        <?php
        if (isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
        {
            echo $_SESSION['add']; //Display the SEssion Message if SEt
            unset($_SESSION['add']); //Remove Session Message
        }
        ?>

        <div class="registration-container">

        <div class="register">
        <h1 class="text-center">User SignUp</h1>

    <br>
               
                
                    <form action="" method="POST" class="text-center">

                        <br>
                        <input type="text" name="username" placeholder="Your Username" >
                        <br>

                        <input type="text" name="email" placeholder="Your email">
                        <br>

                        <input type="password" name="password" placeholder="Your Password">
                        <br>
                        <br>

                        
                            <input type="submit" name="submit" value="Sign up" class="btn-secondary">

                            <a href="user_login.php">Already i have an account</a>



                </form>

            </div>
        </div>
    </div>

</div>

<?php
//Process the Value from Form and Save it in Database

//Check whether the submit button is clicked or not

if (isset($_POST['submit'])) {
    // Button Clicked
    //echo "Button Clicked";

    //1. Get the Data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //Password Encryption with MD5

    //2. SQL Query to Save the data into database  
    $sql = "INSERT INTO tbl_user SET 
       full_name='$full_name',
       username='$username',
       password='$password'
   ";

    //3. Executing Query and Saving Data into Datbase
    $res = mysqli_query($conn, $sql) or die(mysqli_error());
    // $res=mysqli_query($conn, $sql);

    //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
    if ($res == TRUE) {
        //Data Inserted
        //echo "Data Inserted";
        //Create a Session Variable to Display Message
        $_SESSION['add'] = "<div class='success'>Registation Successful.</div>";
        //Redirect Page to Manage Admin
        header("location:" . SITEURL . 'user_signup.php');
    } else {
        //FAiled to Insert DAta
        //echo "Faile to Insert Data";
        //Create a Session Variable to Display Message
        $_SESSION['add'] = "<div class='error'>Failed Register.</div>";
        //Redirect Page to Add Admin
        header("location:" . SITEURL . 'user_signup.php');
    }
}

?>
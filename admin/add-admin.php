<?php include('partials/menu.php');?>
<div class="main-content">
    <h1>Add Admin</h1>
    <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Full name:</td>
                <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
            </tr>

            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="Your Username"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="text" name="password" placeholder="Your Password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr>
        </table>
    </form>
</div>
<?php include('partials/footer.php');?>
<?php
    //process the value from form and save it in database
    //Check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>
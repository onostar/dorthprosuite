<?php
    session_start();
    if(isset($_SESSION['user'])){
        $username = $_SESSION['user'];
        $user_id = $_SESSION['user_id'];
        $fullname = $_SESSION['full_name'];
    }
?>
<div id="update_password" class="displays">
    <!-- <h3>Update Password</h3>
    <hr> -->
    <!-- change password -->
    <div class="change_password">
        <div class="info" id="info"></div>
        <section method="POST">
            <h3>Update Profile Details</h3>
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id?>">
            <label for="username">Email Addresss</label><br>
            <input type="text" name="username" id="username" required value="<?php echo $username?>"><br>
            <label for="full_name">Full Name</label><br>
            <input type="text" name="full_name" id="full_name" required value="<?php echo $fullname?>"><br>
            <label for="rePwd">Enter Password</label><br>
            <input type="password" name="password" id="password" class="password" required><br>
            <div class="show_password">
                <a href="javascript:void(0)" onclick="togglePassword()"><span class='icon'><i class="fas fa-eye"></i></span> <span class='icon_txt'>Show password</span></a>
            </div>
            <button type="submit" name="change_username" id="change_username" onclick="updateUsername()">Update</button>
</section>
    </div>
</div>

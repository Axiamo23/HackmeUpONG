<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if (!isset($admin)) {
    redirect_to(url_for('/staff/admin/index.php'));
}
?>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputName">First Name</label>
        <input type="text" name="admin[first_name]" value="<?php echo h($admin->first_name); ?>" class="form-control" id="inputName" placeholder="First Name"/>
    </div>
    <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="text" name="admin[last_name]" value="<?php echo h($admin->last_name); ?>" class="form-control" id="inputLastName" placeholder="Last Name"/>
    </div>
    <div class="form-group col-md-6">
        <label for="inputUserName">User Name</label>
        <input type="text" name="admin[username]" value="<?php echo h($admin->username); ?>" class="form-control" id="inputUserName" placeholder="User Name"/>
    </div>
    <div class="form-group col-md-6">
        <label for="inputBirth">Birth Year</label>
        <input type="date" name="admin[birth_year]" value="<?php echo h($admin->birth_year); ?>" class="form-control" id="inputBirth" placeholder="Birht Year"/>
    </div>
    <div class="form-group col-md-6">
        <label for="inputGender">Gender</label>        
        <select name="admin[gender]" id="inputGender" class="form-control">
            <option value="Select an option..."></option>
            <?php foreach (Admin::GENDERS as $gender) { ?>
                <option value="<?php echo $gender; ?>" <?php
                if ($admin->gender == $gender) {
                    echo 'selected';
                }
                ?>><?php echo $gender; ?></option>
                    <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="admin[email]" value="<?php echo h($admin->email); ?>" class="form-control" id="inputEmail4" placeholder="Email" >
    </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="admin[password]" value="" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
        <label for="inputPasswordConfirm">Cofirm Password</label>
        <input type="password" name="admin[confirm_password]" value="" class="form-control" id="inputPasswordConfirm" placeholder="Confirm Password">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="admin[address]" value="<?php echo h($admin->address); ?>" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" name="admin[city]" value="<?php echo h($admin->city); ?>" class="form-control" id="inputCity" placeholder="City">
    </div>
    <div class="form-group col-md-4">
        <label for="inputState">State</label>        
        <select name="admin[state]" id="inputState" class="form-control">
            <option value="Select an option..."></option>
            <?php foreach (Admin::STATES as $state) { ?>
                <option value="<?php echo $state; ?>" <?php
                if ($admin->state == $state) {
                    echo 'selected';
                }
                ?>><?php echo $state; ?></option>
                    <?php } ?>
        </select>
    </div>
    <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" name="admin[zip]" value="<?php echo h($admin->zip); ?>" class="form-control" id="inputZip">
    </div>

    <hr/>
    <div class="form-group col-md-6">
        <label for="inputUserType">User Type (1-admin , 2-client)</label>
        <input type="number" name="admin[user_type]" value="<?php echo h($admin->user_type); ?>" class="form-control" id="inputUserType">
    </div>
</div>
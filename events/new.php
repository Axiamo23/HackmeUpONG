<?php
require_once('../../../private/initialize.php');
//require_login();

if (is_post_request()) {

    // Create record using post parameters
    $args = $_POST['admin'];
    $admin = new Admin($args);
    $result = $admin->save();

    if ($result === true) {
        $new_id = $admin->id;
        $session->message('The admin was created successfully.');
        redirect_to(url_for('/staff/admin/show.php?id=' . $new_id));
    } else {
        // show errors
    }
} else {
    // display the form
    $admin = new Admin;
}
?>

<?php $page_title = 'Create User'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

    <a class="btn btn-dark" href="<?php echo url_for('/staff/admin/index.php'); ?>">&laquo; Back to List</a>

    <div class="user new">
        <h1>Create User</h1>

        <?php echo display_errors($admin->errors); ?>

        <form action="<?php echo url_for('/staff/admin/new.php'); ?>" method="post">

            <?php include('form_fields.php'); ?>

            <div id="operations">
                <button type="submit" class="btn btn-success">Confirm</button>
            </div>
        </form>

    </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

<?php
require_once('../../../private/initialize.php');
//require_login();

if (!isset($_GET['id'])) {
    redirect_to(url_for('/staff/admin/index.php'));
}
$id = $_GET['id'];
$admin = Admin::find_by_id($id);
if ($admin == false) {
    redirect_to(url_for('/staff/admin/index.php'));
}

if (is_post_request()) {

    // Delete admin
    $result = $admin->delete();
    $session->message('The user was deleted successfully.');
    redirect_to(url_for('/staff/admin/index.php'));
} else {
    // Display form
}
?>

<?php $page_title = 'Delete User'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

    <a class="btn btn-dark" href="<?php echo url_for('/staff/admin/index.php'); ?>">&laquo; Back to List</a>

    <div class="user delete">
        <h1>Delete User</h1>
        <p>Are you sure you want to delete this user?</p>
        <p class="item"><?php echo h($admin->full_name()); ?></p>

        <form action="<?php echo url_for('/staff/admin/delete.php?id=' . h(u($id))); ?>" method="post">
            <div id="operations">
                <input type="submit" class="btn btn-danger" name="commit" value="Delete Admin" />
            </div>
        </form>
    </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

<?php
require_once('../../../private/initialize.php');
//require_login();

if (is_post_request()) {

    // Create record using post parameters
    $args = $_POST['events'];
    $event = new Events($args);
    $result = $event->save();

    if ($result === true) {
        $new_id = $event->id;
        $session->message('The events was created successfully.');
        redirect_to(url_for('/staff/events/show.php?id=' . $new_id));
    } else {
        // show errors
    }
} else {
    // display the form
    $event = new Events;
}
?>

<?php $page_title = 'Create Event'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

    <a class="btn btn-dark" href="<?php echo url_for('/staff/events/index.php'); ?>">&laquo; Back to List</a>

    <div class="user new">
        <h1>Create Event</h1>

        <?php echo display_errors($event->errors); ?>

        <form action="<?php echo url_for('/staff/events/new.php'); ?>" method="post">

            <?php include('form_fields.php'); ?>

            <div id="operations">
                <button type="submit" class="btn btn-success">Confirm</button>
            </div>
        </form>

    </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

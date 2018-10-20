<?php require_once('../../../private/initialize.php'); ?>
<?php //require_login(); ?>

<?php
// Find all admins
$events = Events::find_all();
?>
<?php $page_title = 'Events'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    <div class="events listing">
        <h1>Users</h1>
        <div class="table-responsive-md">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <td>
                            <div class="actions">
                                <a class="action" href="<?php echo url_for('/staff/events/new.php'); ?>">Add Admin</a>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <td>ID</td>
                        <td>Name</td>
                        <td>Date</td>
                        <td>Start Hour</td>
                        <td>End Hour</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <?php foreach ($events as $event) { ?>
                        <tr>
                            <td><?php echo h($event->id); ?></td>
                            <td><?php echo h($event->name); ?></td>
                            <td><?php echo h($event->date); ?></td>
                            <td><?php echo h($event->start_hour); ?></td>
                            <td><?php echo h($event->end_hour); ?></td>
                            <td><a class="action" href="<?php echo url_for('/staff/events/show.php?id=' . h(u($event->id))); ?>">View</a></td>
                            <td><a class="action" href="<?php echo url_for('/staff/events/edit.php?id=' . h(u($event->id))); ?>">Edit</a></td>
                            <td><a class="action" href="<?php echo url_for('/staff/events/delete.php?id=' . h(u($event->id))); ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

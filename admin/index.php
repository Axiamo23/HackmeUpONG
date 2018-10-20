<?php require_once('../../../private/initialize.php'); ?>
<?php //require_login(); ?>

<?php
// Find all admins
$admins = Admin::find_all();
?>
<?php $page_title = 'Users'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">
    <div class="admins listing">
        <h1>Users</h1>
        <div class="table-responsive-md">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <td>
                            <div class="actions">
                                <a class="action" href="<?php echo url_for('/staff/admin/new.php'); ?>">Add Admin</a>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <td>ID</td>
                        <td>First name</td>
                        <td>Last name</td>
                        <td>Email</td>
                        <td>Username</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <?php foreach ($admins as $admin) { ?>
                        <tr>
                            <td><?php echo h($admin->id); ?></td>
                            <td><?php echo h($admin->first_name); ?></td>
                            <td><?php echo h($admin->last_name); ?></td>
                            <td><?php echo h($admin->email); ?></td>
                            <td><?php echo h($admin->username); ?></td>
                            <td><a class="action" href="<?php echo url_for('/staff/admin/show.php?id=' . h(u($admin->id))); ?>">View</a></td>
                            <td><a class="action" href="<?php echo url_for('/staff/admin/edit.php?id=' . h(u($admin->id))); ?>">Edit</a></td>
                            <td><a class="action" href="<?php echo url_for('/staff/admin/delete.php?id=' . h(u($admin->id))); ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>

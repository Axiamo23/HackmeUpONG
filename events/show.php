<?php require_once('../../../private/initialize.php'); ?>
<?php //require_login(); ?>

<?php
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$admin = Admin::find_by_id($id);
?>

<?php $page_title = 'Show Admin: ' . h($admin->full_name()); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="content">

    <a class="btn btn-dark" href="<?php echo url_for('/staff/admin/index.php'); ?>">&laquo; Back to List</a>
    <br/>
    <br/>

    <div class="table-responsive-md">
        <table class="table table-striped table-dark">
            <thead>
                <tr class="table-primary">
                    <td colspan="5">
                        <div class="actions">
                            <h5>Item: <?php echo h($admin->full_name()); ?></h5>
                        </div>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>First Name: <?php echo h($admin->first_name); ?></td>
                </tr>
                <tr>
                    <td>Last Name: <?php echo h($admin->last_name); ?></td>
                </tr>
                <tr>
                    <td>Gender: 
                        <?php
                        echo h($admin->gender);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Birth Year: <?php echo h($admin->birth_year); ?></td>
                </tr>
                <tr>
                    <td>Username: <?php echo h($admin->username); ?></td>
                </tr>
                <tr>
                    <td>Address: <?php echo h($admin->address); ?></td>
                </tr>
                <tr>
                    <td>City: <?php echo h($admin->city); ?></td>
                </tr>
                <tr>
                    <td>State: <?php echo h($admin->state); ?></td>
                </tr>
                <tr>
                    <td>Zip: <?php echo h($admin->zip); ?></td>
                </tr>
                <tr>
                    <td>Email: <?php echo h($admin->email); ?></td>
                </tr>
                <tr>
                    <td>User Type: 
                        <?php
                        if ($admin->user_type == 1) {
                            echo h('Admin');
                        } else if ($admin->user_type == 2) {
                            echo h('Client');
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> 
</div>

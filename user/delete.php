<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';

if (isset($_GET['id'])) {
    
    $stmt = $pdo->prepare('SELECT * FROM polls WHERE id = ?');
    $stmt->execute([ $_GET['id'] ]);
    $poll = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$poll) {
        exit('Poll doesn\'t exist with that ID!');
    }
    
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM polls WHERE id = ?');
            $stmt->execute([ $_GET['id'] ]);
            // We also need to delete the answers for that poll
            $stmt = $pdo->prepare('DELETE FROM poll_answers WHERE poll_id = ?');
            $stmt->execute([ $_GET['id'] ]);
            // Output msg
            $msg = 'You have deleted the poll!';
        } else {
            // User clicked the "No" button, redirect them back to the home/index page
            header('Location: imo.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Delete')?>

<div class="content delete">
	<h2>Delete Poll #<?=$poll['id']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete poll #<?=$poll['id']?>?</p>
    <div class="yesno">
        <a href="delete.php?id=<?=$poll['id']?>&confirm=yes">Yes</a>
        <a href="delete.php?id=<?=$poll['id']?>&confirm=no">No</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>
<?php
// Include the function file
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that retrieves all the polls and poll answers
$stmt = $pdo->query('SELECT p.*, GROUP_CONCAT(pa.title ORDER BY pa.id) AS answers FROM polls p LEFT JOIN poll_answers pa ON pa.poll_id = p.id GROUP BY p.id');
$polls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Polls')?>

<div class="content home">
	<h2>Polls</h2>
	<p>Welcome to the home page! You can view the list of polls below.</p>
	<a href="create.php" class="create-poll">Create Poll</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
				<td>Answers</td>
                <td>Starting Date</td>
                <td>Ending Date</td>
                <td>Status</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($polls as $poll): ?>
            <tr>
                <td><?=$poll['id']?></td>
                <td><?=$poll['title']?></td>
				<td><?=$poll['answers']?></td>
                <td><?=$poll['starting_date']?></td>
                <td><?=$poll['ending_date']?></td>
                <td><?=$poll['status']?></td>
                <td class="actions">
					<a href="vote.php?id=<?=$poll['id']?>" class="view" title="View Poll"><i class="fas fa-eye fa-xs"></i></a>
                    <a href="delete.php?id=<?=$poll['id']?>" class="trash" title="Delete Poll"><i class="fas fa-trash fa-xs"></i></a>
                    
                    <a href="update.php?id=<?=$poll['id']?>" title="Update Poll"><button>Update</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table><br><br>
</div>

<?=template_footer()?>
<center>
<a href="home page.html"><button type="submit">Logout</button></a>
<center>
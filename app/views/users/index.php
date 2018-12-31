<?php require_once '../app/views/partials/_header.php'; ?>

<main role="main">
	<div class="container">
		<div class="row"><br>
			<h1>Liste des utilisateurs</h1><br>
			<table class="table table-striped table-bordred">
				<tr>
					<th>#</th>
					<th>UserName</th>
					<th>Email</th>
					<th>Password</th>
					<th>Created at</th>
				</tr>
				<?php foreach ($data['users'] as $user): ?>
					<tr>
						<td><?= $user->id ?></td>
						<td><?= $user->username ?></td>
						<td><?= $user->email ?></td>
						<td><?= $user->password ?></td>
						<td><?= $user->created_at ?></td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
				
	</div>
</main>

<?php require_once '../app/views/partials/_footer.php'; ?>
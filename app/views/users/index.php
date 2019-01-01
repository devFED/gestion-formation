<?php require_once '../app/views/partials/_header.php'; ?>

<main role="main" style="margin-top: 30px">
	<div class="container">
		<h1>Liste des utilisateurs</h1><hr>
		<table class="table table-striped table-bordered">
			<tr>
				<th>#</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Password</th>
				<th>Created at</th>
				<th>Actions</th>
			</tr>
			<?php foreach ($data['users'] as $user): ?>
				<tr>
					<td><?= $user->id ?></td>
					<td><?= $user->username ?></td>
					<td><?= $user->email ?></td>
					<td><?= $user->password ?></td>
					<td><?= $user->created_at ?></td>
					<td>
						<a href="<?= route('user/edit/' . $user->id) ?>" class="btn btn-sm btn-success">Edit</a>
						<form class="form-action"action="<?= route('user/delete/' . $user->id) ?>">
							<button class="btn btn-sm btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			<?php endforeach ?>
		</table>	
	</div>
</main>

<?php require_once '../app/views/partials/_footer.php'; ?>
<?php
require_once 'head.php';

// redirect if not logged in
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  die;
}

// get users
$sql = 'SELECT id, email, ime, prezime, is_active FROM users';

$isSearch = isset($_GET['q']);
if($isSearch){
$sql .= ' WHERE email LIKE :email';}
		
$stmt = $db->prepare($sql);

if($isSearch){
		$search = "%{$_GET['q']}%";
		$stmt->bindParam(':email',$search);
}
$stmt->execute();
$users = $stmt->fetchAll();

$currentUserId = $_SESSION['user']['id'];
?>

<div class="container content-wrapper">
<form method="GET" action="admin.php">
    <div class="input-group">
      <input type="text" class="form-control" name ="q" placeholder="Pretraži....">
      <span class="input-group-btn">
        <button class="btn btn-info" type="button">Traži!</button>
      </span>
    </div>
</form>
  <table class="table table-condensed">
    <thead>
    <tr>
      <th>Adresa E-pošte</th>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Akcije</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($users as $user): ?>
    <tr class="<?= $user['is_active'] === '1' ? '' : 'blocked' ?>">
      <td><?= $user['email'] ?></td>
      <td><?= $user['ime'] ?></td>
      <td><?= $user['prezime'] ?></td>
      <td>
        <a href="edit.php?id=<?= $user['id'] ?>"><span class="oi oi-pencil"></span></a>&emsp;
		<?php if($currentUserId !== $user['id']):?>
			        <a href="delete.php?id=<?= $user['id'] ?>"><span class="oi oi-delete"></span></a>&emsp;
			<?php if($user['is_active'] === '1'): ?>
				<a href="change_activation.php?id=<?= $user['id'] ?>"><span class="oi oi-ban"></span></a>
			<?php else: ?>
				<a href="change_activation.php?id=<?= $user['id'] ?>"><span class="oi oi-check"></span></a>
			<?php endif; ?>
		<?php endif; ?>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
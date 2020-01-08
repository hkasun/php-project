<?php
require_once 'head.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['email'])) {
        die('email not set');
    }

    $id = $_POST['id'];
    $email = $_POST['email'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];

    $sql = 'UPDATE users SET email = :email,
    ime = :ime, prezime = :prezime
    WHERE id = :id';

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':ime', $firstName);
    $stmt->bindParam(':prezime', $lastName);
    $stmt->execute();

    header('Location: index.php');
    die;
}    


// redirect if not logged in
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  die;
}

if(!isset($_GET['id'])) {
  die('no user id');
}

$id = $_GET['id'];

// get user
$sql = 'SELECT id, email, ime, prezime FROM users WHERE id = :id';
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$user = $stmt->fetch();
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 login-wrapper">
      <h2 class="text-center">Izmjena podataka</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-body">
              <form class="form" role="form" method="POST" action="edit.php" autocomplete="off">
                <div class="form-group">
                <input type="hidden" value="<?= $user['id'] ?>" name="id" />
                  <label for="email">Adresa E-pošte</label>
                  <input type="email" class="form-control form-control-lg rounded-0" name="email"
                         id="email" required="" value="<?= $user['email'] ?>">
                </div>
                <div class="form-group">
                  <label for="first-name">Ime</label>
                  <input type="text" name="first-name" value="<?= $user['ime'] ?>"
                         class="form-control form-control-lg rounded-0" id="first-name">
                </div>
                <div class="form-group">
                  <label for="last-name">Prezime</label>
                  <input type="text" name="last-name" value="<?= $user['prezime'] ?>"
                         class="form-control form-control-lg rounded-0" id="last-name">
                </div>
                <button type="submit" class="btn btn-info float-right">Spremi</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
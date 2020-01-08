<?php
require_once 'head.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!isset($_POST['email']) || !isset($_POST['password'])) {
        die('email or password not set');
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $isActive = $_POST['is-active'];

    if($password !== $passwordRepeat) {
        die('password and password repeat are not the same');
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = 'INSERT INTO users (email, password, ime, prezime, is_active) VALUES
            (:email, :password, :ime, :prezime, :is_active)';

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':ime', $firstName);
    $stmt->bindParam(':prezime', $lastName);
    $stmt->bindParam(':is_active', $isActive);
    $stmt->execute();

    header('Location: index.php');
    die;
}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12 login-wrapper">
      <h2 class="text-center">Registracija</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-body">
              <form class="form" role="form" method="POST" action="register.php" autocomplete="off">
                <div class="form-group">
                <input type="hidden" name="id" />
                  <label for="email">E-pošta</label>
                  <input type="email" class="form-control form-control-lg rounded-0" name="email"
                         id="email" required="">
                </div>
                <div class="form-group">
                  <label for="password">Lozinka</label>
                  <input type="password" name="password"
                         class="form-control form-control-lg rounded-0" id="password" required="">
                </div>
                <div class="form-group">
                  <label for="password-repeat">Ponovljena lozinka</label>
                  <input type="password" name="password-repeat"
                         class="form-control form-control-lg rounded-0" id="password-repeat" required="">
                </div>
                <div class="form-group">
                  <label for="first-name">Ime</label>
                  <input type="text" name="first-name"
                         class="form-control form-control-lg rounded-0" id="first-name">
                </div>
                <div class="form-group">
                  <label for="last-name">Prezime</label>
                  <input type="text" name="last-name"
                         class="form-control form-control-lg rounded-0" id="last-name">
                </div>
                <div class="form-check">
                  <div>Aktivan?</div>
                  <label class="form-check-label" for="is-active">
                    <input class="form-check-input" type="radio" name="is-active" id="is-active" value="0" checked>
                    Ne
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label" for="is-active">
                    <input class="form-check-input" type="radio" name="is-active" id="is-active" value="1">
                    Da
                  </label>
                </div>
                <button type="submit" class="btn btn-info float-right">Potvrdi</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
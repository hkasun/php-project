<?php
require_once 'head.php';
?>
<section id="contact" class="content-section text-center">
<div class="contact-section">
    <div class="container">
      <h2>Kontakt</h2>
      <p>Ispuni kontakt formu ili nas posjeti na društvenim mrežama!</p>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="exampleInputName2">Ime</label>
              <input type="text" class="form-control" id="exampleInputName2" placeholder="Ime">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail2">E-pošta</label>
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-pošta">
            </div>
            <div class="form-group ">
              <label for="exampleInputText">Tvoja poruka</label>
             <textarea  class="form-control" placeholder="Opis"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Pošalji!</button>
          </form>

          <hr>
            <h3>Društvene mreže</h3>
          <ul class="list-inline banner-social-buttons">
            <li><a href="https://twitter.com/jk_rowling" class="btn btn-info btn-lg" target="_blank"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
            <li><a href="https://www.facebook.com/JKRowling/" class="btn btn-primary btn-lg" target="_blank"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
            <li><a href="https://www.youtube.com/watch?v=wHGqp8lz36c" class="btn btn-danger btn-lg" target="_blank"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</div>
</section>

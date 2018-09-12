<?php require './script.php'; ?>
<?php require './header.php'; ?>


    <div class="container center">
      <h4>Form</h4>
    </div>


    <div class="container">

      <!-- Check required boxes -->
      <?php if($msg != ''): ?>
        <div class="card-panel center white-text <?php echo $msg_class; ?>">
          <?php echo $msg; ?>
        </div>
      <?php endif; ?>

      <div class="row">
        <form class="col s12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="row center">
            <div class="input-field col s12">
              <i class="material-icons prefix">face</i>
              <input id="name" type="text" name="name" value="<?php echo isset($_POST['name']) ? $data['name'] : ''; // prevent removing value from the form after failed sending ?>" required oninvalid="this.setCustomValidity('Input your name')" oninput="setCustomValidity('')">
              <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">email</i>
              <input id="email" type="text" name="email" value="<?php echo isset($_POST['email']) ? $data['email'] : ''; // prevent removing value from the form after failed sending ?>" required oninvalid="this.setCustomValidity('Input your e-mail')" oninput="setCustomValidity('')">
              <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">message</i>
              <textarea id="message" name="message" class="materialize-textarea" required oninvalid="this.setCustomValidity('Input your message')" oninput="setCustomValidity('')"><?php echo isset($_POST['message']) ? $data['message'] : ''; // prevent removing value from the form after failed sending ?></textarea>
              <label for="message">Message</label>
            </div>
            <button class="btn waves-effect waves-light pulse" type="submit" name="submit">Submit
            <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

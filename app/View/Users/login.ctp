<h2>Log In</h2>
<p>You will need to login to edit any of the contents.</p>
    <?php echo $color; ?><br>
    <?php echo $car; ?>
<?php
    echo $this->Form->create('User');
    echo $this->Form->input('username');
    echo $this->Form->input('password');
    echo $this->Form->end(__('Login'));
?>
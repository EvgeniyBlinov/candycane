<div id="login-form">
<?php echo $this->Form->create('User', array('url' => '/account/login')); ?>
<!--  <%= back_url_hidden_field_tag %> -->
<?php echo $this->Form->hidden('back_url',array('name' => 'back_url','value' => $back_url)); ?>

    <p>
        <?php echo $this->Form->input('username', array('size' => '20','id' => 'username','label' => array('text' => __('Login').':'))); ?>
    </p>

    <p>
        <?php echo $this->Form->input('password', array('type' => 'password', 'size' => '20','label' => array('text' => __('Password').':'))); ?>
    </p>

<?php if ($setting->autologin): ?>
    <?php echo $this->Form->input('autologin', array('type' => 'checkbox', 'options' => array(1))); ?>
<?php endif; ?>

<?php echo $this->element('accounts/middlebox', array()); ?>

    <?php if ($setting->lost_password): ?>
      <?php echo $this->Html->link(__('Lost password'), '/account/lost_password'); ?>
    <?php endif; ?>
    <?php echo $this->Form->submit(__('Sign in') . ' &#187', array('name' => 'login','escape' => false, 'class' => 'btn btn-lg btn-primary btn-block')); ?>

<?php echo $this->Html->scriptBlock("Form.Element.focus('username');") ?>

<?php echo $this->Form->end(); ?>

</div>


    <?php echo $this->Form->create('User' ,array( 'type' => 'post','class' => 'form-horizontal', 'id' => 'myformUser')); ?>

        <div class="control-group">
            <label class="control-label">Email</label>
            <div class="controls">
                <?php echo $this->Form->input('Email',array('placeholder' => 'Email', 'label' => false)); ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Password</label>
            <div class="controls">
                <?php echo $this->Form->Password('Password',array('placeholder' => 'Password', 'label' => false)); ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">Name</label>
            <div class="controls">
                <?php echo $this->Form->input('Name',array('placeholder' => 'Name', 'label' => false)); ?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label">address</label>
            <div class="controls">
                <?php echo $this->Form->input('address',array('placeholder' => 'address', 'label' => false)); ?>
            </div>
        </div>

    <div class="control-group">
        <label class="control-label">Phone Number</label>
        <div class="controls">
            <?php echo $this->Form->input('phone_no', array('placeholder' => 'Phone Number', 'label' => false));?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Gender</label>
        <div class="controls">
            <input type="radio" name="data[]" value="simple" checked="checked">Male
            <input type="radio" name="data[]"  value="complex">Female
        </div>
    </div>

    <div class="control-group">
        <div class="controls clearfix">
            <?php echo $this->Form->end('Submit', array('id' => 'signup', 'class' => 'btn btn-primary', 'div'=> false)); ?>
        </div>
    </div>


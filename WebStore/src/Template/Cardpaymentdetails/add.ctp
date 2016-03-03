<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cardpaymentdetails'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cardpaymentdetails form large-9 medium-8 columns content">
    <?= $this->Form->create($cardpaymentdetail) ?>
    <fieldset>
        <legend><?= __('Add Cardpaymentdetail') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('number');
            echo $this->Form->input('expiry_date');
            echo $this->Form->input('security_code');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

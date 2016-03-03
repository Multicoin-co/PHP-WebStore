<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paypal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paypal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Paypal'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paypal form large-9 medium-8 columns content">
    <?= $this->Form->create($paypal) ?>
    <fieldset>
        <legend><?= __('Edit Paypal') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

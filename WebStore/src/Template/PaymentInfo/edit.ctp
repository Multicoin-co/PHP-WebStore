<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paymentInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paymentInfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Payment Info'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($paymentInfo) ?>
    <fieldset>
        <legend><?= __('Edit Payment Info') ?></legend>
        <?php
            echo $this->Form->input('order_id', ['options' => $order]);
            echo $this->Form->input('type');
            echo $this->Form->input('payment_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment Info'), ['action' => 'edit', $paymentInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment Info'), ['action' => 'delete', $paymentInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payment Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment Info'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paymentInfo view large-9 medium-8 columns content">
    <h3><?= h($paymentInfo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $paymentInfo->has('order') ? $this->Html->link($paymentInfo->order->id, ['controller' => 'Order', 'action' => 'view', $paymentInfo->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($paymentInfo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($paymentInfo->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Payment Id') ?></th>
            <td><?= $this->Number->format($paymentInfo->payment_id) ?></td>
        </tr>
    </table>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payment Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paymentInfo index large-9 medium-8 columns content">
    <h3><?= __('Payment Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('order_id') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('payment_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paymentInfo as $paymentInfo): ?>
            <tr>
                <td><?= $this->Number->format($paymentInfo->id) ?></td>
                <td><?= $paymentInfo->has('order') ? $this->Html->link($paymentInfo->order->id, ['controller' => 'Order', 'action' => 'view', $paymentInfo->order->id]) : '' ?></td>
                <td><?= $this->Number->format($paymentInfo->type) ?></td>
                <td><?= $this->Number->format($paymentInfo->payment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paymentInfo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paymentInfo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paymentInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentInfo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

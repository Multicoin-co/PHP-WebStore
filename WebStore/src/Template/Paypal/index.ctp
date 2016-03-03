<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paypal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paypal index large-9 medium-8 columns content">
    <h3><?= __('Paypal') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paypal as $paypal): ?>
            <tr>
                <td><?= $this->Number->format($paypal->id) ?></td>
                <td><?= h($paypal->email) ?></td>
                <td><?= $this->Number->format($paypal->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paypal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paypal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paypal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paypal->id)]) ?>
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

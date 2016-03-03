<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product Subtype'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productSubtype index large-9 medium-8 columns content">
    <h3><?= __('Product Subtype') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('fkProductTypeID') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productSubtype as $productSubtype): ?>
            <tr>
                <td><?= $this->Number->format($productSubtype->id) ?></td>
                <td><?= $this->Number->format($productSubtype->fkProductTypeID) ?></td>
                <td><?= h($productSubtype->name) ?></td>
                <td><?= h($productSubtype->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productSubtype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productSubtype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productSubtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productSubtype->id)]) ?>
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

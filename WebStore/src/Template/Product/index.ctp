<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Back to Admin'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="product index large-9 medium-8 columns content">
    <h3><?= __('Product') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Product ID') ?></th>
		<th><?= $this->Paginator->sort('Product Type') ?></th>
                <th><?= $this->Paginator->sort('Product SubType') ?></th>
                <th><?= $this->Paginator->sort('Product Name') ?></th>
                <th><?= $this->Paginator->sort('Product Description') ?></th>
                <th><?= $this->Paginator->sort('Product Manufacturer') ?></th>
                <th><?= $this->Paginator->sort('Product Price') ?></th>
                <th><?= $this->Paginator->sort('Product Stock Count') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
		<td><?= h($product->product_subtype->product_type->name) ?></td>
                <td><?= h($product->product_subtype->name) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->description) ?></td>
                <td><?= h($product->Manufacturer) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $this->Number->format($product->stock) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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

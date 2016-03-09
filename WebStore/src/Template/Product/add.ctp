<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Product'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Back to Admin'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="product form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->input('fkProductSubTypeID', ['type' => 'select', 'options' => $product_subtypes, 'label' => ['text' => 'Product SubType']]);
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('Manufacturer');
            echo $this->Form->input('price');
            echo $this->Form->input('stock');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

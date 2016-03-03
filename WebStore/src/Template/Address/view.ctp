<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="address view large-9 medium-8 columns content">
    <h3><?= h($addres->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Door Number') ?></th>
            <td><?= h($addres->door_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Postcode') ?></th>
            <td><?= h($addres->postcode) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($addres->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Street Line One') ?></th>
            <td><?= h($addres->street_line_one) ?></td>
        </tr>
        <tr>
            <th><?= __('Street Line Two') ?></th>
            <td><?= h($addres->street_line_two) ?></td>
        </tr>
        <tr>
            <th><?= __('Tel Number') ?></th>
            <td><?= h($addres->tel_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile Number') ?></th>
            <td><?= h($addres->mobile_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($addres->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= $addres->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>

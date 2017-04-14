<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plan Features'), ['controller' => 'PlanFeatures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan Feature'), ['controller' => 'PlanFeatures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="features form large-9 medium-8 columns content">
    <?= $this->Form->create($feature) ?>
    <fieldset>
        <legend><?= __('Add Feature') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('is_active');
            echo $this->Form->input('weight');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

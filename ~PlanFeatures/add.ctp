<div class="planFeatures form large-9 medium-8 columns content">
    <?= $this->Form->create($planFeature) ?>
    <fieldset>
        <legend><?= __('Add Plan Feature') ?></legend>
        <?php
            echo $this->Form->input('plan_id', ['options' => $plans]);
            echo $this->Form->input('feature_id', ['options' => $features]);
            echo $this->Form->input('value');
            echo $this->Form->input('is_active');
            echo $this->Form->input('show_on_page');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

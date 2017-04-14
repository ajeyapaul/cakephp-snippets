<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plan'), ['action' => 'edit', $plan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plan'), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plan Features'), ['controller' => 'PlanFeatures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan Feature'), ['controller' => 'PlanFeatures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Plans'), ['controller' => 'UserPlans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Plan'), ['controller' => 'UserPlans', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plans view large-9 medium-8 columns content">
    <h3><?= h($plan->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($plan->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($plan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($plan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($plan->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Plan Features') ?></h4>
        <?php if (!empty($plan->plan_features)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Feature Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Show On Page') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plan->plan_features as $planFeatures): ?>
            <tr>
                <td><?= h($planFeatures->id) ?></td>
                <td><?= h($planFeatures->plan_id) ?></td>
                <td><?= h($planFeatures->feature_id) ?></td>
                <td><?= h($planFeatures->value) ?></td>
                <td><?= h($planFeatures->is_active) ?></td>
                <td><?= h($planFeatures->show_on_page) ?></td>
                <td><?= h($planFeatures->created) ?></td>
                <td><?= h($planFeatures->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PlanFeatures', 'action' => 'view', $planFeatures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PlanFeatures', 'action' => 'edit', $planFeatures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlanFeatures', 'action' => 'delete', $planFeatures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planFeatures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Plans') ?></h4>
        <?php if (!empty($plan->user_plans)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Adminid') ?></th>
                <th scope="col"><?= __('Max Subscribers Allowed') ?></th>
                <th scope="col"><?= __('Max Emails Allowed') ?></th>
                <th scope="col"><?= __('Max Smtp Servers Allowed') ?></th>
                <th scope="col"><?= __('Max Sending Domains Allowed') ?></th>
                <th scope="col"><?= __('Total Subscribers Count') ?></th>
                <th scope="col"><?= __('Total Emails Count') ?></th>
                <th scope="col"><?= __('Total Servers Count') ?></th>
                <th scope="col"><?= __('Total Domains Count') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($plan->user_plans as $userPlans): ?>
            <tr>
                <td><?= h($userPlans->id) ?></td>
                <td><?= h($userPlans->user_id) ?></td>
                <td><?= h($userPlans->plan_id) ?></td>
                <td><?= h($userPlans->adminid) ?></td>
                <td><?= h($userPlans->max_subscribers_allowed) ?></td>
                <td><?= h($userPlans->max_emails_allowed) ?></td>
                <td><?= h($userPlans->max_smtp_servers_allowed) ?></td>
                <td><?= h($userPlans->max_sending_domains_allowed) ?></td>
                <td><?= h($userPlans->total_subscribers_count) ?></td>
                <td><?= h($userPlans->total_emails_count) ?></td>
                <td><?= h($userPlans->total_servers_count) ?></td>
                <td><?= h($userPlans->total_domains_count) ?></td>
                <td><?= h($userPlans->remarks) ?></td>
                <td><?= h($userPlans->created) ?></td>
                <td><?= h($userPlans->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserPlans', 'action' => 'view', $userPlans->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserPlans', 'action' => 'edit', $userPlans->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserPlans', 'action' => 'delete', $userPlans->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPlans->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

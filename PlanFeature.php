<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlanFeature Entity
 *
 * @property int $id
 * @property int $plan_id
 * @property int $feature_id
 * @property string $value
 * @property bool $is_active
 * @property bool $show_on_page
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Plan $plan
 * @property \App\Model\Entity\Feature $feature
 */
class PlanFeature extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}

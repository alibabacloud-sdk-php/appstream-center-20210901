<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\nodePool\recurrenceSchedules;
use AlibabaCloud\Tea\Model;

class nodePool extends Model
{
    /**
     * @var int
     */
    public $maxIdleAppInstanceAmount;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxScalingAmount;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeCapacity;

    /**
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @var recurrenceSchedules[]
     */
    public $recurrenceSchedules;

    /**
     * @example 5
     *
     * @var int
     */
    public $scalingDownAfterIdleMinutes;

    /**
     * @example 2
     *
     * @var int
     */
    public $scalingStep;

    /**
     * @example 85
     *
     * @var string
     */
    public $scalingUsageThreshold;

    /**
     * @example 2022-09-08
     *
     * @var string
     */
    public $strategyDisableDate;

    /**
     * @example 2022-08-01
     *
     * @var string
     */
    public $strategyEnableDate;

    /**
     * @example NODE_FIXED
     *
     * @var string
     */
    public $strategyType;

    /**
     * @example false
     *
     * @var bool
     */
    public $warmUp;
    protected $_name = [
        'maxIdleAppInstanceAmount' => 'MaxIdleAppInstanceAmount',
        'maxScalingAmount' => 'MaxScalingAmount',
        'nodeAmount' => 'NodeAmount',
        'nodeCapacity' => 'NodeCapacity',
        'nodeInstanceType' => 'NodeInstanceType',
        'recurrenceSchedules' => 'RecurrenceSchedules',
        'scalingDownAfterIdleMinutes' => 'ScalingDownAfterIdleMinutes',
        'scalingStep' => 'ScalingStep',
        'scalingUsageThreshold' => 'ScalingUsageThreshold',
        'strategyDisableDate' => 'StrategyDisableDate',
        'strategyEnableDate' => 'StrategyEnableDate',
        'strategyType' => 'StrategyType',
        'warmUp' => 'WarmUp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxIdleAppInstanceAmount) {
            $res['MaxIdleAppInstanceAmount'] = $this->maxIdleAppInstanceAmount;
        }
        if (null !== $this->maxScalingAmount) {
            $res['MaxScalingAmount'] = $this->maxScalingAmount;
        }
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeCapacity) {
            $res['NodeCapacity'] = $this->nodeCapacity;
        }
        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }
        if (null !== $this->recurrenceSchedules) {
            $res['RecurrenceSchedules'] = [];
            if (null !== $this->recurrenceSchedules && \is_array($this->recurrenceSchedules)) {
                $n = 0;
                foreach ($this->recurrenceSchedules as $item) {
                    $res['RecurrenceSchedules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scalingDownAfterIdleMinutes) {
            $res['ScalingDownAfterIdleMinutes'] = $this->scalingDownAfterIdleMinutes;
        }
        if (null !== $this->scalingStep) {
            $res['ScalingStep'] = $this->scalingStep;
        }
        if (null !== $this->scalingUsageThreshold) {
            $res['ScalingUsageThreshold'] = $this->scalingUsageThreshold;
        }
        if (null !== $this->strategyDisableDate) {
            $res['StrategyDisableDate'] = $this->strategyDisableDate;
        }
        if (null !== $this->strategyEnableDate) {
            $res['StrategyEnableDate'] = $this->strategyEnableDate;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->warmUp) {
            $res['WarmUp'] = $this->warmUp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodePool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxIdleAppInstanceAmount'])) {
            $model->maxIdleAppInstanceAmount = $map['MaxIdleAppInstanceAmount'];
        }
        if (isset($map['MaxScalingAmount'])) {
            $model->maxScalingAmount = $map['MaxScalingAmount'];
        }
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }
        if (isset($map['NodeCapacity'])) {
            $model->nodeCapacity = $map['NodeCapacity'];
        }
        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }
        if (isset($map['RecurrenceSchedules'])) {
            if (!empty($map['RecurrenceSchedules'])) {
                $model->recurrenceSchedules = [];
                $n = 0;
                foreach ($map['RecurrenceSchedules'] as $item) {
                    $model->recurrenceSchedules[$n++] = null !== $item ? recurrenceSchedules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScalingDownAfterIdleMinutes'])) {
            $model->scalingDownAfterIdleMinutes = $map['ScalingDownAfterIdleMinutes'];
        }
        if (isset($map['ScalingStep'])) {
            $model->scalingStep = $map['ScalingStep'];
        }
        if (isset($map['ScalingUsageThreshold'])) {
            $model->scalingUsageThreshold = $map['ScalingUsageThreshold'];
        }
        if (isset($map['StrategyDisableDate'])) {
            $model->strategyDisableDate = $map['StrategyDisableDate'];
        }
        if (isset($map['StrategyEnableDate'])) {
            $model->strategyEnableDate = $map['StrategyEnableDate'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['WarmUp'])) {
            $model->warmUp = $map['WarmUp'];
        }

        return $model;
    }
}

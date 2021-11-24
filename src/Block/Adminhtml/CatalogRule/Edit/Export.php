<?php
/**
 * Copyright © Q-Solutions Studio: eCommerce Nanobots. All rights reserved.
 *
 * @category    Nanobots
 * @package     Nanobots_DataPatchCreator
 * @author      Jakub Winkler <jwinkler@qsolutionsstudio.com>
 */

namespace Nanobots\DataPatchCreator\Block\Adminhtml\CatalogRule\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Export extends \Magento\CatalogRule\Block\Adminhtml\Edit\GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        $ruleId = $this->getRuleId();
        if ($ruleId) {
            $data = [
                'label' => __('Export to DataPatch'),
                'class' => 'action-secondary export-to-data-patch',
                'on_click' => 'deleteConfirm(\'' . __(
                        'Are you sure you want to do this?'
                    ) . '\', \'' . $this->urlBuilder->getUrl('dataPatchCreator/export/catalogRule', ['rule_id' => $ruleId]) . '\', {data: {}})',
                'sort_order' => 100,
            ];
        }
        return $data;
    }
}

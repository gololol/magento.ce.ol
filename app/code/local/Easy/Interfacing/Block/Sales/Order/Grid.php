<?php
class Easy_Interfacing_Block_Adminhtml_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $options = array(
            null => $this->helper('eav')->__('No'),
            1    => $this->helper('eav')->__('Yes'),
        );

        $this->addColumnAfter(
            'is_exprted',
            array(
                'header'    => $this->__('Exported'),
                'index'     => 'is_exported',
                'type'      => 'options',
                'width'     => '70px',
                'options'   => $options
            ),
            'status'
        );
        $this->sortColumnsByOrder();
    }
}
<?php

class KPNestedTabs extends Module
{
    public $tabs = [
        [
            'name' => 'Parent tab',
            'class_name' => 'AdminKpNestedTabsParent',
            'parent_class_name' => 'CONFIGURE',
            'icon' => 'extension'
        ],
        [
            'name' => '1st child tab',
            'class_name' => 'AdminKpNestedTabsFirst',
            'parent_class_name' => 'AdminKpNestedTabsParent'
        ],
        [
            'name' => '2nd child tab',
            'class_name' => 'AdminKpNestedTabsSecond',
            'parent_class_name' => 'AdminKpNestedTabsParent'
        ],
        [
            'name' => '2nd lvl 1st child tab',
            'class_name' => 'AdminKpNestedTabsSecondLvlFirst',
            'parent_class_name' => 'AdminKpNestedTabsFirst'
        ],
        [
            'name' => '2nd lvl 2st child tab',
            'class_name' => 'AdminKpNestedTabsSecondLvlSecond',
            'parent_class_name' => 'AdminKpNestedTabsFirst'
        ],
    ];

    public function __construct()
    {
        $this->name = 'kpnestedtabs';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->ps_versions_compliancy = ['min' => '1.7.7.0', 'max' => _PS_VERSION_];
        $this->author = 'Krystian Podemski';
        $this->bootstrap = true;
        parent::__construct();
    }
}

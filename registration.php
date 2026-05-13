<?php
use Magento\Framework\Component\ComponentRegistrar;
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Zwernemann_Withdrawal',
    __DIR__ // testing: BP . '/vendor/zwernemann/module-withdrawal'
);

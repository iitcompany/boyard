<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/extranet/documents-the-extranet/documents-for-the-dealers/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/extranet/documents-the-extranet/documents-for-the-dealers/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/docs/pub/(?<hash>[0-9a-f]{32})/(?<action>[0-9a-zA-Z]+)/\\?#',
    'RULE' => 'hash=$1&action=$2&',
    'ID' => 'bitrix:disk.external.link',
    'PATH' => '/docs/pub/index.php',
    'SORT' => 100,
  ),
  108 => 
  array (
    'CONDITION' => '#^/pub/document/([0-9a-zA-Z_-]+)/([0-9a-zA-Z]+)/([^/]*)#',
    'RULE' => 'id=$1&hash=$2',
    'ID' => 'bitrix:documentgenerator.view',
    'PATH' => '/pub/document.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/docs/the-department-of-planning-and-distribution/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav',
    'PATH' => '/docs/the-department-of-planning-and-distribution/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/disk/(?<action>[0-9a-zA-Z]+)/(?<fileId>[0-9]+)/\\?#',
    'RULE' => 'action=$1&fileId=$2&',
    'ID' => 'bitrix:disk.services',
    'PATH' => '/bitrix/services/disk/index.php',
    'SORT' => 100,
  ),
  135 => 
  array (
    'CONDITION' => '#^/timeman/schedules/(?<ACTION>[0-9a-zA-Z\\/]+)?/?.*#',
    'RULE' => 'ACTION=$1&',
    'ID' => 'bitrix:timeman.schedules',
    'PATH' => '/timeman/schedules.php',
    'SORT' => 100,
  ),
  136 => 
  array (
    'CONDITION' => '#^/timeman/worktime/(?<ACTION>[0-9a-zA-Z\\/]+)?/?.*#',
    'RULE' => 'ACTION=$1&',
    'ID' => 'bitrix:timeman.worktime',
    'PATH' => '/timeman/worktime.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/docs/department-on-work-with-retail-chains/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/department-on-work-with-retail-chains/index.php',
    'SORT' => 100,
  ),
  156 => 
  array (
    'CONDITION' => '#^/online/call/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  104 => 
  array (
    'CONDITION' => '#^\\/?\\/mobile/web_mobile_component\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => '',
    'PATH' => '/bitrix/services/mobile/webcomponent.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/pub/pay/([\\w\\W]+)/([0-9a-zA-Z]+)/([^/]*)#',
    'RULE' => 'account_number=$1&hash=$2',
    'ID' => '',
    'PATH' => '/pub/payment.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/docs/the-department-of-quality-control/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-department-of-quality-control/index.php',
    'SORT' => 100,
  ),
  139 => 
  array (
    'CONDITION' => '#^/pub/form/([0-9a-z_]+?)/([0-9a-z]+?)/.*#',
    'RULE' => 'form_code=$1&sec=$2',
    'ID' => NULL,
    'PATH' => '/pub/form.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/docs/department-of-pr-and-advertising/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/department-of-pr-and-advertising/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^\\/?\\/mobile/mobile_component\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => 'mobile_js_component',
    'PATH' => '/bitrix/services/mobile/jscomponent.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^\\/?\\/mobile/mobile_component\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => '',
    'PATH' => '/bitrix/services/mobile/jscomponent.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/docs/Department-of-economic-security/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/Department-of-economic-security/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  105 => 
  array (
    'CONDITION' => '#^/mobile/disk/(?<hash>[0-9]+)/download#',
    'RULE' => 'download=1&objectId=$1',
    'ID' => 'bitrix:mobile.disk.file.detail',
    'PATH' => '/mobile/disk/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/mobile/disk/(?<hash>[0-9]+)/download#',
    'RULE' => 'download=1&objectId=$1',
    'ID' => 'bitrix:mobile.disk.file.detail',
    'PATH' => '/mobile/disk/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/docs/financial-and-legal-department/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/financial-and-legal-department/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^//extranet/documents-the-extranet/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.aggregator',
    'PATH' => '/extranet/documents-the-extranet/index.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/tasks/getfile/(\\d+)/(\\d+)/([^/]+)#',
    'RULE' => 'taskid=$1&fileid=$2&filename=$3',
    'ID' => 'bitrix:tasks_tools_getfile',
    'PATH' => '/tasks/getfile.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/docs/company-store-ekaterinburg/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/company-store-ekaterinburg/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/docs/branch-of-saint-petersburg/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/branch-of-saint-petersburg/index.php',
    'SORT' => 100,
  ),
  129 => 
  array (
    'CONDITION' => '#^/docs/the-branch-in-novosibirsk/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-branch-in-novosibirsk/index.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/docs/the-logistics-department/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-logistics-department/index.php',
    'SORT' => 100,
  ),
  21 => 
  array (
    'CONDITION' => '#^/docs/agreements-and-contracts/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav',
    'PATH' => '/docs/agreements-and-contracts/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/stssync/contacts_extranet_emp/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/contacts_extranet_emp/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/settings/configs/userconsent/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/configs/userconsent.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/extranet/crm/configs/exch1c/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.exch1c',
    'PATH' => '/extranet/crm/configs/exch1c/index.php',
    'SORT' => 100,
  ),
  24 => 
  array (
    'CONDITION' => '#^/docs/documents-departments/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav',
    'PATH' => '/docs/documents-departments/index.php',
    'SORT' => 100,
  ),
  25 => 
  array (
    'CONDITION' => '#^/extranet/workgroups/create/#',
    'RULE' => '',
    'ID' => 'bitrix:extranet.group_create',
    'PATH' => '/extranet/workgroups/create/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/extranet/contacts/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork_user',
    'PATH' => '/extranet/contacts/personal.php',
    'SORT' => 100,
  ),
  130 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  28 => 
  array (
    'CONDITION' => '#^/stssync/calendar_extranet/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar_extranet/index.php',
    'SORT' => 100,
  ),
  153 => 
  array (
    'CONDITION' => '#^/marketplace/configuration/#',
    'RULE' => '',
    'ID' => 'bitrix:rest.configuration',
    'PATH' => '/marketplace/configuration/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#^/stssync/contacts_extranet/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/contacts_extranet/index.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^/crm/configs/deal_category/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.deal_category',
    'PATH' => '/crm/configs/deal_category/index.php',
    'SORT' => 100,
  ),
  29 => 
  array (
    'CONDITION' => '#^/docs/the-krasnodar-branch/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-krasnodar-branch/index.php',
    'SORT' => 100,
  ),
  31 => 
  array (
    'CONDITION' => '#^/crm/configs/productprops/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.productprops',
    'PATH' => '/crm/configs/productprops/index.php',
    'SORT' => 100,
  ),
  32 => 
  array (
    'CONDITION' => '#^/crm/configs/mailtemplate/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.mail_template',
    'PATH' => '/crm/configs/mailtemplate/index.php',
    'SORT' => 100,
  ),
  155 => 
  array (
    'CONDITION' => '#^/extranet/marketplace/app/#',
    'RULE' => NULL,
    'ID' => 'bitrix:app.layout',
    'PATH' => '/extranet/marketplace/app/index.php',
    'SORT' => 100,
  ),
  33 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  34 => 
  array (
    'CONDITION' => '#^/docs/department-payroll/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/department-payroll/index.php',
    'SORT' => 100,
  ),
  39 => 
  array (
    'CONDITION' => '#^/stssync/tasks_extranet/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/tasks_extranet/index.php',
    'SORT' => 100,
  ),
  106 => 
  array (
    'CONDITION' => '#^/docs/the-it-department/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-it-department/index.php',
    'SORT' => 100,
  ),
  35 => 
  array (
    'CONDITION' => '#^/docs/branch-n-novgorod/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/branch-n-novgorod/index.php',
    'SORT' => 100,
  ),
  38 => 
  array (
    'CONDITION' => '#^/docs/the-moscow-branch/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-moscow-branch/index.php',
    'SORT' => 100,
  ),
  149 => 
  array (
    'CONDITION' => '#^/mobile/knowledge/group/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/mobile/knowledge/group/index.php',
    'SORT' => 100,
  ),
  36 => 
  array (
    'CONDITION' => '#^/crm/configs/automation/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.automation',
    'PATH' => '/crm/configs/automation/index.php',
    'SORT' => 100,
  ),
  116 => 
  array (
    'CONDITION' => '#^/marketing/config/role/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/config/role.php',
    'SORT' => 100,
  ),
  43 => 
  array (
    'CONDITION' => '#^/extranet/mobile/webdav#',
    'RULE' => '',
    'ID' => 'bitrix:mobile.webdav.file.list',
    'PATH' => '/extranet/mobile/webdav/index.php',
    'SORT' => 100,
  ),
  42 => 
  array (
    'CONDITION' => '#^/crm/configs/mycompany/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.company',
    'PATH' => '/crm/configs/mycompany/index.php',
    'SORT' => 100,
  ),
  41 => 
  array (
    'CONDITION' => '#^/company/personal/mail/#',
    'RULE' => '',
    'ID' => 'bitrix:intranet.mail.config',
    'PATH' => '/mail/index.php',
    'SORT' => 100,
  ),
  103 => 
  array (
    'CONDITION' => '#^/crm/configs/exclusion/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/crm/configs/exclusion/index.php',
    'SORT' => 100,
  ),
  40 => 
  array (
    'CONDITION' => '#^/crm/configs/locations/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.locations',
    'PATH' => '/crm/configs/locations/index.php',
    'SORT' => 100,
  ),
  44 => 
  array (
    'CONDITION' => '#^/docs/the-minsk-branch/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-minsk-branch/index.php',
    'SORT' => 100,
  ),
  154 => 
  array (
    'CONDITION' => '#^/extranet/marketplace/#',
    'RULE' => NULL,
    'ID' => 'bitrix:rest.marketplace',
    'PATH' => '/extranet/marketplace/index.php',
    'SORT' => 100,
  ),
  45 => 
  array (
    'CONDITION' => '#^/crm/configs/currency/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.currency',
    'PATH' => '/crm/configs/currency/index.php',
    'SORT' => 100,
  ),
  46 => 
  array (
    'CONDITION' => '#^/stssync/contacts_crm/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/contacts_crm/index.php',
    'SORT' => 100,
  ),
  48 => 
  array (
    'CONDITION' => '#^/extranet/workgroups/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork_group',
    'PATH' => '/extranet/workgroups/index.php',
    'SORT' => 100,
  ),
  47 => 
  array (
    'CONDITION' => '#^/crm/configs/measure/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.measure',
    'PATH' => '/crm/configs/measure/index.php',
    'SORT' => 100,
  ),
  113 => 
  array (
    'CONDITION' => '#^/marketing/blacklist/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/blacklist.php',
    'SORT' => 100,
  ),
  112 => 
  array (
    'CONDITION' => '#^/marketing/template/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/template.php',
    'SORT' => 100,
  ),
  137 => 
  array (
    'CONDITION' => '#^/timeman/settings/.*#',
    'RULE' => '',
    'ID' => 'bitrix:timeman.settings',
    'PATH' => '/timeman/settings.php',
    'SORT' => 100,
  ),
  49 => 
  array (
    'CONDITION' => '#^/crm/configs/preset/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.preset',
    'PATH' => '/crm/configs/preset/index.php',
    'SORT' => 100,
  ),
  50 => 
  array (
    'CONDITION' => '#^/crm/reports/report/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.report',
    'PATH' => '/crm/reports/report/index.php',
    'SORT' => 100,
  ),
  51 => 
  array (
    'CONDITION' => '#^/crm/configs/fields/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.fields',
    'PATH' => '/crm/configs/fields/index.php',
    'SORT' => 100,
  ),
  107 => 
  array (
    'CONDITION' => '#^/crm/configs/volume/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.volume',
    'PATH' => '/crm/configs/volume/index.php',
    'SORT' => 100,
  ),
  53 => 
  array (
    'CONDITION' => '#^/services/processes/#',
    'RULE' => '',
    'ID' => 'bitrix:lists',
    'PATH' => '/services/processes/index.php',
    'SORT' => 100,
  ),
  52 => 
  array (
    'CONDITION' => '#^/crm/configs/exch1c/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.exch1c',
    'PATH' => '/crm/configs/exch1c/index.php',
    'SORT' => 100,
  ),
  114 => 
  array (
    'CONDITION' => '#^/marketing/contact/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/contact.php',
    'SORT' => 100,
  ),
  111 => 
  array (
    'CONDITION' => '#^/marketing/segment/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/segment.php',
    'SORT' => 100,
  ),
  56 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  55 => 
  array (
    'CONDITION' => '#^/marketplace/local/#',
    'RULE' => '',
    'ID' => 'bitrix:rest.marketplace.localapp',
    'PATH' => '/marketplace/local/index.php',
    'SORT' => 100,
  ),
  131 => 
  array (
    'CONDITION' => '#^/docs/the-contract/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/the-contract/index.php',
    'SORT' => 100,
  ),
  57 => 
  array (
    'CONDITION' => '#^/crm/configs/perms/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.perms',
    'PATH' => '/crm/configs/perms/index.php',
    'SORT' => 100,
  ),
  58 => 
  array (
    'CONDITION' => '#^/marketplace/hook/#',
    'RULE' => '',
    'ID' => 'bitrix:rest.hook',
    'PATH' => '/marketplace/hook/index.php',
    'SORT' => 100,
  ),
  62 => 
  array (
    'CONDITION' => '#^/stssync/contacts/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/contacts/index.php',
    'SORT' => 100,
  ),
  146 => 
  array (
    'CONDITION' => '#^/mobile/knowledge/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/mobile/knowledge/index.php',
    'SORT' => 100,
  ),
  152 => 
  array (
    'CONDITION' => '#^/company/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork_user',
    'PATH' => '/company/personal.php',
    'SORT' => 100,
  ),
  109 => 
  array (
    'CONDITION' => '#^/marketing/letter/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/letter.php',
    'SORT' => 100,
  ),
  60 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  123 => 
  array (
    'CONDITION' => '#^/shop/buyer_group/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.order.buyer_group',
    'PATH' => '/shop/buyer_group/index.php',
    'SORT' => 100,
  ),
  61 => 
  array (
    'CONDITION' => '#^/services/meeting/#',
    'RULE' => '',
    'ID' => 'bitrix:meetings',
    'PATH' => '//services/meeting/index.php',
    'SORT' => 100,
  ),
  143 => 
  array (
    'CONDITION' => '#^/timeman/meeting/#',
    'RULE' => '',
    'ID' => 'bitrix:meetings',
    'PATH' => '/timeman/meeting/index.php',
    'SORT' => 100,
  ),
  65 => 
  array (
    'CONDITION' => '#^/company/gallery/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery_user',
    'PATH' => '/company/gallery/index.php',
    'SORT' => 100,
  ),
  64 => 
  array (
    'CONDITION' => '#^/docs/accounting/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/accounting/index.php',
    'SORT' => 100,
  ),
  63 => 
  array (
    'CONDITION' => '#^/crm/configs/tax/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.tax',
    'PATH' => '/crm/configs/tax/index.php',
    'SORT' => 100,
  ),
  66 => 
  array (
    'CONDITION' => '#^/marketplace/app/#',
    'RULE' => '',
    'ID' => 'bitrix:app.layout',
    'PATH' => '/marketplace/app/index.php',
    'SORT' => 100,
  ),
  144 => 
  array (
    'CONDITION' => '#^/knowledge/group/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/knowledge/group/index.php',
    'SORT' => 100,
  ),
  69 => 
  array (
    'CONDITION' => '#^/services/lists/#',
    'RULE' => '',
    'ID' => 'bitrix:lists',
    'PATH' => '/services/lists/index.php',
    'SORT' => 100,
  ),
  68 => 
  array (
    'CONDITION' => '#^/crm/configs/bp/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.bp',
    'PATH' => '/crm/configs/bp/index.php',
    'SORT' => 100,
  ),
  67 => 
  array (
    'CONDITION' => '#^/crm/configs/ps/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.config.ps',
    'PATH' => '/crm/configs/ps/index.php',
    'SORT' => 100,
  ),
  122 => 
  array (
    'CONDITION' => '#^/shop/orderform/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.order.matcher',
    'PATH' => '/shop/orderform/index.php',
    'SORT' => 100,
  ),
  74 => 
  array (
    'CONDITION' => '#^/services/idea/#',
    'RULE' => '',
    'ID' => 'bitrix:idea',
    'PATH' => '/services/idea/index.php',
    'SORT' => 100,
  ),
  151 => 
  array (
    'CONDITION' => '#^/about/gallery/#',
    'RULE' => '',
    'ID' => 'bitrix:photogallery',
    'PATH' => '/about/gallery/index.php',
    'SORT' => 100,
  ),
  110 => 
  array (
    'CONDITION' => '#^/marketing/ads/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/ads.php',
    'SORT' => 100,
  ),
  72 => 
  array (
    'CONDITION' => '#^/crm/invoicing/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/crm/invoicing/index.php',
    'SORT' => 100,
  ),
  73 => 
  array (
    'CONDITION' => '#^/services/wiki/#',
    'RULE' => '',
    'ID' => 'bitrix:wiki',
    'PATH' => '/services/wiki.php',
    'SORT' => 100,
  ),
  70 => 
  array (
    'CONDITION' => '#^/pub/site/(.*?)#',
    'RULE' => 'path=$1',
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/pub/site/index.php',
    'SORT' => 100,
  ),
  75 => 
  array (
    'CONDITION' => '#^/stssync/tasks/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/tasks/index.php',
    'SORT' => 100,
  ),
  119 => 
  array (
    'CONDITION' => '#^/shop/settings/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.admin.page.controller',
    'PATH' => '/shop/settings/index.php',
    'SORT' => 100,
  ),
  132 => 
  array (
    'CONDITION' => '#^/crm/tracking/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/crm/tracking/index.php',
    'SORT' => 100,
  ),
  77 => 
  array (
    'CONDITION' => '#^/crm/activity/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.activity',
    'PATH' => '/crm/activity/index.php',
    'SORT' => 100,
  ),
  78 => 
  array (
    'CONDITION' => '#^/mobile/webdav#',
    'RULE' => '',
    'ID' => 'bitrix:mobile.webdav.file.list',
    'PATH' => '/mobile/webdav/index.php',
    'SORT' => 100,
  ),
  76 => 
  array (
    'CONDITION' => '#^/services/faq/#',
    'RULE' => '',
    'ID' => 'bitrix:support.faq',
    'PATH' => '/services/faq/index.php',
    'SORT' => 100,
  ),
  115 => 
  array (
    'CONDITION' => '#^/marketing/rc/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/marketing/rc.php',
    'SORT' => 100,
  ),
  81 => 
  array (
    'CONDITION' => '#^/docs/folder/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav',
    'PATH' => '/docs/folder/index.php',
    'SORT' => 100,
  ),
  88 => 
  array (
    'CONDITION' => '#^/docs/shared/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/shared/index.php',
    'SORT' => 100,
  ),
  138 => 
  array (
    'CONDITION' => '#^/crm/webform/#',
    'RULE' => NULL,
    'ID' => NULL,
    'PATH' => '/crm/webform/index.php',
    'SORT' => 100,
  ),
  83 => 
  array (
    'CONDITION' => '#^/docs/manage/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav',
    'PATH' => '/docs/manage/index.php',
    'SORT' => 100,
  ),
  82 => 
  array (
    'CONDITION' => '#^/crm/contact/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.contact',
    'PATH' => '/crm/contact/index.php',
    'SORT' => 100,
  ),
  79 => 
  array (
    'CONDITION' => '#^/marketplace/#',
    'RULE' => '',
    'ID' => 'bitrix:rest.marketplace',
    'PATH' => '/marketplace/index.php',
    'SORT' => 100,
  ),
  89 => 
  array (
    'CONDITION' => '#^/crm/invoice/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.invoice',
    'PATH' => '/crm/invoice/index.php',
    'SORT' => 100,
  ),
  87 => 
  array (
    'CONDITION' => '#^/crm/company/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.company',
    'PATH' => '/crm/company/index.php',
    'SORT' => 100,
  ),
  121 => 
  array (
    'CONDITION' => '#^/shop/orders/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.order',
    'PATH' => '/shop/orders/index.php',
    'SORT' => 100,
  ),
  86 => 
  array (
    'CONDITION' => '#^/crm/product/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.product',
    'PATH' => '/crm/product/index.php',
    'SORT' => 100,
  ),
  80 => 
  array (
    'CONDITION' => '#^/services/bp/#',
    'RULE' => '',
    'ID' => 'bitrix:bizproc.wizards',
    'PATH' => '/services/bp/index.php',
    'SORT' => 100,
  ),
  85 => 
  array (
    'CONDITION' => '#^/\\.well-known#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/groupdav.php',
    'SORT' => 100,
  ),
  120 => 
  array (
    'CONDITION' => '#^/shop/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.start',
    'PATH' => '/shop/stores/index.php',
    'SORT' => 100,
  ),
  124 => 
  array (
    'CONDITION' => '#^/shop/buyer/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.order.buyer',
    'PATH' => '/shop/buyer/index.php',
    'SORT' => 100,
  ),
  92 => 
  array (
    'CONDITION' => '#^/docs/sales/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/sales/index.php',
    'SORT' => 100,
  ),
  140 => 
  array (
    'CONDITION' => '#^/crm/button/#',
    'RULE' => NULL,
    'ID' => NULL,
    'PATH' => '/crm/button/index.php',
    'SORT' => 100,
  ),
  127 => 
  array (
    'CONDITION' => '#^/workgroups/#',
    'RULE' => '',
    'ID' => 'bitrix:socialnetwork_group',
    'PATH' => '/workgroups/index.php',
    'SORT' => 100,
  ),
  145 => 
  array (
    'CONDITION' => '#^/knowledge/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/knowledge/index.php',
    'SORT' => 100,
  ),
  95 => 
  array (
    'CONDITION' => '#^/crm/quote/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.quote',
    'PATH' => '/crm/quote/index.php',
    'SORT' => 100,
  ),
  94 => 
  array (
    'CONDITION' => '#^/docs/OPIR/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.common',
    'PATH' => '/docs/OPIR/index.php',
    'SORT' => 100,
  ),
  93 => 
  array (
    'CONDITION' => '#^/docs/sale/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav',
    'PATH' => '/docs/sale/index.php',
    'SORT' => 100,
  ),
  147 => 
  array (
    'CONDITION' => '#^/kb/group/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.start',
    'PATH' => '/kb/group/index.php',
    'SORT' => 100,
  ),
  98 => 
  array (
    'CONDITION' => '#^/crm/deal/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.deal',
    'PATH' => '/crm/deal/index.php',
    'SORT' => 100,
  ),
  96 => 
  array (
    'CONDITION' => '#^/docs/pub/#',
    'RULE' => '',
    'ID' => 'bitrix:disk.external.link',
    'PATH' => '/docs/pub/index.php',
    'SORT' => 100,
  ),
  97 => 
  array (
    'CONDITION' => '#^/crm/lead/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.lead',
    'PATH' => '/crm/lead/index.php',
    'SORT' => 100,
  ),
  141 => 
  array (
    'CONDITION' => '#^/crm/ml/#',
    'RULE' => NULL,
    'ID' => NULL,
    'PATH' => '/crm/ml/index.php',
    'SORT' => 100,
  ),
  99 => 
  array (
    'CONDITION' => '#^/m/docs/#',
    'RULE' => '',
    'ID' => 'bitrix:mobile.webdav.aggregator',
    'PATH' => '/m/docs/index.php',
    'SORT' => 100,
  ),
  118 => 
  array (
    'CONDITION' => '#^/sites/#',
    'RULE' => NULL,
    'ID' => 'bitrix:landing.start',
    'PATH' => '/sites/index.php',
    'SORT' => 100,
  ),
  125 => 
  array (
    'CONDITION' => '#^/mail/#',
    'RULE' => '',
    'ID' => 'bitrix:mail.client',
    'PATH' => '/mail/index.php',
    'SORT' => 100,
  ),
  101 => 
  array (
    'CONDITION' => '#^/onec/#',
    'RULE' => '',
    'ID' => 'bitrix:crm.1C.start',
    'PATH' => '/onec/index.php',
    'SORT' => 100,
  ),
  102 => 
  array (
    'CONDITION' => '#^/docs/#',
    'RULE' => '',
    'ID' => 'bitrix:webdav.aggregator',
    'PATH' => '/docs/index.php',
    'SORT' => 100,
  ),
  100 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  150 => 
  array (
    'CONDITION' => '#^/rpa/#',
    'RULE' => '',
    'ID' => 'bitrix:rpa.router',
    'PATH' => '/rpa/index.php',
    'SORT' => 100,
  ),
  148 => 
  array (
    'CONDITION' => '#^/kb/#',
    'RULE' => '',
    'ID' => 'bitrix:landing.start',
    'PATH' => '/kb/index.php',
    'SORT' => 100,
  ),
);

<?
/**
 * BT_COND_LOGIC_EQ
 */
define('BT_COND_LOGIC_EQ', 0);						// = (equal);

/**
 * BT_COND_LOGIC_NOT_EQ
 */
define('BT_COND_LOGIC_NOT_EQ', 1);					// != (not equal);

/**
 * BT_COND_LOGIC_GR
 */
define('BT_COND_LOGIC_GR', 2);						// > (great);

/**
 * BT_COND_LOGIC_LS
 */
define('BT_COND_LOGIC_LS', 3);						// < (less);

/**
 * BT_COND_LOGIC_EGR
 */
define('BT_COND_LOGIC_EGR', 4);						// => (great or equal);

/**
 * BT_COND_LOGIC_ELS
 */
define('BT_COND_LOGIC_ELS', 5);						// =< (less or equal);

/**
 * BT_COND_LOGIC_CONT
 */
define('BT_COND_LOGIC_CONT', 6);

/**
 * BT_COND_LOGIC_NOT_CONT
 */
define('BT_COND_LOGIC_NOT_CONT', 7);

/**
 * BT_COND_MODE_DEFAULT
 */
define('BT_COND_MODE_DEFAULT', 0);

/**
 * BT_COND_MODE_PARSE
 */
define('BT_COND_MODE_PARSE', 1);

/**
 * BT_COND_MODE_GENERATE
 */
define('BT_COND_MODE_GENERATE', 2);

/**
 * BT_COND_MODE_SQL
 */
define('BT_COND_MODE_SQL', 3);

/**
 * BT_COND_MODE_SEARCH
 */
define('BT_COND_MODE_SEARCH', 4);

/**
 * BT_COND_BUILD_CATALOG
 */
define('BT_COND_BUILD_CATALOG', 0);

/**
 * BT_COND_BUILD_SALE
 */
define('BT_COND_BUILD_SALE', 1);

/**
 * BT_COND_BUILD_SALE_ACTIONS
 */
define('BT_COND_BUILD_SALE_ACTIONS', 2);

/**
 * CATALOG_LOAD_NO_STEP
 */
define('CATALOG_LOAD_NO_STEP', true);

/**
 * CATALOG_DISCOUNT_SAVE_FILE
 */
define('CATALOG_DISCOUNT_SAVE_FILE', '/bitrix/modules/catalog/discount_save.php');

/**
 * CATALOG_PATH2EXPORTS
 */
define('CATALOG_PATH2EXPORTS', "/bitrix/php_interface/include/catalog_export/");

/**
 * CATALOG_PATH2EXPORTS_DEF
 */
define('CATALOG_PATH2EXPORTS_DEF', "/bitrix/modules/catalog/load/");

/**
 * CATALOG_DEFAULT_EXPORT_PATH
 */
define('CATALOG_DEFAULT_EXPORT_PATH', '/bitrix/catalog_export/');

/**
 * CATALOG_PATH2IMPORTS
 */
define('CATALOG_PATH2IMPORTS', "/bitrix/php_interface/include/catalog_import/");

/**
 * CATALOG_PATH2IMPORTS_DEF
 */
define('CATALOG_PATH2IMPORTS_DEF', "/bitrix/modules/catalog/load_import/");

/**
 * YANDEX_SKU_EXPORT_ALL
 */
define('YANDEX_SKU_EXPORT_ALL', 1);

/**
 * YANDEX_SKU_EXPORT_MIN_PRICE
 */
define('YANDEX_SKU_EXPORT_MIN_PRICE', 2);

/**
 * YANDEX_SKU_EXPORT_PROP
 */
define('YANDEX_SKU_EXPORT_PROP', 3);

/**
 * YANDEX_SKU_TEMPLATE_PRODUCT
 */
define('YANDEX_SKU_TEMPLATE_PRODUCT', 1);

/**
 * YANDEX_SKU_TEMPLATE_OFFERS
 */
define('YANDEX_SKU_TEMPLATE_OFFERS', 2);

/**
 * YANDEX_SKU_TEMPLATE_CUSTOM
 */
define('YANDEX_SKU_TEMPLATE_CUSTOM', 3);

/**
 * EXPORT_VERSION_OLD
 */
define('EXPORT_VERSION_OLD', 1);

/**
 * EXPORT_VERSION_NEW
 */
define('EXPORT_VERSION_NEW', 2);

/**
 * DISCOUNT_TYPE_STANDART
 */
define('DISCOUNT_TYPE_STANDART', 0);

/**
 * DISCOUNT_TYPE_SAVE
 */
define('DISCOUNT_TYPE_SAVE', 1);

/**
 * CATALOG_DISCOUNT_OLD_VERSION
 */
define('CATALOG_DISCOUNT_OLD_VERSION', 1);

/**
 * CATALOG_DISCOUNT_NEW_VERSION
 */
define('CATALOG_DISCOUNT_NEW_VERSION', 2);

/**
 * BX_CATALOG_FILENAME_REG
 */
define('BX_CATALOG_FILENAME_REG', '/[^a-zA-Z0-9\s!#\$%&\(\)\[\]\{\}+\.;=@\^_\~\/\\\\\-]/i');

/**
 * CATALOG_DISCOUNT_FILE
 */
define('CATALOG_DISCOUNT_FILE', "/bitrix/modules/catalog/discount_data.php");

/**
 * CATALOG_DISCOUNT_CPN_FILE
 */
define('CATALOG_DISCOUNT_CPN_FILE', "/bitrix/modules/catalog/discount_cpn_data.php");

/**
 * CONTRACTOR_INDIVIDUAL
 */
define('CONTRACTOR_INDIVIDUAL', 1);

/**
 * CONTRACTOR_JURIDICAL
 */
define('CONTRACTOR_JURIDICAL', 2);

/**
 * DOC_ARRIVAL
 */
define('DOC_ARRIVAL', 'A');

/**
 * DOC_MOVING
 */
define('DOC_MOVING', 'M');

/**
 * DOC_RETURNS
 */
define('DOC_RETURNS', 'R');

/**
 * DOC_DEDUCT
 */
define('DOC_DEDUCT', 'D');

/**
 * DOC_INVENTORY
 */
define('DOC_INVENTORY', 'I');

/**
 * CATALOG_VALUE_PRECISION
 */
define('CATALOG_VALUE_PRECISION', 2);

/**
 * CATALOG_CACHE_DEFAULT_TIME
 */
define('CATALOG_CACHE_DEFAULT_TIME', 10800);

/**
 * NO_KEEP_STATISTIC
 */
define('NO_KEEP_STATISTIC', true);

/**
 * NOT_CHECK_PERMISSIONS
 */
define('NOT_CHECK_PERMISSIONS', true);

/**
 * BX_CAT_CRON
 */
define('BX_CAT_CRON', true);

/**
 * NO_AGENT_CHECK
 */
define('NO_AGENT_CHECK', true);

/**
 * LANG
 */
define('LANG', "ru");

/**
 * STOP_STATISTICS
 */
define('STOP_STATISTICS', true);

/**
 * BX_SECURITY_SHOW_MESSAGE
 */
define('BX_SECURITY_SHOW_MESSAGE', true);

/**
 * CML_DEBUG
 */
define('CML_DEBUG', False);

/**
 * CML_MEMORY_DEBUG
 */
define('CML_MEMORY_DEBUG', False);

/**
 * CML_DEBUG_FILE_NAME
 */
define('CML_DEBUG_FILE_NAME', "/__cml_time_mark.dat");

/**
 * CML_GROUP_OPERATION_CNT
 */
define('CML_GROUP_OPERATION_CNT', 100);

/**
 * CML_CLEAR_TEMP_TABLES
 */
define('CML_CLEAR_TEMP_TABLES', False);

/**
 * CML_DELETE_COMMENTS
 */
define('CML_DELETE_COMMENTS', False);

/**
 * CML_KEEP_EXISTING_PROPERTIES
 */
define('CML_KEEP_EXISTING_PROPERTIES', True);

/**
 * CML_KEEP_EXISTING_DATA
 */
define('CML_KEEP_EXISTING_DATA', False);

/**
 * CML_ACTIVATE_FILE_DATA
 */
define('CML_ACTIVATE_FILE_DATA', True);

/**
 * CML_USE_SYSTEM_DELETE
 */
define('CML_USE_SYSTEM_DELETE', False);

/**
 * CATALOG_NEW_OFFERS_IBLOCK_NEED
 */
define('CATALOG_NEW_OFFERS_IBLOCK_NEED', '-1');

/**
 * ADMIN_MODULE_NAME
 */
define('ADMIN_MODULE_NAME', "catalog");

/**
 * ADMIN_MODULE_ICON
 */
define('ADMIN_MODULE_ICON', '<a href="/bitrix/admin/cat_index.php?lang='.LANGUAGE_ID.'"><img src="/bitrix/images/catalog/catalog.gif" width="48" height="48" border="0" alt="'.GetMessage("CATALOG_ICON_TITLE").'" title="'.GetMessage("CATALOG_ICON_TITLE").'"></a>');


?>
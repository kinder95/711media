<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:media_test/Configuration/TsConfig/pagetsconfig.txt">'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('media_test', 'Configuration/TypoScript', 'Media test typoscript');

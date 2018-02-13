<?php
// Adds the content element to the "Type" dropdown
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
//array(
//    'Jumbotron',
//    'mediatest_jumbotron',
//    'Jumbotron'
//),
//'CType',
//'mediatest_jumbotron'
//);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Jumborton',
        'mediatest_jumbotron',
        'content-image'
    ],
    'textmedia',
    'after'
);

// Configure new fields:
$fields = [
    'header_mediatest' => [
        'label' => 'LLL:EXT:media_test/Resources/Private/Language/locallang_db.xlf:tt_content.header_mediatest',
        'exclude' => 1,
        'config' => [
            'type' => 'input',
            'default' => '',
            'required' => true,
            'size' => 25
        ],
    ],
    'subheader_mediatest' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:media_test/Resources/Private/Language/locallang_db.xlf:tt_content.subheader_mediatest',
        'config' => [
            'type' => 'input',
            'max' => 150,
        ]
    ],
    'button_url' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:media_test/Resources/Private/Language/locallang_db.xlf:tt_content.button_url',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
        ],
    ],
    'button_text' => [
        'label' => 'LLL:EXT:media_test/Resources/Private/Language/locallang_db.xlf:tt_content.button_text',
        'config' => [
            'type' => 'input',
            'max' => 30
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
// Reload on change
$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] .= ',header_mediatest,subheader_mediatest,button_url,button_text';
$GLOBALS['TCA']['tt_content']['types']['mediatest_jumbotron'] = [
    'showitem'         =>
        '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
             --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
          header_mediatest,subheader_mediatest,bodytext,button_url,button_text
        ',


];
$GLOBALS['TCA']['tt_content']['types']['mediatest_jumbotron']['columnsOverrides'] = [
    'bodytext' => [
        'label' => 'LLL:EXT:media_test/Resources/Private/Language/locallang_db.xlf:tt_content.bodytext',
        'config' => [
            'enableRichtext' => true,
            'richtextConfiguration' => 'default'
        ],
    ]
];

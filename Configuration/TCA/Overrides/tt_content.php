<?php

$tcaTtContent = [
    'types' => [
        'video_content' => [
            'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
            bodytext;Youtube Video URL,
            image;Thumbnail,
            header;Headline,
            subheader;Subheadline,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
        ]
    ],
    'columns' => [
        'CType' => [
            'config' => [
                'items' => [
                    'video_content' => [
                        'Video Element',
                        // Name des Inhaltselementes
                        'video_content',
                        // TCA Name des Inhaltselementes
                        'EXT:eigene_inhaltselemente/Resources/Public/Images/Backend/ContentElements/VideoContent.png'
                        // Bild des Inhaltelementes
                    ]
                ]
            ]
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TCA']['tt_content'], $tcaTtContent);

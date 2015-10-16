<?php

$tcaTtContent = array(
    'types' => array(
        'video_content' => array(
            'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
            bodytext;Youtube Video URL,
            image;Thumbnail,
            header;Headline,
            subheader;Subheadline,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
            --palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
        )
    ),
    'columns' => array(
        'CType' => array(
            'config' => array(
                'items' => array(
                    'video_content' => array(
                        'Video Element',
                        // Name des Inhaltselementes
                        'video_content',
                        // TCA Name des Inhaltselementes
                        'EXT:eigene_inhaltselemente/Resources/Public/Images/Backend/ContentElements/VideoContent.png'
                        // Bild des Inhaltelementes
                    )
                )
            )
        )
    )
);

\TYPO3\CMS\Core\Utility\ArrayUtility::mergeRecursiveWithOverrule($GLOBALS['TCA']['tt_content'], $tcaTtContent);

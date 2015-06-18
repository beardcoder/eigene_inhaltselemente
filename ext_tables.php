<?php

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Creativeworkspace Extension');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '
mod {
	wizards.newContentElement.wizardItems.extra {
		header = OnePage
		elements {
			video_content {
				icon = ../typo3conf/ext/meine_extension/Resources/Public/Images/Backend/ContentElements/VideoContent.png
				title = Video Content Element 
				description = Ein Element für Youtube Videos
				tt_content_defValues {
					CType = video_content
				}
			}
		}
		show = *
	}
}
');

ALTER TABLE `#__joomgallery_config` CHANGE `jg_delete_original` `jg_delete_original` int(1) NOT NULL AFTER `jg_impath`;
ALTER TABLE `#__joomgallery_config` ADD `jg_origautorot` int(1) NOT NULL DEFAULT 0 AFTER `jg_delete_original`;
ALTER TABLE `#__joomgallery_config` CHANGE `jg_originalquality` `jg_originalquality` int(1) NOT NULL AFTER `jg_origautorot`;
ALTER TABLE `#__joomgallery_config` ADD `jg_maxheight` int(5) NOT NULL DEFAULT 0 AFTER `jg_maxwidth`;
ALTER TABLE `#__joomgallery_config` ADD `jg_detailautorot` int(1) NOT NULL DEFAULT 0 AFTER `jg_maxheight`;
ALTER TABLE `#__joomgallery_config` ADD `jg_thumbautorot` int(1) NOT NULL DEFAULT 0 AFTER `jg_thumbheight`;
ALTER TABLE `#__joomgallery_config` DROP `jg_upload_exif_rotation`;
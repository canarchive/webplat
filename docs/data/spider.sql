UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `a`.`info_id` = `m`.`id`  WHERE `a`.`info_table` = 'merchant' AND `a`.`source_id` = `m`.`source_id`;

UPDATE `work_common`.`wc_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `m`.`logo` = `a`.`id`  WHERE `m`.`logo` = 0 AND `a`.`info_table` = 'merchant' AND `a`.`info_field` = 'logo' AND `a`.`info_id` = `m`.`id`;


UPDATE `workhouse_merchant`.`wm_designer` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_detail` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_integrity` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_merchant_comment` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_owner` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_woring` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;
UPDATE `workhouse_merchant`.`wm_realcase` AS `d`, `workhouse_merchant`.`wm_merchant_mini` AS `m` SET `d`.`merchant_id` = `m`.`id`  WHERE `d`.`source_merchant_id` = `m`.`source_id`;

UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_designer` AS `d` SET `a`.`info_id` = `d`.`id`  WHERE `a`.`info_table` = 'designer' AND `a`.`source_id` = `d`.`source_id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_designer` AS `d` SET `d`.`photo` = `a`.`id`  WHERE `a`.`info_table` = 'designer' AND `a`.`info_field` = 'photo' AND `a`.`info_id` = `d`.`id`;

UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `a`.`info_id` = `d`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`source_id` = `d`.`source_id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `d`.`thumb` = `a`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`info_field` = 'thumb' AND `a`.`info_id` = `d`.`id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `d`.`picture_design` = `a`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`info_field` = 'picture_design' AND `a`.`info_id` = `d`.`id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_realcase` AS `d` SET `d`.`picture_origin` = `a`.`id`  WHERE `a`.`info_table` = 'realcase' AND `a`.`info_field` = 'picture_origin' AND `a`.`info_id` = `d`.`id`;

UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_working` AS `d` SET `a`.`info_id` = `d`.`id`  WHERE `a`.`info_table` = 'working' AND `a`.`source_id` = `d`.`source_id`;
UPDATE `work_spider`.`ws_attachment` AS `a`, `workhouse_merchant`.`wm_working` AS `d` SET `d`.`thumb` = `a`.`id`  WHERE `a`.`info_table` = 'working' AND `a`.`info_field` = 'thumb' AND `a`.`info_id` = `d`.`id`;

UPDATE `workhouse_merchant`.`wm_merchant_comment` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `a`.`owner_id` = `b`.`id`  WHERE `a`.`source_owner_mark` = `b`.`mark`;

UPDATE `workhouse_merchant`.`wm_designer` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `b`.`designer_id` = `a`.`id`  WHERE `a`.`source_id` = `b`.`source_designer_id`;

UPDATE `workhouse_merchant`.`wm_realcase` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `a`.`owner_id` = `b`.`id`  WHERE `a`.`source_id` = `b`.`source_id`;
UPDATE `workhouse_merchant`.`wm_working` AS `a`, `workhouse_merchant`.`wm_owner` AS `b` SET `a`.`owner_id` = `b`.`id`  WHERE `a`.`source_id` = `b`.`source_id`;

-- no used --
INSERT INTO `workhouse_merchant`.`wm_merchant` (`city_code`, `name`, `brief`, `company_id`, `category_id`, `sort`, `logo`, `orderlist`, `hotline`, `postcode`, `address`, `num_owner`, `num_realcase`, `num_working`, `num_comment`, `num_deposit`, `score`, `praise`, `picture`, `description`, `status`, `created_at`, `updated_at`, `is_spider`, `source_site_code`, `source_id`)
SELECT `city_code`, `name`, `brief`, `company_id`, `category_id`, `sort`, `logo`, `orderlist`, `hotline`, `postcode`, `address`, `num_owner`, `num_realcase`, `num_working`, `num_comment`, `num_deposit`, `score`, `praise`, `picture`, `description`, `status`, `created_at`, `updated_at`, `is_spider`, `source_site_code`, `source_id` FROM `work_spider`.`ws_merchant` WHERE `source_status_deal` = 1;

UPDATE `workhouse_merchant`.`wm_merchant` AS `m1`, `work_spider`.`ws_detail` AS `m2` SET `m1`.`brief` = `m2`.`scale` WHERE `m1`.`brief` = '' AND `m1`.`source_site_code` = `m2`.`source_site_code` AND `m1`.`source_id` = `m2`.`source_id`;

INSERT INTO `work_common`.`wc_attachment` (`name`, `filepath`, `path_prefix`, `url_prefix`, `filename`, `orderlist`, `description`, `size`, `type`, `extname`, `info_table`, `info_field`, `info_id`, `in_use`, `created_at`, `source_site_code`, `source_id`)
SELECT `name`, `filepath`, `path_prefix`, `url_prefix`, `filename`, `orderlist`, `description`, `size`, `type`, `extname`, `info_table`, `info_field`, `info_id`, `in_use`, `created_at`, `source_site_code`, `source_id` FROM `work_spider`.`ws_attachment` WHERE `source_status` = 1;

UPDATE `work_common`.`wc_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `a`.`info_id` = `m`.`id`  WHERE `a`.`source_site_code` != '' AND `a`.`source_site_code` = `m`.`source_site_code` AND `a`.`source_id` = `m`.`source_id`;

UPDATE `work_common`.`wc_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `m`.`logo` = `a`.`id`  WHERE `m`.`logo` = 0 AND `a`.`info_table` = 'merchant' AND `a`.`info_field` = 'logo' AND `a`.`info_id` = `m`.`id`;

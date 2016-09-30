INSERT INTO `workhouse_merchant`.`wm_merchant` (`city_code`, `name`, `brief`, `company_id`, `category_id`, `sort`, `logo`, `orderlist`, `hotline`, `postcode`, `address`, `num_owner`, `num_realcase`, `num_working`, `num_comment`, `num_deposit`, `score`, `praise`, `picture`, `description`, `status`, `created_at`, `updated_at`, `is_spider`, `source_site_code`, `source_id`)
SELECT `city_code`, `name`, `brief`, `company_id`, `category_id`, `sort`, `logo`, `orderlist`, `hotline`, `postcode`, `address`, `num_owner`, `num_realcase`, `num_working`, `num_comment`, `num_deposit`, `score`, `praise`, `picture`, `description`, `status`, `created_at`, `updated_at`, `is_spider`, `source_site_code`, `source_id` FROM `work_spider`.`ws_merchant` WHERE `source_status_deal` = 1;

UPDATE `workhouse_merchant`.`wm_merchant` AS `m1`, `work_spider`.`ws_detail` AS `m2` SET `m1`.`brief` = `m2`.`scale` WHERE `m1`.`brief` = '' AND `m1`.`source_site_code` = `m2`.`source_site_code` AND `m1`.`source_id` = `m2`.`source_id`;

INSERT INTO `work_common`.`wc_attachment` (`name`, `filepath`, `path_prefix`, `url_prefix`, `filename`, `orderlist`, `description`, `size`, `type`, `extname`, `info_table`, `info_field`, `info_id`, `in_use`, `created_at`, `source_site_code`, `source_id`)
SELECT `name`, `filepath`, `path_prefix`, `url_prefix`, `filename`, `orderlist`, `description`, `size`, `type`, `extname`, `info_table`, `info_field`, `info_id`, `in_use`, `created_at`, `source_site_code`, `source_id` FROM `work_spider`.`ws_attachment` WHERE `source_status` = 1;

UPDATE `work_common`.`wc_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `a`.`info_id` = `m`.`id`  WHERE `a`.`source_site_code` != '' AND `a`.`source_site_code` = `m`.`source_site_code` AND `a`.`source_id` = `m`.`source_id`;

UPDATE `work_common`.`wc_attachment` AS `a`, `workhouse_merchant`.`wm_merchant` AS `m` SET `m`.`logo` = `a`.`id`  WHERE `m`.`logo` = 0 AND `a`.`info_table` = 'merchant' AND `a`.`info_field` = 'logo' AND `a`.`info_id` = `m`.`id`;

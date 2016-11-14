INSERT INTO `workhouse_spread`.`ws_owner_dispatch` (`city_code`, `mobile`,  `house_id`, `service_id`, `created_at`)
SELECT `city_code`, `mobile`, `house_id`, `service_id`, `created_at` FROM `workhouse_merchant`.`wm_owner_merchant` GROUP BY `mobile` ORDER BY `created_at` DESC;
UPDATE `workhouse_spread`.`ws_owner_dispatch` AS `t1`, (SELECT `mobile`, COUNT(*) AS `count` FROM `workhouse_merchant`.`wm_owner_merchant` GROUP BY `mobile`, `merchant_id`) AS `t2` SET `num_merchant` = `count` WHERE `t1`.`mobile` = `t2`.`mobile`;

INSERT INTO `workhouse_merchant`.`wm_merchant_note` (`owner_merchant_id`, `reply`, `reply_at`) SELECT `id`, `note`, `view_at` FROM `workhouse_merchant`.`wm_owner_merchant`;


ALTER TABLE `ws_visit` DROP `url_full_pre`;
ALTER TABLE `ws_conversion` DROP `url_full_pre`;

ALTER TABLE `ws_visit` ADD `dongtai` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'dongtai' AFTER `pagenum`, ADD `utm_network` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'utm_network' AFTER `dongtai`, ADD `haoci` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'haoci' AFTER `utm_network`, ADD `dsp` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'dsp' AFTER `haoci`;
ALTER TABLE `ws_conversion` ADD `dongtai` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'dongtai' AFTER `pagenum`, ADD `haoci` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'haoci' AFTER `utm_network`, ADD `dsp` VARCHAR(100) NOT NULL DEFAULT '' COMMENT 'dsp' AFTER `haoci` ;

ALTER TABLE `ws_visit` ADD `created_week` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '周' AFTER `created_hour`;
ALTER TABLE `ws_conversion` ADD `created_week` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '周' AFTER `created_hour`;
ALTER TABLE `ws_decoration_owner` ADD `created_week` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '周' AFTER `created_hour`;

DROP TABLE ws_decoration;
DROP TABLE ws_user;
DELETE FROM `wp_auth_menu` WHERE `module` = 'spread' AND `controller` IN ('user', 'decoration');
LTER TABLE `ws_decoration_owner`
  DROP `user_id`,
  DROP `decoration_id`,
  DROP `type`,
  DROP `signin_at`;
ALTER TABLE `ws_conversion`
  DROP `info_id`,
  DROP `info_name`;
ALTER TABLE `ws_decoration_owner` ADD `position` VARCHAR(50) NOT NULL DEFAULT '' COMMENT '位置' AFTER `message`;


UPDATE `wm_owner` AS `t1`, `wm_realcase` as `t2` SET `t1`.`realcase_id` = `t2`.`id` WHERE `t1`.`id` = `t2`.`owner_id`;
UPDATE `wm_owner` AS `t1`, `wm_working` as `t2` SET `t1`.`working_id` = `t2`.`id` WHERE `t1`.`id` = `t2`.`owner_id`;
UPDATE `wm_owner` AS `t1`, (SELECT `owner_id`, COUNT(*) AS `count` FROM `wm_merchant_comment` GROUP BY `owner_id`) as `t2` SET `t1`.`num_comment` = `t2`.`count` WHERE `t1`.`id` = `t2`.`owner_id`;

UPDATE `wm_merchant` SET `num_owner` = 0, `num_designer` = 0, `num_realcase` = 0, `num_working` = 0, `num_comment` = 0;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_owner` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_owner` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_designer` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_designer` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_realcase` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_realcase` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_working` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_working` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_merchant_comment` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_comment` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;

UPDATE `wm_designer` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_owner` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_merchant_comment` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_realcase` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;
UPDATE `wm_working` AS `t1`, `wm_merchant` AS `t2` SET `t1`.`is_joined` = `t2`.`is_joined` WHERE `t1`.`merchant_id` = `t2`.`id`;

UPDATE `wm_merchant` SET `score` = ROUND(4+RAND(), 1), `num_owner` = FLOOR( 50 + RAND() * (500 - 50)), `num_realcase` = FLOOR( 3 + RAND() * (10 - 3)), `num_working` = FLOOR( 1 + RAND() * (10 - 1)), `praise` = FLOOR( 100 + RAND() * (300 - 100)) WHERE 1
UPDATE `wm_merchant` SET `score` = `score` + 0.4 WHERE `score` < 4.5

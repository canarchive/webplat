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

UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_owner` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_owner` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_designer` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_designer` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_realcase` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_realcase` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_working` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_working` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;
UPDATE `wm_merchant` AS `t1`, (SELECT `merchant_id`, COUNT(*) AS `count` FROM `wm_merchant_comment` GROUP BY `merchant_id`) as `t2` SET `t1`.`num_` = `t2`.`count` WHERE `t1`.`id` = `t2`.`merchant_id`;

UPDATE `wm_merchant` SET `score` = ROUND(4+RAND(), 1), `num_owner` = FLOOR( 50 + RAND() * (500 - 50)), `num_realcase` = FLOOR( 3 + RAND() * (10 - 3)), `num_working` = FLOOR( 1 + RAND() * (10 - 1)), `praise` = FLOOR( 100 + RAND() * (300 - 100)) WHERE 1
UPDATE `wm_merchant` SET `score` = `score` + 0.4 WHERE `score` < 4.5

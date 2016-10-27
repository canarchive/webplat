SELECT `id`, `mobile` AS `手机号`, `name` AS `名子`, `city_input` AS `业主选择的城市`, `area_input` AS `房屋面积`, `keyword` AS `搜索关键字`, `city` AS `IP所在城市`, `note` AS `备注`  FROM `ws_conversion` WHERE `id` > 134;

SELECT `hour`, SUM(`visit_num`), SUM(`success_num`), FORMAT(SUM(`success_num`) / SUM(`visit_num`), 4) AS `转化率` FROM `work_statistic`.`ws_hour` GROUP BY `hour`;

TRUNCATE `work_statistic`.`ws_day`;
INSERT INTO `work_statistic`.`ws_day`(`day`, `visit_num`) SELECT `created_day`, COUNT(*) FROM `work_spread`.`ws_visit` GROUP BY `created_day`;
UPDATE `work_statistic`.`ws_day` AS `day`, (SELECT `created_day`, COUNT(*) AS `count` FROM `work_spread`.`ws_conversion` GROUP BY `created_day`) AS `success` SET `day`.`success_num` = `success`.`count` WHERE `day`.`day` = `success`.`created_day`;
SELECT `id`, `day`, `visit_num`, `success_num`, FORMAT(`success_num` / `visit_num`, 4) AS `转化率` FROM `work_statistic`.`ws_day`;

TRUNCATE `work_statistic`.`ws_hour`;
INSERT INTO `work_statistic`.`ws_hour`(`day`, `hour`, `visit_num`) SELECT `created_day`, `created_hour`, COUNT(*) FROM `work_spread`.`ws_visit` GROUP BY `created_day`, `created_hour`;
UPDATE `work_statistic`.`ws_hour` AS `hour`, (SELECT `created_day`, `created_hour`, COUNT(*) AS `count` FROM `work_spread`.`ws_conversion` GROUP BY `created_day`, `created_hour`) AS `success` SET `hour`.`success_num` = `success`.`count` WHERE `hour`.`day` = `success`.`created_day` AND `hour`.`hour` = `success`.`created_hour`;
SELECT `id`, `day`, `hour`, `visit_num`, `success_num`, FORMAT(`success_num` / `visit_num`, 4) AS `转化率` FROM `work_statistic`.`ws_hour`;

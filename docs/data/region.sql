INSERT INTO `wc_region_all` (`region_id`, `parent_id`, `name`, `level`) SELECT `province_id`, 1, `province_name`, 'province' FROM `wc_region_provnice`;
INSERT INTO `wc_region_all` (`region_id`, `parent_id`, `name`, `level`) SELECT `city_id`, `province_id`, `city_name`, 'city' FROM `wc_region_city`;
INSERT INTO `wc_region_all` (`region_id`, `parent_id`, `name`, `level`) SELECT `county_id`, `city_id`, `county_name`, 'county' FROM `wc_region_county`;
INSERT INTO `wc_region_all` (`region_id`, `parent_id`, `name`, `level`) SELECT `town_id`, `county_id`, `town_name`, 'town' FROM `wc_region_town`;
INSERT INTO `wc_region_all` (`region_id`, `parent_id`, `name`, `level`) SELECT `village_id`, `town_id`, `village_name`, 'village' FROM `wc_region_village`;

INSERT INTO `wc_region_all_mid1` (`id`, `region_id`, `parent_id`, `name`, `spell`, `name_short`, `spell_short`, `level`, `status`, `status_ext`, `num_acount`) SELECT `id`, `region_id`, `parent_id`, `name`, `spell`, `name_short`, `spell_short`, `level`, `status`, `status_ext`, COUNT(*) FROM `wc_region_all` GROUP BY `spell`;  
INSERT INTO `wc_region_all_mid1` (`id`, `region_id`, `parent_id`, `name`, `spell`, `name_short`, `spell_short`, `level`, `status`, `status_ext`, `num_acount`) SELECT `id`, `region_id`, `parent_id`, `name`, `spell`, `name_short`, `spell_short`, `level`, `status`, `status_ext`, COUNT(*) FROM `wc_region_all` GROUP BY `spell_one`;

UPDATE `wc_region_all_mid1` SET `status_ext` = 1 WHERE `num_acount` = 1;
UPDATE `wc_region_all` AS `r1`, `wc_region_all_mid1` AS `r2` SET `r1`.`status_ext` = `r2`.`status_ext` WHERE `r1`.`id` = `r2`.`id`; 
UPDATE `wc_region_all` SET `spell_one` = `spell` WHERE `status_ext` = 1;
UPDATE `wc_region_all` SET `spell_one` = CONCAT(`spell`, '_', RIGHT(`id`, 3)) WHERE `spell_one` = '' AND `level` NOT IN ('province', 'city');
UPDATE `wc_region_all` SET `spell_one` = CONCAT(`spell`, '_', RIGHT(`id`, 5)) WHERE `status_ext` = 0;


CREATE TABLE `wc_region_city` SELECT * FROM `wc_region_province` WHERE 0;
ALTER TABLE `wc_region_village`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `region_id` (`region_id`),
  ADD KEY `spell` (`spell`),
  ADD KEY `spell_one` (`spell_one`);
ALTER TABLE `wc_region_village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `wc_region_county` SELECT * FROM `wc_region_province` WHERE 0;
CREATE TABLE `wc_region_town` SELECT * FROM `wc_region_province` WHERE 0;
CREATE TABLE `wc_region_village` SELECT * FROM `wc_region_province` WHERE 0;

INSERT INTO `wc_region_province` (`region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`) SELECT `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status` FROM `wc_region_all` WHERE `level` = 'province';  
INSERT INTO `wc_region_city` (`region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`) SELECT `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status` FROM `wc_region_all` WHERE `level` = 'city';  
INSERT INTO `wc_region_county` (`region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`) SELECT `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status` FROM `wc_region_all` WHERE `level` = 'county';  
INSERT INTO `wc_region_town` (`region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`) SELECT `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status` FROM `wc_region_all` WHERE `level` = 'town';  
INSERT INTO `wc_region_village` (`region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`) SELECT `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status` FROM `wc_region_all` WHERE `level` = 'village';  

TRUNCATE `wc_region_mid`;
INSERT INTO `wc_region_mid` (`id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, `num_acount`) SELECT `id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, COUNT(*) FROM `wc_region_town` GROUP BY `spell`;  
UPDATE `wc_region_town` AS `r1`, `wc_region_mid` AS `r2` SET `r1`.`spell_one` = `r2`.`spell` WHERE `r1`.`id` = `r2`.`id`; 
UPDATE `wc_region_town` SET `spell_one` = CONCAT(`spell`, '_', RIGHT(`id`, 1)) WHERE `spell_one` = '';
TRUNCATE `wc_region_mid`;
INSERT INTO `wc_region_mid` (`id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, `num_acount`) SELECT `id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, COUNT(*) FROM `wc_region_town` GROUP BY `spell_one`;
UPDATE `wc_region_mid` SET `status` = 9;
UPDATE `wc_region_town` AS `r1`, `wc_region_mid` AS `r2` SET `r1`.`status` = `r2`.`status` WHERE `r1`.`id` = `r2`.`id`; 
UPDATE `wc_region_town` SET `spell_one` = CONCAT(`spell`, '_', RIGHT(`id`, 2)) WHERE `status` != 9;
UPDATE `wc_region_town` SET `status` = 0;

TRUNCATE `wc_region_mid`;
INSERT INTO `wc_region_mid` (`id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, `num_acount`) SELECT `id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, COUNT(*) FROM `wc_region_village` GROUP BY `spell`;  
UPDATE `wc_region_village` AS `r1`, `wc_region_mid` AS `r2` SET `r1`.`spell_one` = `r2`.`spell` WHERE `r1`.`id` = `r2`.`id`; 
UPDATE `wc_region_village` SET `spell_one` = CONCAT(`spell`, '_', RIGHT(`id`, 1)) WHERE `spell_one` = '';

TRUNCATE `wc_region_mid`;
INSERT INTO `wc_region_mid` (`id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, `num_acount`) SELECT `id`, `region_id`, `parent_id`, `name`, `spell_one`, `spell`, `name_short`, `spell_short`, `level`, `status`, COUNT(*) FROM `wc_region_village` GROUP BY `spell_one`;
UPDATE `wc_region_mid` SET `status` = 9;
UPDATE `wc_region_village` AS `r1`, `wc_region_mid` AS `r2` SET `r1`.`status` = `r2`.`status` WHERE `r1`.`id` = `r2`.`id`; 
UPDATE `wc_region_village` SET `spell_one` = CONCAT(`spell`, '_', RIGHT(`id`, 3)) WHERE `status` != 9;
UPDATE `wc_region_village` SET `status` = 0;


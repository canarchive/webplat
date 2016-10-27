UPDATE `wm_merchant` SET `score` = ROUND(4+RAND(), 1), `num_owner` = FLOOR( 50 + RAND() * (500 - 50)), `num_realcase` = FLOOR( 3 + RAND() * (10 - 3)), `num_working` = FLOOR( 1 + RAND() * (10 - 1)), `praise` = FLOOR( 100 + RAND() * (300 - 100)) WHERE 1
UPDATE `wm_merchant` SET `score` = `score` + 0.4 WHERE `score` < 4.5

INSERT INTO `wp_auth_menu` (`code`, `parent_code`, `name`, `module`, `controller`, `method`, `orderlist`, `islog`, `display`, `extparam`) VALUES
('spread_groupon', '', '团购会', 'spread', '', '', 1, 2, 1, ''),

('spread_groupon_groupon', 'spread_groupon', '基本信息', 'spread', '', '', 0, 0, 2, ''),

('spread_groupon_groupon_add', 'spread_groupon_groupon', '添加', 'spread', 'groupon', 'add', 0, 1, 3, ''),
('spread_groupon_groupon_delete', 'spread_groupon_groupon', '删除', 'spread', 'groupon', 'delete', 0, 1, 4, ''),
('spread_groupon_groupon_update', 'spread_groupon_groupon', '编辑', 'spread', 'groupon', 'update', 0, 1, 4, ''),
('spread_groupon_groupon_view', 'spread_groupon_groupon', '查看', 'spread', 'groupon', 'view', 0, 2, 4, ''),
('spread_groupon_groupon_listinfo', 'spread_groupon_groupon', '团购会列表', 'spread', 'groupon', 'listinfo', 0, 2, 2, ''),

INSERT INTO `wp_auth_menu` (`code`, `parent_code`, `name`, `module`, `controller`, `method`, `orderlist`, `islog`, `display`, `extparam`) VALUES
('passport_user-address_add', 'passport_user', '添加', 'passport', 'user-address', 'add', 0, 1, 3, ''),
('passport_user-address_delete', 'passport_user', '删除', 'passport', 'user-address', 'delete', 0, 1, 4, ''),
('passport_user-address_update', 'passport_user', '编辑', 'passport', 'user-address', 'update', 0, 1, 4, ''),
('passport_user-address_view', 'passport_user', '查看', 'passport', 'user-address', 'view', 0, 2, 4, ''),
('passport_user-address_listinfo', 'passport_user', '用户列表', 'passport', 'user-address', 'listinfo', 0, 2, 2, ''),

/*
Navicat MySQL Data Transfer

Source Server         : 本地开发
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : devgame

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-07-09 18:00:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `p_action`
-- ----------------------------
DROP TABLE IF EXISTS `p_action`;
CREATE TABLE `p_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `logid` int(11) DEFAULT NULL COMMENT '对应日志ID',
  `type` int(2) DEFAULT NULL COMMENT '1浇水 2除草 3除虫 4狗粮',
  `addtime` varchar(255) DEFAULT NULL,
  `state` int(2) DEFAULT '1' COMMENT '0 无效  1有效',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_action
-- ----------------------------
INSERT INTO `p_action` VALUES ('1', '1', '15', '1', '2017-06-10 21:06:01', '1');
INSERT INTO `p_action` VALUES ('2', '1', '34', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('3', '1', '35', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('4', '1', '36', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('5', '1', '37', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('6', '1', '38', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('7', '1', '39', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('8', '1', '40', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('9', '1', '44', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('10', '1', '45', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('11', '1', '46', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('12', '1', '53', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('13', '1', '54', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('14', '1', '55', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('15', '1', '56', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('16', '1', '57', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('17', '1', '58', '1', '1497174431', '1');
INSERT INTO `p_action` VALUES ('18', '1', '34', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('19', '1', '35', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('20', '1', '36', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('21', '1', '37', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('22', '1', '38', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('23', '1', '39', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('24', '1', '40', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('25', '1', '44', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('26', '1', '45', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('27', '1', '46', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('28', '1', '53', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('29', '1', '54', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('30', '1', '55', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('31', '1', '56', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('32', '1', '57', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('33', '1', '58', '1', '2017-06-11 17:48:00', '1');
INSERT INTO `p_action` VALUES ('34', '1', '34', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('35', '1', '35', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('36', '1', '36', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('37', '1', '37', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('38', '1', '38', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('39', '1', '39', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('40', '1', '40', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('41', '1', '44', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('42', '1', '45', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('43', '1', '46', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('44', '1', '53', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('45', '1', '54', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('46', '1', '55', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('47', '1', '56', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('48', '1', '57', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('49', '1', '58', '2', '2017-06-11 17:49:08', '1');
INSERT INTO `p_action` VALUES ('50', '1', '34', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('51', '1', '35', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('52', '1', '36', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('53', '1', '37', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('54', '1', '38', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('55', '1', '39', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('56', '1', '40', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('57', '1', '44', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('58', '1', '45', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('59', '1', '46', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('60', '1', '53', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('61', '1', '54', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('62', '1', '55', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('63', '1', '56', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('64', '1', '57', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('65', '1', '58', '3', '2017-06-11 17:49:58', '1');
INSERT INTO `p_action` VALUES ('66', '9', null, '4', '2017-06-18 10:08:22', '1');
INSERT INTO `p_action` VALUES ('67', '9', null, '4', '2017-06-18 10:08:37', '1');

-- ----------------------------
-- Table structure for `p_article`
-- ----------------------------
DROP TABLE IF EXISTS `p_article`;
CREATE TABLE `p_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `type` int(11) DEFAULT '1' COMMENT '1公告  2公司简介',
  `cont` text,
  `addtime` varchar(128) DEFAULT NULL,
  `addymd` varchar(128) DEFAULT NULL,
  `admin` varchar(64) DEFAULT NULL,
  `num` int(11) DEFAULT '1',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_article
-- ----------------------------
INSERT INTO `p_article` VALUES ('1', 'ada', '2', 'adads232423412', '2017-04-05 23:19:15', '2017-04-05', 'admin', '1');
INSERT INTO `p_article` VALUES ('2', 'asfa', '1', 'asdfasdf', '2017-04-05 23:34:03', '2017-04-05', 'admin', '1');
INSERT INTO `p_article` VALUES ('5', 'asdfadsf', '1', 'sadfasdfasdfa34343', '2017-04-06 21:37:48', '2017-04-06', 'admin', '1');

-- ----------------------------
-- Table structure for `p_gift`
-- ----------------------------
DROP TABLE IF EXISTS `p_gift`;
CREATE TABLE `p_gift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(100) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL COMMENT '礼物个数',
  `type` int(2) DEFAULT '1' COMMENT '1上家  2下家',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_gift
-- ----------------------------
INSERT INTO `p_gift` VALUES ('1', '苹果', '2', '2', '1');
INSERT INTO `p_gift` VALUES ('2', '苹果', '2', '1', '2');
INSERT INTO `p_gift` VALUES ('3', '狗粮', '1', '3', '1');

-- ----------------------------
-- Table structure for `p_incomelog`
-- ----------------------------
DROP TABLE IF EXISTS `p_incomelog`;
CREATE TABLE `p_incomelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) unsigned zerofill DEFAULT NULL COMMENT '1下单购买 2充值 3提现  4出售商品',
  `state` int(11) DEFAULT '1' COMMENT '1收入   2支出 3失败',
  `reson` varchar(255) DEFAULT NULL COMMENT '原因',
  `addymd` varchar(100) DEFAULT NULL,
  `addtime` varchar(100) DEFAULT NULL,
  `orderid` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `income` varchar(64) DEFAULT '0' COMMENT '金额',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_incomelog
-- ----------------------------
INSERT INTO `p_incomelog` VALUES ('1', '00000000001', '1', '每日利息', '2017-03-30', '2017-03-30 13:38:01', '201703311332116165', '1', '6.4');
INSERT INTO `p_incomelog` VALUES ('2', '00000000002', '1', '充值', '2017-04-01', '2017-04-01 13:38:01', null, '1', '10000');
INSERT INTO `p_incomelog` VALUES ('5', '00000000005', '2', '注册下级', '2017-04-01', '2017-04-01 21:27:28', '2', '1', '3000');
INSERT INTO `p_incomelog` VALUES ('6', '00000000001', '1', '注册收入', '2017-04-01', '2017-04-01 21:27:28', '1', '2', '3000');
INSERT INTO `p_incomelog` VALUES ('8', '00000000005', '2', '注册下级', '2017-04-01', '2017-04-01 21:27:28', '3', '2', '800');
INSERT INTO `p_incomelog` VALUES ('9', '00000000001', '1', '注册收入', '2017-04-01', '2017-04-01 21:27:28', '2', '3', '800');
INSERT INTO `p_incomelog` VALUES ('10', '00000000005', '2', '注册下级', '2017-04-01', '2017-04-01 21:27:28', '4', '2', '800');
INSERT INTO `p_incomelog` VALUES ('11', '00000000001', '1', '注册收入', '2017-04-01', '2017-04-01 21:27:28', '2', '4', '800');
INSERT INTO `p_incomelog` VALUES ('12', '00000000005', '2', '注册下级', '2017-04-01', '2017-04-01 21:27:28', '5', '2', '800');
INSERT INTO `p_incomelog` VALUES ('13', '00000000001', '1', '注册收入', '2017-04-01', '2017-04-01 21:27:28', '2', '5', '800');
INSERT INTO `p_incomelog` VALUES ('100', '00000000001', '1', '每日利息', '2017-04-02', '2017-04-02 11:50:12', '0', '1', '90');
INSERT INTO `p_incomelog` VALUES ('101', '00000000001', '1', '一级下线受益', '2017-04-02', '2017-04-02 11:50:12', '0', '1', '8');
INSERT INTO `p_incomelog` VALUES ('102', '00000000001', '1', '二级下线受益', '2017-04-02', '2017-04-02 11:50:12', '0', '1', '6.4');
INSERT INTO `p_incomelog` VALUES ('103', '00000000001', '1', '每日利息', '2017-04-02', '2017-04-02 11:50:12', '0', '2', '36');
INSERT INTO `p_incomelog` VALUES ('104', '00000000001', '1', '每日利息', '2017-04-02', '2017-04-02 11:50:12', '0', '3', '15');
INSERT INTO `p_incomelog` VALUES ('105', '00000000001', '1', '每日利息', '2017-04-02', '2017-04-02 11:50:12', '0', '4', '6.4');
INSERT INTO `p_incomelog` VALUES ('106', '00000000001', '1', '一级下线受益', '2017-04-02', '2017-04-02 11:50:12', '0', '4', '5.6');
INSERT INTO `p_incomelog` VALUES ('107', '00000000001', '1', '每日利息', '2017-04-02', '2017-04-02 11:50:12', '0', '5', '6.4');
INSERT INTO `p_incomelog` VALUES ('108', '00000000002', '1', '充值', '2017-04-02', '2017-04-02 12:22:21', 'admin', '3', '200');
INSERT INTO `p_incomelog` VALUES ('109', '00000000002', '1', '充值', '2017-04-04', '2017-04-04 09:46:30', '1', '1', '200');
INSERT INTO `p_incomelog` VALUES ('110', '00000000002', '0', '充值', '2017-04-04', '2017-04-04 10:14:11', '1', '1', '300');
INSERT INTO `p_incomelog` VALUES ('111', '00000000000', '0', '充值', '2017-04-04', '2017-04-04 10:14:29', '1', '1', '400');
INSERT INTO `p_incomelog` VALUES ('112', '00000000004', '1', '萝卜', '2017-04-04', '2017-04-04 10:51:30', '3', '1', '600');
INSERT INTO `p_incomelog` VALUES ('113', '00000000004', '1', '萝卜', '2017-04-04', '2017-04-04 10:51:31', '1', '1', '700');
INSERT INTO `p_incomelog` VALUES ('114', '00000000003', '3', '支付宝提现', '2017-04-04', '2017-04-04 12:14:18', '18883287644,18883287644', '1', '200');
INSERT INTO `p_incomelog` VALUES ('115', '00000000003', '2', '微信提现', '2017-04-04', '2017-04-04 12:16:01', '18883287644,18883287644', '1', '200');
INSERT INTO `p_incomelog` VALUES ('116', '00000000003', '3', '银行卡提现', '2017-04-04', '2017-04-04 12:23:43', '李海龙,5786258695638565,50028547841261,李海龙1,重庆银行,重庆', '1', '400');
INSERT INTO `p_incomelog` VALUES ('117', '00000000003', '3', '银行卡提现', '2017-04-05', '2017-04-05 11:57:12', '李海龙,5786258695638565,50028547841261,李海龙12,重庆银行,重庆', '1', '250');
INSERT INTO `p_incomelog` VALUES ('118', '00000000003', '3', '银行卡提现', '2017-04-05', '2017-04-05 12:09:26', '18883287644,李海龙,50028547841261,李海龙,工商银行,重庆', '1', '350');
INSERT INTO `p_incomelog` VALUES ('119', '00000000001', '2', '萝卜种子', '2017-06-04', '2017-06-04 13:15:43', '201706041315439737', '6', '3');
INSERT INTO `p_incomelog` VALUES ('120', '00000000001', '2', '木瓜种子', '2017-06-04', '2017-06-04 13:18:19', '201706041318191519', '6', '4');
INSERT INTO `p_incomelog` VALUES ('121', '00000000001', '2', '萝卜种子', '2017-06-04', '2017-06-04 13:38:49', '201706041338494911', '6', '3');
INSERT INTO `p_incomelog` VALUES ('122', '00000000003', '3', '微信提现', '2017-06-04', '2017-06-04 14:10:57', ',18883287644,,lihailonga,,', '1', '1');
INSERT INTO `p_incomelog` VALUES ('123', '00000000003', '3', '支付宝提现', '2017-06-04', '2017-06-04 14:19:57', ',18883287644,,李红,,', '1', '2');
INSERT INTO `p_incomelog` VALUES ('124', '00000000003', '2', '微信提现', '2017-06-04', '2017-06-04 14:20:28', ',18883287645,,李三,,', '1', '5');
INSERT INTO `p_incomelog` VALUES ('125', '00000000003', '0', '支付宝提现', '2017-06-04', '2017-06-04 23:47:52', ',18883287644,,123455,,', '1', '3');
INSERT INTO `p_incomelog` VALUES ('126', '00000000003', '0', '银行卡提现', '2017-06-04', '2017-06-04 23:49:17', ',,50028547841261,李海龙,,', '1', '4');
INSERT INTO `p_incomelog` VALUES ('127', '00000000001', '2', '苹果树种子', '2017-06-08', '2017-06-08 21:04:23', '201706082104236639', '1', '30');
INSERT INTO `p_incomelog` VALUES ('128', '00000000001', '2', '玫瑰花种子', '2017-06-08', '2017-06-08 21:39:41', '201706082139415222', '1', '20');
INSERT INTO `p_incomelog` VALUES ('129', '00000000001', '2', '萝卜种子', '2017-06-08', '2017-06-08 21:39:50', '201706082139502819', '1', '6');
INSERT INTO `p_incomelog` VALUES ('130', '00000000001', '2', '香蕉种子', '2017-06-08', '2017-06-08 21:39:55', '201706082139559034', '1', '12');
INSERT INTO `p_incomelog` VALUES ('131', '00000000001', '2', ' 西红柿种子', '2017-06-08', '2017-06-08 21:40:01', '201706082140016747', '1', '10');
INSERT INTO `p_incomelog` VALUES ('132', '00000000001', '2', '木瓜种子', '2017-06-08', '2017-06-08 21:40:06', '201706082140069919', '1', '2');
INSERT INTO `p_incomelog` VALUES ('133', '00000000001', '2', '苹果树种子', '2017-06-08', '2017-06-08 21:43:28', '201706082143285823', '1', '30');
INSERT INTO `p_incomelog` VALUES ('134', '00000000001', '2', '苹果树种子', '2017-06-08', '2017-06-08 21:43:35', '201706082143355289', '1', '90');
INSERT INTO `p_incomelog` VALUES ('135', '00000000004', '1', '出售商品', '2017-06-08', '2017-06-08 23:00:16', '86', '1', '10');
INSERT INTO `p_incomelog` VALUES ('136', '00000000004', '1', '出售商品', '2017-06-08', '2017-06-08 23:02:04', '86', '1', '10');
INSERT INTO `p_incomelog` VALUES ('137', '00000000004', '1', '出售商品', '2017-06-08', '2017-06-08 23:04:10', '86', '1', '20');
INSERT INTO `p_incomelog` VALUES ('138', '00000000004', '1', '出售商品', '2017-06-08', '2017-06-08 23:06:46', '30', '1', '20');
INSERT INTO `p_incomelog` VALUES ('139', '00000000004', '1', '出售商品', '2017-06-08', '2017-06-08 23:15:41', '31', '1', '30');
INSERT INTO `p_incomelog` VALUES ('140', '00000000004', '1', '出售商品', '2017-06-08', '2017-06-08 23:15:41', '32', '1', '60');
INSERT INTO `p_incomelog` VALUES ('141', '00000000004', '1', '出售商品', '2017-06-09', '2017-06-09 22:00:45', '33', '1', '10');
INSERT INTO `p_incomelog` VALUES ('142', '00000000001', '2', '玫瑰花种子', '2017-06-09', '2017-06-09 22:07:14', '201706092207144435', '1', '20');
INSERT INTO `p_incomelog` VALUES ('143', '00000000001', '2', '苹果树种子', '2017-06-09', '2017-06-09 22:09:15', '201706092209157373', '1', '60');
INSERT INTO `p_incomelog` VALUES ('144', '00000000001', '2', '玫瑰花种子', '2017-06-09', '2017-06-09 22:09:21', '201706092209215958', '1', '20');
INSERT INTO `p_incomelog` VALUES ('145', '00000000001', '2', '萝卜种子', '2017-06-09', '2017-06-09 22:09:29', '201706092209294714', '1', '6');
INSERT INTO `p_incomelog` VALUES ('146', '00000000001', '2', '香蕉种子', '2017-06-09', '2017-06-09 22:09:36', '201706092209366276', '1', '24');
INSERT INTO `p_incomelog` VALUES ('147', '00000000001', '2', ' 西红柿种子', '2017-06-09', '2017-06-09 22:09:43', '201706092209435517', '1', '10');
INSERT INTO `p_incomelog` VALUES ('148', '00000000001', '2', '木瓜种子', '2017-06-09', '2017-06-09 22:09:48', '201706092209488279', '1', '4');
INSERT INTO `p_incomelog` VALUES ('149', '00000000001', '2', '浇水壶', '2017-06-09', '2017-06-09 22:30:41', '201706092230412242', '1', '10');
INSERT INTO `p_incomelog` VALUES ('150', '00000000001', '2', '除草剂', '2017-06-09', '2017-06-09 22:30:57', '201706092230576991', '1', '20');
INSERT INTO `p_incomelog` VALUES ('151', '00000000001', '2', '苹果树种子', '2017-06-09', '2017-06-09 22:39:02', '201706092239023174', '1', '30');
INSERT INTO `p_incomelog` VALUES ('152', '00000000001', '2', '苹果树种子', '2017-06-11', '2017-06-11 11:24:38', '201706111124378113', '1', '30');
INSERT INTO `p_incomelog` VALUES ('153', '00000000001', '2', '萝卜种子', '2017-06-11', '2017-06-11 11:45:29', '201706111145292802', '1', '3');
INSERT INTO `p_incomelog` VALUES ('154', '00000000001', '2', '玫瑰花种子', '2017-06-11', '2017-06-11 11:47:47', '201706111147475120', '1', '10');
INSERT INTO `p_incomelog` VALUES ('155', '00000000001', '2', '萝卜种子', '2017-06-11', '2017-06-11 11:49:09', '201706111149094864', '1', '21');
INSERT INTO `p_incomelog` VALUES ('156', '00000000001', '2', '浇水壶', '2017-06-11', '2017-06-11 16:43:58', '201706111643582461', '1', '10');
INSERT INTO `p_incomelog` VALUES ('157', '00000000001', '2', '浇水壶', '2017-06-11', '2017-06-11 16:44:31', '201706111644318918', '1', '10');
INSERT INTO `p_incomelog` VALUES ('158', '00000000001', '2', 'VIP卡', '2017-06-11', '2017-06-11 17:28:53', '201706111728539117', '1', '10');
INSERT INTO `p_incomelog` VALUES ('159', '00000000001', '2', '杀虫剂', '2017-06-11', '2017-06-11 17:49:30', '201706111749301377', '1', '10');
INSERT INTO `p_incomelog` VALUES ('160', '00000000001', '2', '狗', '2017-06-11', '2017-06-11 20:22:30', '201706112022304054', '1', '6');
INSERT INTO `p_incomelog` VALUES ('161', '00000000001', '2', '狗', '2017-06-11', '2017-06-11 20:22:39', '201706112022396355', '1', '6');
INSERT INTO `p_incomelog` VALUES ('162', '00000000001', '2', '苹果树种子', '2017-06-14', '2017-06-14 20:59:52', '201706142059528950', '9', '30');
INSERT INTO `p_incomelog` VALUES ('163', '00000000001', '2', '玫瑰花种子', '2017-06-14', '2017-06-14 21:00:29', '201706142100293224', '9', '20');
INSERT INTO `p_incomelog` VALUES ('164', '00000000001', '2', '香蕉种子', '2017-06-14', '2017-06-14 21:03:36', '201706142103363104', '9', '12');
INSERT INTO `p_incomelog` VALUES ('165', '00000000001', '2', '玫瑰花种子', '2017-06-14', '2017-06-14 21:10:46', '201706142110467017', '9', '20');
INSERT INTO `p_incomelog` VALUES ('166', '00000000001', '2', '香蕉种子', '2017-06-14', '2017-06-14 21:13:04', '201706142113048154', '9', '36');
INSERT INTO `p_incomelog` VALUES ('167', '00000000001', '2', '木瓜种子', '2017-06-14', '2017-06-14 21:15:39', '201706142115398014', '9', '4');
INSERT INTO `p_incomelog` VALUES ('168', '00000000001', '2', ' 西红柿种子', '2017-06-14', '2017-06-14 21:18:01', '201706142118013416', '9', '30');
INSERT INTO `p_incomelog` VALUES ('169', '00000000001', '2', '杀虫剂', '2017-06-18', '2017-06-18 00:07:47', '201706180007479860', '9', '30');
INSERT INTO `p_incomelog` VALUES ('170', '00000000001', '2', '除草剂', '2017-06-18', '2017-06-18 00:07:56', '201706180007564813', '9', '40');
INSERT INTO `p_incomelog` VALUES ('171', '00000000001', '2', '狗粮', '2017-06-18', '2017-06-18 09:54:49', '201706180954495539', '9', '100');
INSERT INTO `p_incomelog` VALUES ('172', '00000000001', '2', '狗骨头', '2017-06-18', '2017-06-18 09:55:01', '201706180955016895', '9', '50');

-- ----------------------------
-- Table structure for `p_menber`
-- ----------------------------
DROP TABLE IF EXISTS `p_menber`;
CREATE TABLE `p_menber` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `tel` varchar(64) DEFAULT NULL,
  `type` int(4) DEFAULT '1' COMMENT '1普通 2 3 4',
  `chargebag` varchar(50) DEFAULT '0' COMMENT '充值钱包',
  `incomebag` varchar(50) DEFAULT '0' COMMENT '收益钱包 ',
  `friends` text COMMENT '好友列表',
  `fuid` int(11) DEFAULT NULL COMMENT '注册上家',
  `addtime` varchar(100) DEFAULT NULL,
  `addymd` varchar(100) DEFAULT NULL,
  `truename` varchar(100) DEFAULT '上级',
  `carnum` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_menber
-- ----------------------------
INSERT INTO `p_menber` VALUES ('1', '18883287644', '123123', null, '2', '0', '831.40', '2,3,8,9,10,11', '0', null, null, '李海龙', '50028547841261');
INSERT INTO `p_menber` VALUES ('2', '18883287645', '123123', null, '3', '0', '36', null, '0', '2017-04-01 20:38:56', '2017-04-01', null, null);
INSERT INTO `p_menber` VALUES ('3', '18883287646', '123123', null, '2', '0', '15', null, '0', '2017-04-01 21:15:12', '2017-04-01', null, null);
INSERT INTO `p_menber` VALUES ('4', '18883287647', '123123', null, '1', '0', '12', null, '1', '2017-04-01 21:17:12', '2017-04-01', '李海龙', '');
INSERT INTO `p_menber` VALUES ('5', '18883287648', '123123', null, '1', '0', '6.4', null, '4', '2017-04-01 21:27:28', '2017-04-01', null, null);
INSERT INTO `p_menber` VALUES ('6', '18883287640', '123', null, '1', '0', '0.00', '2,3', null, '2017-06-04 09:58:49', '2017-06-04', null, null);
INSERT INTO `p_menber` VALUES ('7', '18883287890', '123', null, '1', '0', '0', null, null, '2017-06-11 19:08:04', '2017-06-11', null, null);
INSERT INTO `p_menber` VALUES ('8', '18883287891', '123', null, '1', '0', '0', '1', null, '2017-06-11 19:09:21', '2017-06-11', null, null);
INSERT INTO `p_menber` VALUES ('9', '18883287666', '123', null, '1', '0', '628.00', '1', null, '2017-06-13 22:45:49', '2017-06-13', null, null);
INSERT INTO `p_menber` VALUES ('10', '', '1', null, '1', '0', '0', '1', null, '2017-06-17 00:29:02', '2017-06-17', '李海龙', '18883287666');
INSERT INTO `p_menber` VALUES ('11', '18883287622', '1', null, '1', '0', '0', '1', null, '2017-06-17 00:37:48', '2017-06-17', '李海龙', '18883287666');

-- ----------------------------
-- Table structure for `p_orderlog`
-- ----------------------------
DROP TABLE IF EXISTS `p_orderlog`;
CREATE TABLE `p_orderlog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL COMMENT '用户id',
  `productid` int(11) NOT NULL,
  `productname` varchar(64) DEFAULT NULL,
  `productmoney` varchar(32) DEFAULT NULL COMMENT '成熟后售卖价格',
  `type` int(11) DEFAULT NULL COMMENT '1.种子 2.道具 3.果实',
  `states` int(11) NOT NULL DEFAULT '0' COMMENT '0待播种 1收益中 2已完成 3已收取 4已售卖',
  `orderid` varchar(128) NOT NULL COMMENT '订单id',
  `addtime` varchar(64) DEFAULT NULL,
  `num` int(5) DEFAULT NULL COMMENT '购买数量  ',
  `prices` varchar(40) DEFAULT NULL COMMENT '购买单价',
  `pic` varchar(200) DEFAULT NULL COMMENT '图片地址',
  `life` varchar(11) DEFAULT NULL COMMENT '能量不足时间 h',
  `land` int(11) DEFAULT '0' COMMENT '该产品在第几块地里   小狗多少天长大',
  `output` varchar(20) DEFAULT '0' COMMENT '当前产量  当前能量',
  `iscao` int(1) DEFAULT '0' COMMENT '0 无草 1草',
  `ischong` int(1) DEFAULT '0' COMMENT '0 无虫 小狗  1 虫 大狗   ',
  `iswater` int(1) DEFAULT '0' COMMENT '0未浇水 1浇水',
  `ischucao` int(1) DEFAULT '0' COMMENT '0未除草 1除草',
  `ischuchong` int(1) DEFAULT '0' COMMENT '0未除虫 1已除虫',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_orderlog
-- ----------------------------
INSERT INTO `p_orderlog` VALUES ('15', '6', '90', '萝卜种子', '6', '3', '1', '1', '2017-06-10 21:06:01', '1', '1', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '15', '40', '0', '1', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('16', '6', '90', '萝卜种子', '6', '3', '1', '201706041315439737', '2017-06-11 11:12:04', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '15', '40', '0', '0', '0', '2', '0');
INSERT INTO `p_orderlog` VALUES ('17', '6', '7', '木瓜种子', '4', '1', '2', '201706041318191519', '2017-06-04 13:18:19', '2', '2', '/register/Public/Uploads/2017-06-03/593213b5630e0.gif', '1', '2', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('18', '6', '4', '萝卜种子', '6', '1', '1', '201706041338494911', '2017-06-04 13:38:49', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', null, '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('22', '1', '2', '苹果树种子', '32', '1', '1', '201706082104236639', '2017-06-08 21:04:23', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('19', '2', '0', '萝卜种子', null, '3', '3', '6', '2017-06-06 22:05:38', null, '0', '/register/Public/Uploads/2017-06-03/593213e813403.gif', null, '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('20', '2', '4', '萝卜', null, '3', '3', '6', '2017-06-06 22:06:51', null, '0', '/register/Public/Uploads/2017-06-03/593213e813403.gif', null, '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('21', '2', '4', '萝卜', '0', '3', '3', '6', '2017-06-06 22:07:56', '0', '0', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('23', '1', '3', '玫瑰花', '15', '3', '3', '201706082139415222', '2017-06-08 21:39:41', '2', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('24', '1', '4', '萝卜', '6', '3', '3', '201706082139502819', '2017-06-08 21:39:50', '2', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('25', '1', '5', '香蕉', '22', '3', '3', '201706082139559034', '2017-06-08 21:39:55', '1', '12', '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('26', '1', '6', ' 西红柿种子', '20', '3', '3', '201706082140016747', '2017-06-08 21:40:01', '1', '10', '/register/Public/Uploads/2017-06-04/59336ba7ad8fd.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('27', '1', '88', '木瓜种子', '4', '3', '3', '201706082140069919', '2017-06-08 21:40:06', '1', '2', '/register/Public/Uploads/2017-06-03/593213b5630e0.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('28', '1', '86', '苹果树种子', '32', '3', '4', '201706082143285823', '2017-06-08 21:43:28', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('29', '1', '86', '苹果树种子', '32', '3', '3', '201706082143355289', '2017-06-08 21:43:35', '3', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('30', '1', '86', '苹果树种子', '32', '3', '3', '201706082143285823', '2017-06-08 21:43:28', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('31', '1', '86', '苹果树种子', '32', '3', '3', '201706082143355289', '2017-06-08 21:43:35', '3', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('32', '1', '86', '苹果树种子', '32', '3', '3', '201706082143285823', '2017-06-08 21:43:28', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('33', '1', '86', '苹果树种子', '32', '3', '3', '201706082143285823', '2017-06-08 21:43:28', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('34', '1', '90', '玫瑰花种子', '15', '3', '1', '201706092207144435', '2017-06-11 11:10:23', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '3', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('35', '1', '90', '苹果树种子', '32', '3', '1', '201706092209157373', '2017-06-11 11:20:05', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '5', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('36', '1', '90', '玫瑰花种子', '15', '3', '1', '201706092209215958', '2017-06-11 11:12:17', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '6', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('37', '1', '90', '萝卜种子', '6', '3', '1', '201706092209294714', '2017-06-11 11:19:17', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '15', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('38', '1', '90', '香蕉种子', '22', '3', '1', '201706092209366276', '2017-06-11 11:20:12', '1', '12', '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '1', '4', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('39', '1', '6', ' 西红柿种子', '20', '3', '1', '201706092209435517', '2017-06-09 22:09:43', '1', '10', '/register/Public/Uploads/2017-06-04/59336ba7ad8fd.gif', '1', '1', '40', '1', '1', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('40', '1', '90', '木瓜种子', '4', '3', '1', '201706092209488279', '2017-06-11 11:24:14', '1', '2', '/register/Public/Uploads/2017-06-03/593213b5630e0.gif', '1', '13', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('41', '1', '81', '浇水壶', '0', '2', '0', '201706092230412242', '2017-06-09 22:30:41', '1', '10', '/register/Public/Uploads/2017-06-04/59336d2d4fbed.png', '356', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('42', '1', '82', '除草剂', '0', '2', '0', '201706092230576991', '2017-06-09 22:30:57', '2', '10', '/register/Public/Uploads/2017-06-04/59336d552e06e.png', '365', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('43', '1', '2', '苹果树种子', '32', '3', '3', '201706092239023174', '2017-06-09 22:39:02', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '2', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('44', '1', '90', '玫瑰花种子', '15', '3', '1', '201706092209215958', '2017-06-11 11:11:18', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '3', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('45', '1', '90', '苹果树种子', '32', '3', '1', '201706092209157373', '2017-06-11 11:12:19', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '8', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('46', '1', '90', '萝卜种子', '6', '3', '1', '201706092209294714', '2017-06-11 11:12:28', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '9', '40', '0', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('52', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 20:22:18', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '2', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('53', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 11:49:40', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '7', '40', '1', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('54', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 11:51:42', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '10', '40', '1', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('55', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 11:53:17', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '11', '40', '1', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('56', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 11:53:19', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '11', '40', '1', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('57', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 11:53:51', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '12', '40', '1', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('58', '1', '90', '萝卜种子', '6', '3', '1', '201706111149094864', '2017-06-11 11:53:54', '1', '3', '/register/Public/Uploads/2017-06-03/593213e813403.gif', '1', '14', '40', '1', '0', '1', '1', '1');
INSERT INTO `p_orderlog` VALUES ('59', '1', '81', '浇水壶', '0', '2', '0', '201706111643582461', '2017-06-11 16:43:58', '1', '10', '/register/Public/Uploads/2017-06-04/59336d2d4fbed.png', '356', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('60', '1', '81', '浇水壶', '0', '2', '0', '201706111644318918', '2017-06-11 16:44:31', '1', '10', '/register/Public/Uploads/2017-06-04/59336d2d4fbed.png', '356', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('61', '1', '85', 'VIP卡', '0', '2', '0', '201706111728539117', '2017-06-11 17:28:53', '2', '10', '/register/Public/Uploads/2017-06-04/59336f529a97a.png', '356', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('62', '1', '83', '杀虫剂', '0', '2', '0', '201706111749301377', '2017-06-11 17:49:30', '1', '10', '/register/Public/Uploads/2017-06-04/59336d7dc50ae.png', '365', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('63', '9', '8', '狗', '9', '2', '0', '201706112022304054', '2017-06-11 20:22:30', '1', '6', '/register/Public/Uploads/2017-06-03/59321585e2f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('64', '9', '93', '狗', '9', '2', '0', '201706112022396355', '2017-06-11 20:22:39', '2', '6', '/register/Public/Uploads/2017-06-03/59321585e2f08.gif', '5', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('65', '1', '90', '玫瑰花种子', '0', '3', '1', '6', '2017-06-14 21:00:52', '1', '0', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '8', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('66', '1', '90', '苹果树种子', '0', '3', '1', '9', '2017-06-13 22:46:40', '1', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '2', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('67', '1', '1', '狗粮', '0', '2', '0', '9', '2017-06-13 22:45:49', '3', '0', '/register/Public/Uploads/2017-06-03/5932132326bd5.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('68', '9', '90', '苹果树种子', '0', '3', '1', '1', '2017-06-13 22:46:47', '1', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '1', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('69', '1', '90', '苹果树种子', '0', '3', '1', '9', '2017-06-13 22:46:31', '1', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '1', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('70', '9', '90', '苹果树种子', '32', '3', '1', '201706142059528950', '2017-06-14 21:00:03', '1', '30', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '3', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('71', '9', '90', '玫瑰花种子', '15', '3', '1', '201706142100293224', '2017-06-14 21:02:54', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '6', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('72', '1', '90', '玫瑰花种子', '0', '3', '1', '6', '2017-06-14 21:00:37', '1', '0', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '10', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('73', '9', '90', '玫瑰花种子', '15', '3', '1', '201706142100293224', '2017-06-14 21:01:01', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '5', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('74', '9', '90', '香蕉种子', '22', '3', '1', '201706142103363104', '2017-06-14 21:04:27', '1', '12', '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '1', '9', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('75', '9', '90', '玫瑰花种子', '15', '3', '1', '201706142110467017', '2017-06-14 21:11:05', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '7', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('76', '9', '90', '玫瑰花种子', '15', '3', '1', '201706142110467017', '2017-06-14 21:10:53', '1', '10', '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '1', '7', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('77', '9', '5', '香蕉种子', '22', '1', '0', '201706142113048154', '2017-06-14 21:13:04', '1', '12', '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('78', '9', '90', '香蕉种子', '22', '3', '1', '201706142113048154', '2017-06-14 21:13:10', '1', '12', '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '1', '8', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('79', '9', '90', '香蕉种子', '22', '3', '1', '201706142113048154', '2017-06-14 21:13:22', '1', '12', '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '1', '8', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('80', '9', '7', '木瓜种子', '4', '1', '0', '201706142115398014', '2017-06-14 21:15:39', '1', '2', '/register/Public/Uploads/2017-06-03/593213b5630e0.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('81', '9', '6', ' 西红柿种子', '20', '1', '0', '201706142118013416', '2017-06-14 21:18:01', '2', '10', '/register/Public/Uploads/2017-06-04/59336ba7ad8fd.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('82', '9', '90', ' 西红柿种子', '20', '3', '1', '201706142118013416', '2017-06-14 21:22:24', '1', '10', '/register/Public/Uploads/2017-06-04/59336ba7ad8fd.gif', '1', '14', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('83', '1', '2', '苹果树种子', '0', '1', '0', '10', '2017-06-17 00:29:02', '2', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('84', '1', '1', '狗粮', '0', '2', '0', '10', '2017-06-17 00:29:02', '3', '0', '/register/Public/Uploads/2017-06-03/5932132326bd5.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('85', '10', '2', '苹果树种子', '0', '1', '0', '1', '2017-06-17 00:29:02', '1', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('86', '1', '2', '苹果树种子', '0', '1', '0', '11', '2017-06-17 00:37:48', '2', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('87', '1', '1', '狗粮', '0', '2', '0', '11', '2017-06-17 00:37:48', '3', '0', '/register/Public/Uploads/2017-06-03/5932132326bd5.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('88', '11', '2', '苹果树种子', '0', '1', '0', '1', '2017-06-17 00:37:48', '1', '0', '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '1', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('89', '9', '0', '狗', '9', '2', '0', '201706112022396355', '2017-06-11 20:22:39', '2', '6', '/register/Public/Uploads/2017-06-03/59321585e2f08.gif', '5', '64', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('90', '9', '8', '狗', '9', '2', '0', '201706112022396355', '2017-06-11 20:22:39', '2', '6', '/register/Public/Uploads/2017-06-03/59321585e2f08.gif', '5', '64', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('91', '9', '8', '狗', '9', '2', '0', '201706112022396355', '2017-06-11 20:22:39', '2', '6', '/register/Public/Uploads/2017-06-03/59321585e2f08.gif', '5', '64', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('92', '9', '83', '杀虫剂', '0', '2', '0', '201706180007479860', '2017-06-18 00:07:47', '3', '10', '/register/Public/Uploads/2017-06-04/59336d7dc50ae.png', '365', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('93', '9', '82', '除草剂', '0', '2', '0', '201706180007564813', '2017-06-18 00:07:56', '4', '10', '/register/Public/Uploads/2017-06-04/59336d552e06e.png', '365', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('94', '9', '1', '狗粮', '0', '2', '4', '201706180954495539', '2017-06-18 09:54:49', '1', '100', '/register/Public/Uploads/2017-06-03/5932132326bd5.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('95', '9', '84', '狗骨头', '0', '2', '0', '201706180955016895', '2017-06-18 09:55:01', '5', '10', '/register/Public/Uploads/2017-06-04/59336ecb29c6e.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('96', '9', '84', '狗骨头', '0', '2', '0', '201706180955016895', '2017-06-18 09:55:01', '4', '10', '/register/Public/Uploads/2017-06-04/59336ecb29c6e.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('97', '9', '84', '狗骨头', '0', '2', '0', '201706180955016895', '2017-06-18 09:55:01', '4', '10', '/register/Public/Uploads/2017-06-04/59336ecb29c6e.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('98', '9', '84', '狗骨头', '0', '2', '0', '201706180955016895', '2017-06-18 09:55:01', '4', '10', '/register/Public/Uploads/2017-06-04/59336ecb29c6e.png', '0', '0', '40', '0', '0', '0', '0', '0');
INSERT INTO `p_orderlog` VALUES ('99', '9', '90', '木瓜种子', '4', '3', '1', '201706142115398014', '2017-06-20 22:26:00', '1', '2', '/register/Public/Uploads/2017-06-03/593213b5630e0.gif', '1', '4', '5', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `p_product`
-- ----------------------------
DROP TABLE IF EXISTS `p_product`;
CREATE TABLE `p_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '产品名',
  `cont` text COMMENT '产品描述',
  `pic` varchar(255) DEFAULT NULL COMMENT '产品图片',
  `price` varchar(15) DEFAULT NULL COMMENT '售卖价格',
  `life` varchar(6) DEFAULT '0' COMMENT '生命周期',
  `type` int(2) DEFAULT NULL COMMENT '1.种子 2.道具3.果实',
  `state` int(3) DEFAULT '1' COMMENT '1上架  2下架',
  `addtime` varchar(100) DEFAULT NULL,
  `salenum` int(11) DEFAULT '0' COMMENT '销售数量',
  `attribute` int(2) DEFAULT NULL COMMENT '产品熟悉 1,动物 2植物',
  `afterprice` varchar(15) DEFAULT '0' COMMENT '成熟后售卖价格',
  `landnum` int(11) DEFAULT '1' COMMENT '一块地播几颗种子',
  `fruits` int(11) DEFAULT NULL COMMENT '每个种子的果子',
  `stealfruits` int(11) DEFAULT '0' COMMENT '好友每次偷取果子',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_product
-- ----------------------------
INSERT INTO `p_product` VALUES ('1', '狗粮', null, '/register/Public/Uploads/2017-06-03/5932132326bd5.png', '100', '0', '2', '1', '2017-06-03 10:10:45', '0', '2', '0', '1', '5', '0');
INSERT INTO `p_product` VALUES ('3', '玫瑰花种子', null, '/register/Public/Uploads/2017-06-03/5932137fb1f21.png', '10', '1', '1', '1', '2017-06-04 10:04:41', '0', '2', '15', '1', '5', '2');
INSERT INTO `p_product` VALUES ('7', '木瓜种子', null, '/register/Public/Uploads/2017-06-03/593213b5630e0.gif', '2', '1', '1', '1', '2017-06-04 11:45:17', '0', '2', '4', '1', '5', '2');
INSERT INTO `p_product` VALUES ('4', '萝卜种子', null, '/register/Public/Uploads/2017-06-03/593213e813403.gif', '3', '1', '1', '1', '2017-06-03 09:54:37', '0', '2', '6', '1', '5', '2');
INSERT INTO `p_product` VALUES ('2', '苹果树种子', null, '/register/Public/Uploads/2017-06-03/59321417c7f08.gif', '30', '1', '1', '1', '2017-06-07 22:10:48', '0', '2', '32', '1', '5', '1');
INSERT INTO `p_product` VALUES ('8', '狗', '狗', '/register/Public/Uploads/2017-06-03/59321585e2f08.gif', '6', '5', '2', '1', '2017-06-03 09:49:02', '0', '1', '9', '1', '0', '0');
INSERT INTO `p_product` VALUES ('5', '香蕉种子', null, '/register/Public/Uploads/2017-06-04/59336b6dde082.gif', '12', '1', '1', '1', '2017-06-04 11:45:09', '0', '2', '22', '1', '5', '2');
INSERT INTO `p_product` VALUES ('6', ' 西红柿种子', null, '/register/Public/Uploads/2017-06-04/59336ba7ad8fd.gif', '10', '1', '1', '1', '2017-06-04 10:08:39', '0', '2', '20', '1', '5', '2');
INSERT INTO `p_product` VALUES ('81', '浇水壶', null, '/register/Public/Uploads/2017-06-04/59336d2d4fbed.png', '10', '356', '2', '1', '2017-06-04 10:15:09', '0', '2', '0', '1', '5', '0');
INSERT INTO `p_product` VALUES ('82', '除草剂', null, '/register/Public/Uploads/2017-06-04/59336d552e06e.png', '10', '365', '2', '1', '2017-06-04 10:15:49', '0', '2', '0', '1', '5', '0');
INSERT INTO `p_product` VALUES ('83', '杀虫剂', null, '/register/Public/Uploads/2017-06-04/59336d7dc50ae.png', '10', '365', '2', '1', '2017-06-04 10:16:29', '0', '2', '0', '1', '5', '0');
INSERT INTO `p_product` VALUES ('84', '狗骨头', null, '/register/Public/Uploads/2017-06-04/59336ecb29c6e.png', '10', '0', '2', '1', '2017-06-04 10:22:03', '0', '2', '0', '1', '0', '0');
INSERT INTO `p_product` VALUES ('85', 'VIP卡', null, '/register/Public/Uploads/2017-06-04/59336f529a97a.png', '10', '356', '2', '1', '2017-06-04 10:24:18', '0', '2', '0', '1', '0', '0');
INSERT INTO `p_product` VALUES ('86', '苹果', null, '/register/Public/Uploads/2017-06-04/5933700398157.png', '10', '365', '3', '1', '2017-06-07 23:09:28', '0', '2', '10', '1', '0', '0');
INSERT INTO `p_product` VALUES ('87', '香蕉', null, '/register/Public/Uploads/2017-06-04/593370406f7b7.png', '10', '10', '3', '1', '2017-06-04 10:28:16', '0', '2', '12', '1', '0', '0');
INSERT INTO `p_product` VALUES ('88', '西红柿', null, '/register/Public/Uploads/2017-06-04/5933707207ba8.png', '10', '12', '3', '1', '2017-06-04 10:29:06', '0', '2', '12', '1', '0', '0');
INSERT INTO `p_product` VALUES ('89', '萝卜', null, '/register/Public/Uploads/2017-06-04/5933709e71ee2.png', '10', '12', '3', '1', '2017-06-04 10:29:50', '0', '2', '12', '1', '0', '0');
INSERT INTO `p_product` VALUES ('90', '玫瑰花', null, '/register/Public/Uploads/2017-06-04/5933711324845.png', '12', '12', '3', '1', '2017-06-04 10:31:47', '0', '2', '12', '1', '0', '0');
INSERT INTO `p_product` VALUES ('91', '木瓜', null, '/register/Public/Uploads/2017-06-11/593cb28d189f9.png', '0', '1', '3', '1', '2017-06-11 11:03:19', '0', '2', '7', null, '4', '1');
INSERT INTO `p_product` VALUES ('92', '红包', null, '/register/Public/Uploads/2017-06-18/59467b4b9283f.png', '20', '0', '5', '1', '2017-06-18 21:08:27', '0', '2', '0', null, '1', '0');

-- ----------------------------
-- Table structure for `p_user`
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT '登录名',
  `openid` varchar(255) DEFAULT NULL COMMENT '微信ID',
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信昵称',
  `address` varchar(255) DEFAULT NULL COMMENT '微信地址',
  `userface` varchar(255) DEFAULT NULL COMMENT '维信头像',
  `addtime` varchar(255) DEFAULT NULL COMMENT '注册时间',
  `manager` int(2) DEFAULT '0' COMMENT '0 普通 1管理员 2 超级管理员',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_user
-- ----------------------------
INSERT INTO `p_user` VALUES ('1', '123asd', 'admin', null, null, null, null, '2017-03-10 13:56:27', '2');
INSERT INTO `p_user` VALUES ('2', '123asd', 'admin2', null, null, null, null, '2017-03-10 13:56:27', '1');

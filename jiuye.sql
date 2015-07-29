/*
Navicat MySQL Data Transfer

Source Server         : 1113
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : jiuye

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-02-06 15:37:42
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `hd_ajob`
-- ----------------------------
DROP TABLE IF EXISTS `hd_ajob`;
CREATE TABLE `hd_ajob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `time` int(20) NOT NULL,
  `over` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_ajob
-- ----------------------------
INSERT INTO `hd_ajob` VALUES ('1', '1', '1', '1');
INSERT INTO `hd_ajob` VALUES ('2', '2', '2', '2');
INSERT INTO `hd_ajob` VALUES ('4', '4', '1418456646', '1418054400');

-- ----------------------------
-- Table structure for `hd_ameeting`
-- ----------------------------
DROP TABLE IF EXISTS `hd_ameeting`;
CREATE TABLE `hd_ameeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `time` int(20) NOT NULL,
  `atime` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_ameeting
-- ----------------------------
INSERT INTO `hd_ameeting` VALUES ('3', '4', '1418459496', '1418140800');
INSERT INTO `hd_ameeting` VALUES ('2', '1', '33', '33');

-- ----------------------------
-- Table structure for `hd_aweb`
-- ----------------------------
DROP TABLE IF EXISTS `hd_aweb`;
CREATE TABLE `hd_aweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `worker` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_aweb
-- ----------------------------
INSERT INTO `hd_aweb` VALUES ('2', '4', '啦啦啦', '2', '15510191223', '123@qq.com', '1418465011');

-- ----------------------------
-- Table structure for `hd_buser`
-- ----------------------------
DROP TABLE IF EXISTS `hd_buser`;
CREATE TABLE `hd_buser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_buser
-- ----------------------------
INSERT INTO `hd_buser` VALUES ('1', 'admin', 'admin', '0.0.0.0', '1417922822');
INSERT INTO `hd_buser` VALUES ('2', 'zhl', 'zhl123', '0.0.0.0', '1417870589');

-- ----------------------------
-- Table structure for `hd_join`
-- ----------------------------
DROP TABLE IF EXISTS `hd_join`;
CREATE TABLE `hd_join` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `people1` varchar(10) NOT NULL,
  `people2` varchar(10) DEFAULT NULL,
  `phone1` varchar(10) NOT NULL,
  `phone2` varchar(10) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `file` text NOT NULL,
  `timeid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_join
-- ----------------------------
INSERT INTO `hd_join` VALUES ('2', '1', '1', null, '1', null, '1', '1', '1');
INSERT INTO `hd_join` VALUES ('5', '4', '32123', '123123', '12312', '123123', '123@qq.com', '548d541f8280e.png', '3');

-- ----------------------------
-- Table structure for `hd_new`
-- ----------------------------
DROP TABLE IF EXISTS `hd_new`;
CREATE TABLE `hd_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `date` int(11) NOT NULL,
  `stype` int(11) NOT NULL,
  `ornot` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_new
-- ----------------------------
INSERT INTO `hd_new` VALUES ('1', 'lalala', '1419955200', '0', '0');
INSERT INTO `hd_new` VALUES ('2', '特大型招聘会', '1417708800', '1', '1');
INSERT INTO `hd_new` VALUES ('3', '这是测试', '1417622400', '2', '1');
INSERT INTO `hd_new` VALUES ('4', 'zhl', '1418227200', '1', '0');

-- ----------------------------
-- Table structure for `hd_return`
-- ----------------------------
DROP TABLE IF EXISTS `hd_return`;
CREATE TABLE `hd_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `time` int(10) NOT NULL,
  `ornot` int(11) NOT NULL,
  `getnum` int(11) NOT NULL,
  `neednum` int(11) NOT NULL,
  `suggest` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_return
-- ----------------------------
INSERT INTO `hd_return` VALUES ('1', '4', '1418552065', '0', '3', '2', '123123123123');
INSERT INTO `hd_return` VALUES ('2', '4', '1418552178', '0', '5', '2', '1');

-- ----------------------------
-- Table structure for `hd_user`
-- ----------------------------
DROP TABLE IF EXISTS `hd_user`;
CREATE TABLE `hd_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cnature` varchar(10) NOT NULL,
  `cindustry` varchar(20) NOT NULL,
  `chead` varchar(10) NOT NULL,
  `cphone` varchar(20) DEFAULT NULL,
  `caddress` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `remark` int(11) NOT NULL,
  `img` text,
  `class` int(11) NOT NULL,
  `time` int(20) DEFAULT NULL,
  `ip` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_user
-- ----------------------------
INSERT INTO `hd_user` VALUES ('1', 'xxx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xx', 'xxx', '5', 'xx', '3', '1419149751', '0.0.0.0');
INSERT INTO `hd_user` VALUES ('2', '222222222', '222222222', '22222222', '222222', '22222222', '22', '2', '2', '2222222@1111.com', '1', '1111', '1', '1', '');
INSERT INTO `hd_user` VALUES ('3', '223', '333', '33', '33', '3', '3', '3', '3', '3', '3', '3', '3', '1', '');
INSERT INTO `hd_user` VALUES ('4', 'q@qq.com', '123', '123', '中型', '1111', '111', '11111', '123', '123@qq.com', '5', '548d65c36e9a3.png', '1', '1418552184', '0.0.0.0');
INSERT INTO `hd_user` VALUES ('5', '123ww@qq.coo', '123', '123', '小型', '123', '123', '123', '123', '123@qq.com', '1', '548d0ff85b97b.png', '0', null, '');

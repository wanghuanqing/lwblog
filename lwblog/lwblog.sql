/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50716
Source Host           : localhost:3306
Source Database       : lwblog

Target Server Type    : MYSQL
Target Server Version : 50716
File Encoding         : 65001

Date: 2017-12-27 15:29:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `info_aboutauthor`
-- ----------------------------
DROP TABLE IF EXISTS `info_aboutauthor`;
CREATE TABLE `info_aboutauthor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `infomation` varchar(32) DEFAULT NULL COMMENT '个人信息',
  `introduction` varchar(32) DEFAULT NULL COMMENT '个人介绍',
  `author` varchar(32) DEFAULT NULL COMMENT '作者',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_aboutauthor
-- ----------------------------
INSERT INTO `info_aboutauthor` VALUES ('1', '登记费浦东大范甘迪豆腐干豆腐', '自强不息，厚德载物', 'admin');

-- ----------------------------
-- Table structure for `info_aboutblog`
-- ----------------------------
DROP TABLE IF EXISTS `info_aboutblog`;
CREATE TABLE `info_aboutblog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(32) DEFAULT NULL COMMENT '时间',
  `title` varchar(32) DEFAULT NULL COMMENT '标题',
  `content` varchar(255) DEFAULT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_aboutblog
-- ----------------------------
INSERT INTO `info_aboutblog` VALUES ('11', '2017-11-20 13:45:02', '第二个', '&lt;p&gt;都是GV是&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0001.gif&quot;/&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0003.gif&quot;/&gt;&lt;/p&gt;');
INSERT INTO `info_aboutblog` VALUES ('2', '2017-11-20 13:39:47', '第一个版本', '&lt;p&gt;这是第一个版本&lt;/p&gt;');
INSERT INTO `info_aboutblog` VALUES ('12', '2017-11-20 14:30:55', '第三个', '&lt;p&gt;第三个&lt;/p&gt;');
INSERT INTO `info_aboutblog` VALUES ('17', '2017-12-14 22:09:35', '地方都是', '&lt;p&gt;大师傅士大夫&lt;/p&gt;');
INSERT INTO `info_aboutblog` VALUES ('16', '2017-12-05 20:11:35', '脚后跟v和国际化', '&lt;p&gt;记号记号复古摇滚&lt;br/&gt;&lt;/p&gt;');
INSERT INTO `info_aboutblog` VALUES ('14', '2017-12-06 19:38:00', '的法国人的换个地方花粉管花粉管', '&lt;p&gt;豆腐干豆腐干和地方各地方&lt;/p&gt;');

-- ----------------------------
-- Table structure for `info_ad`
-- ----------------------------
DROP TABLE IF EXISTS `info_ad`;
CREATE TABLE `info_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL COMMENT '公告内容',
  `ad_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_ad
-- ----------------------------
INSERT INTO `info_ad` VALUES ('1', '你好啊，大家！哈哈哈哈哈哈哈哈', '');
INSERT INTO `info_ad` VALUES ('3', '都分配格局哦二极管虹儿', '');
INSERT INTO `info_ad` VALUES ('4', '风格和辅导员和肉汤羊肉汤羊肉汤羊肉汤', '');
INSERT INTO `info_ad` VALUES ('5', '如果放到银行股份和肉体和肉体', '');

-- ----------------------------
-- Table structure for `info_admin`
-- ----------------------------
DROP TABLE IF EXISTS `info_admin`;
CREATE TABLE `info_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(64) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_admin
-- ----------------------------
INSERT INTO `info_admin` VALUES ('1', '老王', '123456');
INSERT INTO `info_admin` VALUES ('3', 'admin', '123456');

-- ----------------------------
-- Table structure for `info_blog`
-- ----------------------------
DROP TABLE IF EXISTS `info_blog`;
CREATE TABLE `info_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `uid` varchar(32) DEFAULT NULL COMMENT '用户id',
  `title` varchar(32) NOT NULL COMMENT '标题',
  `author` varchar(64) DEFAULT NULL COMMENT '发布者',
  `Rtime` varchar(255) DEFAULT NULL COMMENT '发布时间',
  `content` text NOT NULL COMMENT '内容',
  `type` varchar(255) DEFAULT NULL COMMENT '0发布中 1已截止',
  `desc` text NOT NULL COMMENT '简介',
  `looknum` int(11) DEFAULT '0',
  `photo` varchar(255) NOT NULL,
  `commentnum` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_blog
-- ----------------------------
INSERT INTO `info_blog` VALUES ('1', '1', '地方豆腐干豆腐干豆腐干', '5555', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda发的广泛地&lt;/p&gt;&lt;p&gt;法规的非官方的655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171124/15114890299955.png&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;white-space: normal;&quot;&gt;sadffsda发的广泛地&lt;/p&gt;&lt;p style=&quot;white-space: normal;&quot;&gt;法规的非官方的65536655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536655366553665536&lt;/p&gt;&lt;p style=&quot;white-space: normal;&quot;&gt;sadffsda发的广泛地&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '细语微言', '个人三等功地方', '11', './upload2017-12-06/5a27f08d45e96.jpg', '2');
INSERT INTO `info_blog` VALUES ('3', '1', '覆盖', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '后端崛起', '的非官方大哥的非官方大哥发的', '12', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('46', '1', 'yu', 'admin', '2017-11-15 00:00:00', '&lt;p&gt;u&lt;/p&gt;', '细语微言', '规范的提高我让他人', '14', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('9', '1', '固定', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;&lt;hr/&gt;&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0001.gif&quot;/&gt;&lt;/p&gt;', '胡思乱想', '梵蒂冈和辅导和规范和丰富的', '2', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('45', '1', '儿童歌让他个人', 'admin', '2017-11-15 00:00:00', '&lt;p&gt;hhh&lt;/p&gt;', '前端入坑', '热供热也让也让', '17', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('15', '1', '覆盖哈哈哈', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '后端崛起', '&lt;p&gt;yth&lt;/p&gt;', '2', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('16', '1', '方法的华国锋的横幅的', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '细语微言', '发的广泛地后台人员投入和分公司在', '19', './upload2017-12-06/5a27f08d45e96.jpg', '2');
INSERT INTO `info_blog` VALUES ('17', '1', '就', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '胡思乱想', '&lt;p&gt;开户行&lt;/p&gt;', '11', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('19', '1', '地方规定符合规范的', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '后端崛起', '梵蒂冈的方法的', '11', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('20', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '前端入坑', '', '102', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('62', '3', '让他给很多人', 'admin', '2017-12-05 00:00:00', '&lt;p&gt;儿童噶尔丹他噶地方过热打个地方&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171205/1512461020857.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '房打工的人分数挺高的输入法', '238', './upload2017-12-06/5a27f08d45e96.jpg', '7');
INSERT INTO `info_blog` VALUES ('25', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '后端崛起', '', '12', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('26', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '前端入坑', '', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('28', '1', '地方和地方官员贪腐用人同人图图如图', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda梵蒂冈地方官地方&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171208/15127323429644.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '成功v的风格和土豆和荣誉和肉体和法规和', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('29', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '细语微言', '&lt;p&gt;惊天是一个好日子&lt;/p&gt;', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('30', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;', '细语微言', '&lt;p&gt;你哦hi哦哈空间看了你就看不见&lt;/p&gt;', '4', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('31', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsd&lt;/p&gt;&lt;p&gt;a&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113383469002.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '&lt;p&gt;返回法国恢复&lt;/p&gt;', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('32', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113383765306.jpg&quot;/&gt;sadffsda&lt;/p&gt;', '胡思乱想', '&lt;p&gt;他认识一个人提供的风格的风格的身体&lt;/p&gt;', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('33', '1', '88888888', '11', '2017-11-08 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113384032725.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '&lt;p&gt;埃尔文他个人提供好看就好&lt;/p&gt;', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('35', '1', '水电费水电费等', '11', '2017-11-10 00:00:00', '&lt;p&gt;地方郭德纲的股份大概&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113386934119.jpg&quot;/&gt;&lt;/p&gt;', '前端入坑', '&lt;p&gt;而非是范德萨发&lt;/p&gt;', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('36', '1', '日日日', 'admin', '2017-11-10 00:00:00', '&lt;p&gt;sadffsda&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113387185891.jpg&quot;/&gt;&lt;/p&gt;', '前端入坑', '&lt;p&gt;而发的身份的&lt;/p&gt;', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('37', '1', '9', 'admin', '2017-11-10 00:00:00', '&lt;p&gt;sadffsda&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113384714178.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '&lt;p&gt;听人说过覆盖凤凰股份&lt;/p&gt;', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('38', '1', '法国恢复规划', 'admin', '2017-11-13 00:00:00', '&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/1511338491778.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '&lt;p&gt;房间号南方国家规范&lt;/p&gt;', '10', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('39', '1', '股份法规和结果', 'admin', '2017-11-13 00:00:00', '&lt;p&gt;55大概&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0014.gif&quot;/&gt;&lt;span class=&quot;mathquill-embedded-latex&quot; style=&quot;width: 25px; height: 43px;&quot;&gt;\\frac{ }{ }&lt;/span&gt;&lt;/p&gt;&lt;hr/&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '后端崛起', '&lt;p&gt;人大的风格已发到&lt;/p&gt;', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('40', '1', '贵航股份', 'admin', '2017-11-15 00:00:00', '&lt;p&gt;d&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/1511338667338.jpg&quot;/&gt;&lt;/p&gt;', '后端崛起', '&lt;p&gt;和规范和返回法国&lt;/p&gt;', '11', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('41', '1', 'dddd', 'admin', '2017-11-15 00:00:00', '&lt;p&gt;ddddd&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0001.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113384529623.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '&lt;p&gt;让她恢复恢复恢复&lt;/p&gt;', '11', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('47', '1', 'retre', 'admin', '2017-11-16 00:00:00', '&lt;p&gt;erter&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0013.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113384338036.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '&lt;p&gt;他会突然后台人员突然&lt;/p&gt;', '9', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('49', '1', '东方闪电规范的合格返回符合符合规范和规范和规范和法国', 'admin', '2017-11-20 00:00:00', '&lt;p&gt;的说法都是&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0001.gif&quot;/&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171122/15113327384229.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '&lt;p&gt;嗯嗯嗯嗯嗯嗯和国家规划局规划局规划感觉感觉很干净或公积金斧头和任何法规和法国恢复个从vbcvbvcbcvbcbcvbvcbvcbcvbcv&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0016.gif&quot;/&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0018.gif&quot;/&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0032.gif&quot;/&gt;&lt;/p&gt;', '21', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('58', '3', 'dfdsf', 'admin', '2017-11-28 00:00:00', '&lt;p&gt;gdfg&lt;/p&gt;', '后端崛起', 'gdfg', '9', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('57', null, '后肌肤还是', 'admin', '2017-11-28 00:00:00', '&lt;p&gt;二个如果&lt;/p&gt;', '前端入坑', '繁荣的风格让他个人', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('59', null, '而独特的人', 'admin', '2017-12-04 00:00:00', '&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0014.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171204/15123838056730.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '大幅提高电热管电热锅', '2', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('60', '3', 'dfkgnj ', 'admin', '2017-12-04 00:00:00', '&lt;p&gt;的如果对方发动&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171204/15123838936148.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '风格士大夫敢死队', '4', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('61', '3', '上的人粉色', 'admin', '2017-12-04 00:00:00', '&lt;p&gt;的福田东风&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171204/15123854033479.jpg&quot;/&gt;&lt;/p&gt;', '前端入坑', '尔特人的肉体的是', '16', './upload2017-12-06/5a27f08d45e96.jpg', '1');
INSERT INTO `info_blog` VALUES ('63', '3', '高房价换个房间', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;让他遇见的好帖让于今日台风都还&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0001.gif&quot;/&gt;&lt;span style=&quot;background-color: rgb(251, 213, 181);&quot;&gt;&lt;span style=&quot;background-color: rgb(251, 213, 181);&quot;&gt;&lt;span style=&quot;background-color: rgb(251, 213, 181);&quot;&gt;&lt;span style=&quot;background-color: rgb(251, 213, 181);&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;http://undefined&quot; target=&quot;_self&quot; title=&quot;f发过节费&quot;&gt;www.baidu.com&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;hr/&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125636025483.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;div style=&quot;color: rgb(197, 200, 198); background-color: rgb(30, 30, 30); font-family: Consolas, &amp;quot;Courier New&amp;quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;&quot;&gt;&lt;div&gt;&lt;span style=&quot;color: #6089b4;&quot;&gt;&amp;lt;script&amp;gt;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #ce6700;&quot;&gt;$&lt;/span&gt;(&lt;span style=&quot;color: #9872a2;&quot;&gt;function&lt;/span&gt;() {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9a9b99;&quot;&gt;//alert($_SESSION[&amp;#39;uid&amp;#39;]);&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #ce6700;&quot;&gt;$&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;#btn&amp;#39;&lt;/span&gt;).&lt;span style=&quot;color: #9872a2;&quot;&gt;click&lt;/span&gt;(&lt;span style=&quot;color: #9872a2;&quot;&gt;function&lt;/span&gt;() {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9872a2;&quot;&gt;var&lt;/span&gt; &lt;span style=&quot;color: #6089b4;&quot;&gt;title&lt;/span&gt; &lt;span style=&quot;color: #676867;&quot;&gt;=&lt;/span&gt; &lt;span style=&quot;color: #ce6700;&quot;&gt;$&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;#title&amp;#39;&lt;/span&gt;).&lt;span style=&quot;color: #ce6700;&quot;&gt;val&lt;/span&gt;();&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9872a2;&quot;&gt;var&lt;/span&gt; &lt;span style=&quot;color: #6089b4;&quot;&gt;desc&lt;/span&gt; &lt;span style=&quot;color: #676867;&quot;&gt;=&lt;/span&gt; &lt;span style=&quot;color: #ce6700;&quot;&gt;$&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;#desc&amp;#39;&lt;/span&gt;).&lt;span style=&quot;color: #ce6700;&quot;&gt;val&lt;/span&gt;();&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9872a2;&quot;&gt;var&lt;/span&gt; &lt;span style=&quot;color: #6089b4;&quot;&gt;content&lt;/span&gt; &lt;span style=&quot;color: #676867;&quot;&gt;=&lt;/span&gt; &lt;span style=&quot;color: #6089b4;&quot;&gt;UM&lt;/span&gt;.&lt;span style=&quot;color: #ce6700;&quot;&gt;getEditor&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;content&amp;#39;&lt;/span&gt;).&lt;span style=&quot;color: #ce6700;&quot;&gt;getContent&lt;/span&gt;();&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9872a2;&quot;&gt;var&lt;/span&gt; &lt;span style=&quot;color: #6089b4;&quot;&gt;type&lt;/span&gt; &lt;span style=&quot;color: #676867;&quot;&gt;=&lt;/span&gt; &lt;span style=&quot;color: #ce6700;&quot;&gt;$&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;quot;select[id=&amp;#39;type&amp;#39;]&amp;quot;&lt;/span&gt;).&lt;span style=&quot;color: #ce6700;&quot;&gt;val&lt;/span&gt;();&lt;/div&gt;&lt;br/&gt;&lt;div&gt;&lt;span style=&quot;color: #9a9b99;&quot;&gt;// alert(title + content);&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #6089b4;&quot;&gt;$&lt;/span&gt;.&lt;span style=&quot;color: #ce6700;&quot;&gt;ajax&lt;/span&gt;({&lt;/div&gt;&lt;div&gt;url: &lt;span style=&quot;color: #ce6700;&quot;&gt;$&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;#form&amp;#39;&lt;/span&gt;).&lt;span style=&quot;color: #ce6700;&quot;&gt;attr&lt;/span&gt;(&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;action&amp;#39;&lt;/span&gt;),&lt;/div&gt;&lt;div&gt;type: &lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;post&amp;#39;&lt;/span&gt;,&lt;/div&gt;&lt;div&gt;dataType: &lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;json&amp;#39;&lt;/span&gt;,&lt;/div&gt;&lt;div&gt;data: {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;title&amp;#39;&lt;/span&gt;: &lt;span style=&quot;color: #6089b4;&quot;&gt;title&lt;/span&gt;,&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;content&amp;#39;&lt;/span&gt;: &lt;span style=&quot;color: #6089b4;&quot;&gt;content&lt;/span&gt;,&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;desc&amp;#39;&lt;/span&gt;: &lt;span style=&quot;color: #6089b4;&quot;&gt;desc&lt;/span&gt;,&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;type&amp;#39;&lt;/span&gt;: &lt;span style=&quot;color: #6089b4;&quot;&gt;type&lt;/span&gt;&lt;/div&gt;&lt;div&gt;},&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #ce6700;&quot;&gt;success&lt;/span&gt;: &lt;span style=&quot;color: #9872a2;&quot;&gt;function&lt;/span&gt;(&lt;span style=&quot;color: #6089b4;&quot;&gt;data&lt;/span&gt;) {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #9872a2;&quot;&gt;if&lt;/span&gt; (&lt;span style=&quot;color: #6089b4;&quot;&gt;data&lt;/span&gt;.&lt;span style=&quot;color: #c7444a;&quot;&gt;code&lt;/span&gt; &lt;span style=&quot;color: #676867;&quot;&gt;==&lt;/span&gt; &lt;span style=&quot;color: #6089b4;&quot;&gt;200&lt;/span&gt;) {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #ce6700;&quot;&gt;alert&lt;/span&gt;(&lt;span style=&quot;color: #6089b4;&quot;&gt;data&lt;/span&gt;.&lt;span style=&quot;color: #9872a2;&quot;&gt;msg&lt;/span&gt;);&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #6089b4;&quot;&gt;location&lt;/span&gt; &lt;span style=&quot;color: #676867;&quot;&gt;=&lt;/span&gt; &lt;span style=&quot;color: #9aa83a;&quot;&gt;&amp;#39;bloglist.html&amp;#39;&lt;/span&gt;;&lt;/div&gt;&lt;div&gt;} &lt;span style=&quot;color: #9872a2;&quot;&gt;else&lt;/span&gt; {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #ce6700;&quot;&gt;alert&lt;/span&gt;(&lt;span style=&quot;color: #6089b4;&quot;&gt;data&lt;/span&gt;.&lt;span style=&quot;color: #9872a2;&quot;&gt;msg&lt;/span&gt;);&lt;/div&gt;&lt;div&gt;}&lt;/div&gt;&lt;div&gt;},&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #ce6700;&quot;&gt;error&lt;/span&gt;: &lt;span style=&quot;color: #9872a2;&quot;&gt;function&lt;/span&gt;(&lt;span style=&quot;color: #6089b4;&quot;&gt;data&lt;/span&gt;) {&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #c7444a;&quot;&gt;console&lt;/span&gt;.&lt;span style=&quot;color: #9872a2;&quot;&gt;log&lt;/span&gt;(&lt;span style=&quot;color: #6089b4;&quot;&gt;data&lt;/span&gt;);&lt;/div&gt;&lt;div&gt;}&lt;/div&gt;&lt;div&gt;})&lt;/div&gt;&lt;div&gt;})&lt;/div&gt;&lt;br/&gt;&lt;div&gt;})&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;color: #6089b4;&quot;&gt;&amp;lt;&lt;/span&gt;&lt;span style=&quot;color: #6089b4;&quot;&gt;/script&amp;gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '胡思乱想', '如果返回天宇集团与环境', '3', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('64', '3', '广汇股份', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;改好发给&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0003.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125650084427.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '他也很反感和规范', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('65', '3', '广汇股份', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;改好发给&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0003.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125650084427.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '他也很反感和规范', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('66', '3', '过好几个', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;规范化风格化&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125650491983.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '规范化风格化', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('67', '3', '过好几个', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;规范化风格化&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125650491983.jpg&quot;/&gt;&lt;/p&gt;', '胡思乱想', '规范化风格化', '1', './upload2017-12-06/5a27f08d45e96.jpg', '0');
INSERT INTO `info_blog` VALUES ('68', '3', '梵蒂冈反对', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;梵蒂冈地方官&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0002.gif&quot;/&gt;&lt;/p&gt;', '前端入坑', '豆腐干地方', '7', './upload2017-12-06/5a27f08d45e96.jpg', '1');
INSERT INTO `info_blog` VALUES ('69', '3', '大佛屁股决定佛教个', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;豆腐干豆腐干地方&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125679622632.jpg&quot;/&gt;&lt;/p&gt;', null, '梵蒂冈梵蒂冈地方官好发的', '2', './upload2017-12-06/5a27f49da4ac0.jpg', '0');
INSERT INTO `info_blog` VALUES ('70', '3', '的如果对她更好的人头', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;官方的给人打工的乳房&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125680243179.jpg&quot;/&gt;&lt;/p&gt;', '前端入坑', '人打工的人更好的推广', '1', './upload2017-12-06/5a27f4da04c9f.jpg', '0');
INSERT INTO `info_blog` VALUES ('71', '3', '如果对方会发光的', 'admin', '2017-12-06 00:00:00', '&lt;p&gt;人体宴人头和法规和提供任何&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171206/15125682591081.jpg&quot;/&gt;&lt;/p&gt;', '细语微言', '让他用画图然后让他和肉体和如同疯狗', '1', './upload2017-12-06/5a27f5c60ccbe.jpg', '0');
INSERT INTO `info_blog` VALUES ('72', '3', '地方很多风格化法国天天和法国', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;二锅头惹他一个rat个人&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0004.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171207/15126258063276.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '后端崛起', '风格的发挥团队也很热符合规定法规和夫人', '6', './upload2017-12-07/5a28d65fc41eb.jpg', '0');
INSERT INTO `info_blog` VALUES ('73', '3', '大概v不是的 x\'b\'v\'d\'f\'x\'g\'d\'f', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;东方红太阳和&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '细语微言', 'hfdhnfghfgdryhrt打法会让他对方', '3', './upload2017-12-07/5a28d6cc93cc2.jpg', '0');
INSERT INTO `info_blog` VALUES ('74', '3', '的发货隔天发货', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;&lt;strong&gt;&lt;em&gt;&lt;span style=&quot;text-decoration:underline;&quot;&gt;的人发给&lt;/span&gt;&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color:#ff0000&quot;&gt;东方红东方红&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color:rgb(255,0,0)&quot;&gt;&lt;/span&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171207/15126266847214.jpg&quot;/&gt;&lt;/p&gt;', '前端入坑', '二人让人太尴尬的', '8', './upload2017-12-07/5a28d7afde0de.jpg', '0');
INSERT INTO `info_blog` VALUES ('75', '3', 'f银行和健康', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171207/15126265046872.jpg&quot;/&gt;&lt;/p&gt;', '后端崛起', '的风格和人体有人', '9', './upload2017-12-07/5a28d974dd1ea.jpg', '0');
INSERT INTO `info_blog` VALUES ('76', '3', '的该死的鬼地方', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;的风格的人发给&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '后端崛起', '有人太多但是犯得上发噶水水水水水水水水', '11', './upload2017-12-07/5a28da2a742cc.jpg', '0');
INSERT INTO `info_blog` VALUES ('77', '3', 'u就故意犯规有', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;大范甘迪&lt;br/&gt;&lt;/p&gt;', '后端崛起', '挺好听的发挥', '6', './upload2017-12-07/5a28dc439b436.jpg', '0');
INSERT INTO `info_blog` VALUES ('78', '3', '可如何替换为哦她豆腐干豆腐干', 'admin', '2017-12-07 00:00:00', '&lt;p&gt;大锅饭大概豆腐干豆腐干豆腐干豆腐干地方&lt;br/&gt;&lt;/p&gt;', '后端崛起', '尔特人个人观点发个图为u可惜嗯不会ii你空间公司的发挥i无哦问富翁哦是豆腐干山豆根', '5', './upload2017-12-07/5a28df225da75.jpg', '0');
INSERT INTO `info_blog` VALUES ('79', '3', '人体今夜热帖热一个好附件是踏入江湖日丰田', 'admin', '2017-12-07 00:00:00', '二条规定法规的肥肉也让&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0024.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171207/15126282504908.jpg&quot;/&gt;t&lt;/p&gt;', '后端崛起', '个dry色惹人讨厌如今经过v部分而已投入放过机会很多风格', '17', './upload2017-12-07/5a28e025ba2c3.jpg', '2');
INSERT INTO `info_blog` VALUES ('80', '3', '跟鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼鬼', 'admin', '2017-12-08 00:00:00', '&lt;p&gt;的风格的任何人&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0015.gif&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171208/15127171044500.jpg&quot;/&gt;&lt;/p&gt;', '后端崛起', '你不id是即可激活快速地回味看破我二位吧释迦佛我的美女都饿很费劲开始的你付款呢武赫来看美女口号i和ihoof妇女基本就非要费用贵哦看评价哦i和i哦ip ok拍【 哦加哦评价可怕加哦评价00000000000000000000000000000000000000', '12', './upload2017-12-08/5a2a3b3378b82.jpg', '0');
INSERT INTO `info_blog` VALUES ('81', '3', '大师傅士大夫敢死队公共热点', 'admin', '2017-12-08 19:53:50', '&lt;p&gt;的个人人嘎然突然恒等式&lt;img src=&quot;http://localhost/blog2/Public/umedit/php/upload/20171208/15127340252804.jpg&quot;/&gt;&lt;/p&gt;', '后端崛起', '士大夫似的个人各人个', '42', './upload2017-12-08/5a2a7d4e82eb6.jpg', '0');
INSERT INTO `info_blog` VALUES ('82', null, '看来届时提及根深蒂固咯嘛', 'admin', '2017-12-09 16:38:37', '&lt;p&gt;&lt;span style=&quot;color:#ddd9c3&quot;&gt;豆腐干豆腐干地方&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;color:#001000&quot;&gt;豆腐干豆腐干&lt;/span&gt;&lt;br/&gt;&lt;/p&gt;', '后端崛起', '的是法国大概豆腐干豆腐干地方', '50', './upload2017-12-09/5a2ba10d2b6a0.jpg', '0');
INSERT INTO `info_blog` VALUES ('83', null, '的防火规范飓风过后绝对伏特加恢复鬼画符', '老王', '2017-12-09 16:44:59', '&lt;p&gt;地方个人对个人的&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0013.gif&quot;/&gt;&lt;/p&gt;', '前端入坑', '符合风格化风格化的耸人听闻认为人生巅峰，谋划', '160', './upload2017-12-09/5a2ba28b32748.jpg', '3');

-- ----------------------------
-- Table structure for `info_comment`
-- ----------------------------
DROP TABLE IF EXISTS `info_comment`;
CREATE TABLE `info_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL COMMENT '评论内容',
  `uid` int(11) NOT NULL,
  `addtime` varchar(255) NOT NULL COMMENT '添加时间',
  `bid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_comment
-- ----------------------------
INSERT INTO `info_comment` VALUES ('1', '热一个人头给对方', '1', '2017-12-06 16:48:38', '62');
INSERT INTO `info_comment` VALUES ('2', '惹她个人的', '1', '2017-12-06 17:06:11', '62');
INSERT INTO `info_comment` VALUES ('3', '风格化法国', '1', '2017-12-06 17:07:35', '1');
INSERT INTO `info_comment` VALUES ('4', '风格恢复', '1', '2017-12-06 17:07:55', '1');
INSERT INTO `info_comment` VALUES ('5', '梵梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官梵蒂冈地方官蒂冈地方官', '1', '2017-12-06 17:10:07', '62');
INSERT INTO `info_comment` VALUES ('6', 'fghfghfg', '15', '2017-12-06 17:48:20', '62');
INSERT INTO `info_comment` VALUES ('7', '广泛大概大概豆腐干', '15', '2017-12-06 19:20:23', '62');
INSERT INTO `info_comment` VALUES ('8', '风格豆腐干', '15', '2017-12-06 19:21:52', '62');
INSERT INTO `info_comment` VALUES ('9', '更多', '15', '2017-12-06 19:22:38', '62');
INSERT INTO `info_comment` VALUES ('10', '嘀咕嘀咕嘀咕', '15', '2017-12-06 19:22:55', '61');
INSERT INTO `info_comment` VALUES ('11', '刚好符合符号仿佛', '15', '2017-12-06 19:24:18', '16');
INSERT INTO `info_comment` VALUES ('12', '符合规范回复', '15', '2017-12-06 19:25:28', '16');
INSERT INTO `info_comment` VALUES ('13', '海沸河翻', '15', '2017-12-06 19:26:39', '46');
INSERT INTO `info_comment` VALUES ('14', 'ghgf', '15', '2017-12-06 21:35:19', '68');
INSERT INTO `info_comment` VALUES ('15', '这事能的啥啊', '14', '2017-12-07 14:48:06', '79');
INSERT INTO `info_comment` VALUES ('16', 'cvbhcghnbc', '14', '2017-12-07 14:57:21', '79');
INSERT INTO `info_comment` VALUES ('17', '555', '15', '2017-12-13 15:45:54', '83');
INSERT INTO `info_comment` VALUES ('18', '54\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n515', '15', '2017-12-13 15:46:13', '83');
INSERT INTO `info_comment` VALUES ('19', '5665453', '15', '2017-12-13 16:09:39', '83');

-- ----------------------------
-- Table structure for `info_log`
-- ----------------------------
DROP TABLE IF EXISTS `info_log`;
CREATE TABLE `info_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(32) NOT NULL COMMENT '时间',
  `content` varchar(255) NOT NULL COMMENT '日志内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_log
-- ----------------------------
INSERT INTO `info_log` VALUES ('20', '2017-12-21 20:12:18', '&lt;p&gt;梵蒂冈地方官发&lt;br/&gt;&lt;/p&gt;');

-- ----------------------------
-- Table structure for `info_message`
-- ----------------------------
DROP TABLE IF EXISTS `info_message`;
CREATE TABLE `info_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `addtime` varchar(32) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_message
-- ----------------------------
INSERT INTO `info_message` VALUES ('13', '豆腐干地方提供一定发', '2', '2017-12-04 18:14:30');
INSERT INTO `info_message` VALUES ('10', 'erfefds', '1', '2017-12-04 17:01:42');
INSERT INTO `info_message` VALUES ('11', '一天游', '1', '2017-12-04 17:27:22');
INSERT INTO `info_message` VALUES ('12', 'ghjfg', '2', '2017-12-04 17:27:54');
INSERT INTO `info_message` VALUES ('14', '是豆腐干士大夫似的', '1', '2017-12-04 18:27:19');
INSERT INTO `info_message` VALUES ('15', '实打实', '3', '2017-12-04 18:27:56');
INSERT INTO `info_message` VALUES ('16', '而非输入法的', '3', '2017-12-04 18:28:33');
INSERT INTO `info_message` VALUES ('17', '好棒哦！！！！！防火防盗官方', '15', '2017-12-04 19:15:03');
INSERT INTO `info_message` VALUES ('18', 'dfgdfgdf发个合同费用分摊', '1', '2017-12-04 22:15:50');
INSERT INTO `info_message` VALUES ('19', '客户规划大幅改进和个人', '1', '2017-12-06 16:10:08');
INSERT INTO `info_message` VALUES ('20', '规划开发规划fig和fig和', '15', '2017-12-06 19:15:22');
INSERT INTO `info_message` VALUES ('21', '', '15', '2017-12-06 19:15:29');
INSERT INTO `info_message` VALUES ('22', '', '15', '2017-12-06 19:16:57');
INSERT INTO `info_message` VALUES ('23', '更换后盖', '15', '2017-12-06 19:18:23');
INSERT INTO `info_message` VALUES ('24', '额的风格独特个地方', '15', '2017-12-06 19:25:52');
INSERT INTO `info_message` VALUES ('25', '太阳花太阳花', '3', '2017-12-09 20:27:20');

-- ----------------------------
-- Table structure for `info_share`
-- ----------------------------
DROP TABLE IF EXISTS `info_share`;
CREATE TABLE `info_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_title` varchar(255) DEFAULT NULL COMMENT '分享标题',
  `s_desc` varchar(255) DEFAULT NULL COMMENT '分享描述',
  `photo` varchar(255) NOT NULL COMMENT '图片',
  `s_link` varchar(255) DEFAULT NULL COMMENT '分享链接',
  `s_time` varchar(255) DEFAULT NULL COMMENT '添加时间',
  `s_hot` int(11) DEFAULT '0' COMMENT '热度',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_share
-- ----------------------------
INSERT INTO `info_share` VALUES ('15', '日寇的结果反馈的飞机', '风格化风格化法国', './upload2017-12-05/5a26a0772093b.jpg', 'www.baidu.com', '2017-12-05 21:34:53', '0');
INSERT INTO `info_share` VALUES ('16', '让他和法国', '豆腐干豆腐干', './upload2017-12-05/5a26a0c647284.jpg', 'www.baidu.com', '2017-12-05 21:36:06', '0');
INSERT INTO `info_share` VALUES ('18', '实地看过你说大概', '豆腐干恢复工具人thea人', './upload2017-12-06/5a27e281bbba3.jpg', 'www.baidu.com', '2017-12-06 20:28:49', '0');
INSERT INTO `info_share` VALUES ('19', '所带给对方是个', 'i哦好i和i和i', './upload2017-12-06/5a27eb516731c.jpg', 'www.baidu.com', '2017-12-06 21:13:13', '0');
INSERT INTO `info_share` VALUES ('20', '风格化法国', '他和规范化', './upload2017-12-06/5a27f0569a5bb.jpg', 'www.baidu.com', '2017-12-13 14:02:07', '0');
INSERT INTO `info_share` VALUES ('21', '让他和如图如图如图与', '的发言人涂鸦如图推荐体育体育', './upload2017-12-08/5a2a77ded365e.jpg', 'www.neets.cc', '2017-12-08 20:42:33', '0');

-- ----------------------------
-- Table structure for `info_user`
-- ----------------------------
DROP TABLE IF EXISTS `info_user`;
CREATE TABLE `info_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL COMMENT '图片',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of info_user
-- ----------------------------
INSERT INTO `info_user` VALUES ('1', 'wang', '123456', './upload2017-12-09/5a2ba2bac21ab.jpg', '111111');
INSERT INTO `info_user` VALUES ('2', 'lwblog', 'lwblog', './upload2017-12-04/5a24ee3a4538d.jpg', '');
INSERT INTO `info_user` VALUES ('4', '88888', '88888', './upload2017-12-04/5a24ee3a4538d.jpg', '');
INSERT INTO `info_user` VALUES ('5', '00000', '00000', './upload2017-12-04/5a24ee3a4538d.jpg', '');
INSERT INTO `info_user` VALUES ('6', '00000', '000', './upload2017-12-04/5a24ee3a4538d.jpg', '');
INSERT INTO `info_user` VALUES ('8', '22222', '2222', './upload2017-12-04/5a24ee3a4538d.jpg', '');
INSERT INTO `info_user` VALUES ('9', '22222', '2222', './upload2017-12-04/5a24ee3a4538d.jpg', '');
INSERT INTO `info_user` VALUES ('24', '56767', '2354', './upload/touxiang.jpg', '34556');
INSERT INTO `info_user` VALUES ('26', 'rfgd', '123456', './upload/touxiang.jpg', '123');
INSERT INTO `info_user` VALUES ('20', '123', '123', './upload/touxiang.jpg', '123');
INSERT INTO `info_user` VALUES ('22', '66', '66', './upload/touxiang.jpg', '66');
INSERT INTO `info_user` VALUES ('23', '6666', '66', './upload/touxiang.jpg', '6');
INSERT INTO `info_user` VALUES ('14', 'demo123', 'demo123', './upload/touxiang.jpg', '1426095072@qq.com');
INSERT INTO `info_user` VALUES ('15', 'demo', 'demo', './upload/touxiang.jpg', '1426095888@qq.com');
INSERT INTO `info_user` VALUES ('16', '天赋流觞', '19960301qw', './upload/touxiang.jpg', '1426095072@qq.com');
INSERT INTO `info_user` VALUES ('25', '4444', '123456', './upload/touxiang.jpg', '44');
INSERT INTO `info_user` VALUES ('21', '333', '333', './upload/touxiang.jpg', '333');

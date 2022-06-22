-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020-11-23 21:34:09
-- 服务器版本: 5.6.44-log
-- PHP 版本: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hfghfg5675gf_hua`
--

-- --------------------------------------------------------

--
-- 表的结构 `zzdh_apply`
--

CREATE TABLE IF NOT EXISTS `zzdh_apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `sortname` text NOT NULL,
  `url` text NOT NULL,
  `introduce` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `zzdh_apply`
--

INSERT INTO `zzdh_apply` (`id`, `name`, `img`, `sortname`, `url`, `introduce`) VALUES
(9, 'erwerw', '/assets/images/default_ico.png', '目录导航', 'https://www.16eter3.com', 'werwer'),
(11, '买链帮手', '/assets/images/default_ico.png', '其他网站', 'http://www.link114.cn', '买链帮手');

-- --------------------------------------------------------

--
-- 表的结构 `zzdh_config`
--

CREATE TABLE IF NOT EXISTS `zzdh_config` (
  `name` varchar(255) NOT NULL,
  `main` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `zzdh_config`
--

INSERT INTO `zzdh_config` (`name`, `main`) VALUES
('admin_user', 'admin'),
('admin_pwd', 'qqqqqq'),
('qq', '1308484422'),
('email', '1308484422@qq.com'),
('name', '站长导航网'),
('title', '站长导航网'),
('keywords', '站长导航网'),
('description', '站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网站长导航网'),
('icp', '沪ICP备20081888号'),
('time', '2020-10-23'),
('api', 'https://blinky.nemui.org/shot/xlarge?'),
('info', ''),
('submit', '修改');

-- --------------------------------------------------------

--
-- 表的结构 `zzdh_list`
--

CREATE TABLE IF NOT EXISTS `zzdh_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `sortname` text NOT NULL,
  `url` text NOT NULL,
  `alias` text NOT NULL,
  `introduce` text NOT NULL,
  `time` text NOT NULL,
  `view` int(20) NOT NULL,
  `love` text NOT NULL,
  `tui` int(2) NOT NULL DEFAULT '0',
  `dj` int(2) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `zzdh_list`
--

INSERT INTO `zzdh_list` (`id`, `lid`, `name`, `img`, `sortname`, `url`, `alias`, `introduce`, `time`, `view`, `love`, `tui`, `dj`) VALUES
(1, 1, '网易', 'https://www.163.com/favicon.ico', '社会生活', 'https://www.163.com', '', '网易是中国领先的互联网技术公司，为用户提供免费邮箱、游戏、搜索引擎服务，开设新闻、娱乐、体育等30多个内容频道，及博客、视频、论坛等互动交流，网聚人的力量。', '2020-10-23', 48, '', 1, 5),
(2, 2, '九州网址', '/assets/images/favicon.ico', '目录导航', 'http://www.9zwz.com', '', '九州网址,实用的中文网站导航与百科问答知识分享。为您提供好用的网站导航、实用的网站收录、详细的网站介绍及网站点评参考，九州网址关怀您的网络生活,让您上网更方便!', '2020-10-24', 39, '', 1, 5),
(3, 3, '搜狐', 'https://statics.itc.cn/web/static/images/pic/sohu-logo/favicon.ico', '社会生活', 'https://www.sohu.com', '', '搜狐网为用户提供24小时不间断的最新资讯，及搜索、邮件等网络服务。内容包括全球热点事件、突发新闻、时事评论、热播影视剧、体育赛事、行业动态、生活服务信息，以及论坛、博客、微博、我的搜狐等互动空间。', '2020-10-23', 7, '', 1, 5),
(4, 4, '新浪', 'https://www.sina.com.cn/favicon.ico', '社会生活', 'https://www.sina.com.cn', '', '新浪网为全球用户24小时提供全面及时的中文资讯，内容覆盖国内外突发新闻事件、体坛赛事、娱乐时尚、产业资讯、实用信息等，设有新闻、体育、娱乐、财经、科技、房产、汽车等30多个内容频道，同时开设博客、视频、论坛等自由互动交流空间。', '2020-11-23', 4, '', 1, 5),
(5, 5, '好一站目录', 'https://www.a1hyz.com/favicon.ico', '目录导航', 'https://www.a1hyz.com/', '', '好一站目录为您提供网站分类目录索引及网址大全库的建立，旨在为用户提供高效便捷的网址存储和查询服务，同时提供最全最的优秀名站导航。', '2020-10-24', 8, '', 1, 5),
(6, 6, '百度', 'https://www.baidu.com/favicon.ico', '社会生活', 'https://www.baidu.com', '', '全球最大的中文搜索引擎、致力于让网民更便捷地获取信息，找到所求。百度超过千亿的中文网页数据库，可以瞬间找到相关的搜索结果。', '2020-11-23', 4, '', 1, 5),
(7, 7, '腾讯', 'https://www.qq.com/favicon.ico', '社会生活', 'https://www.qq.com', '', '腾讯网从2003年创立至今，已经成为集新闻信息，区域垂直生活服务、社会化媒体资讯和产品为一体的互联网媒体平台。腾讯网下设新闻、科技、财经、娱乐、体育、汽车、时尚等多个频道，充分满足用户对不同类型资讯的需求。同时专注不同领域内容，打造精品栏目，并顺应技术发展趋势，推出网络直播等创新形式，改变了用户获取资讯的方式和习惯。', '2020-10-23', 3, '', 1, 5),
(8, 8, '百万站', 'http://www.baiwanzhan.com/favicon.ico', '目录导航', 'http://www.baiwanzhan.com', '', '百万站-百万优秀网站的大本营,深受百万站长喜爱与支持的网站收录与提交入口！百万站官网汇聚百万精品网站，与您分享百万精彩网站知识。我们深信：每一个优秀网站的背后都有一个值得我们解读的故事。', '2020-10-23', 6, '', 1, 5),
(9, 9, '淘宝网', 'https://www.taobao.com/favicon.ico', '社会生活', 'https://www.taobao.com', '', '淘宝网 - 亚洲较大的网上交易平台，提供各类服饰、美容、家居、数码、话费/点卡充值… 数亿优质商品，同时提供担保交易(先收货后付款)等安全交易保障服务，并由商家提供退货承诺、破损补寄等消费者保障服务，让你安心享受网上购物乐趣！', '2020-10-23', 5, '', 1, 5),
(10, 10, '京东', '/assets/images/default_ico.png', '社会生活', 'https://www.jd.com', '', '京东JD.COM-专业的综合网上购物商城,销售家电、数码通讯、电脑、家居百货、服装服饰、母婴、图书、食品等数万个品牌优质商品.便捷、诚信的服务，为您提供愉悦的网上购物体验!', '2020-10-25', 3, '', 1, 5),
(11, 11, '卢松松博客', 'https://lusongsong.com/favicon.ico', '博客社区', 'https://lusongsong.com', '', '松松网（卢松松博客）从2009年创立至今，已经成为国内知名的垂直网站之一。我们一直致力于提供前沿的网络推广知识，为草根站长与创业者提供全面的网络推广、网络营销、网站优化、创业故事等文章。', '2020-10-24', 7, '', 1, 5),
(12, 12, '中国建设银行', 'http://www.ccb.com/favicon.ico', '投资理财', 'http://www.ccb.com', '', '中国建设银行，在全球范围内为台湾、香港、美国、澳大利亚等国家或地区提供全面金融服务，主要经营公司银行业务、个人银行业务和资金业务，包括居民储蓄存款、信贷资金贷款、住房类贷款、外汇、信用卡，以及投资理财等多种业务。', '2020-10-23', 3, '', 1, 5),
(13, 13, '中国银行', 'https://www.boc.cn/favicon.ico', '投资理财', 'https://www.boc.cn', '', '中国银行是中国国际化和多元化程度最高的银行，在中国内地及五十多个国家和地区为客户提供全面的金融服务。主要经营商业银行业务：公司金融、个人金融和金融市场业务，并通过附属机构开展投资银行、保险、直接投资、投资管理、基金管理和飞机租赁业务。', '2020-11-23', 3, '', 0, 5),
(14, 14, '腾讯视频', 'https://v.qq.com/favicon.ico', '影音网站', 'https://v.qq.com', '', '腾讯视频致力于打造中国领先的在线视频媒体平台，以丰富的内容、极致的观看体验、便捷的登录方式、24小时多平台无缝应用体验以及快捷分享的产品特性，主要满足用户在线观看视频的需求。', '2020-11-23', 22, '', 1, 5),
(15, 15, '重庆分类目录网', '/assets/images/default_ico.png', '目录导航', 'https://www.023dir.com', '', '重庆分类目录网站是免费收录各行业优秀的网站！提供网站分类信息检索、整理分类排序、按行业分类或关键词搜索查询；同时也是网站推广、网站排名、发布外链及提高网站权重等的分类目录平台。', '2020-10-25', 15, '', 0, 5),
(16, 1, '腾讯云', 'https://cloud.tencent.com/favicon.ico', 'IDC网站', 'https://cloud.tencent.com', '', '腾讯云为数百万的企业和开发者提供安全稳定的云计算服务，涵盖云服务器、云数据库、云存储、视频与CDN、域名注册等全方位云服务和各行业解决方案。', '2020-11-23', 2, '', 1, 5),
(17, 3, '阿里云', 'https://www.aliyun.com/favicon.ico', 'IDC网站', 'https://www.aliyun.com', '', '阿里云——阿里巴巴集团旗下公司，是全球领先的云计算及人工智能科技公司。提供免费试用、云服务器、云数据库、云安全、云企业应用等云计算服务，以及大数据、人工智能服务、精准定制基于场景的行业解决方案。免费备案，7x24小时售后支持，助企业无忧上云。', '2020-11-23', 0, '', 1, 5),
(18, 1, '爱站网', 'https://www.aizhan.com/favicon.ico', '其他网站', 'https://www.aizhan.com', '', '爱站网站长工具提供网站收录查询和站长查询以及百度权重值查询等多个站长工具，免费查询各种工具，包括有关键词排名查询，百度收录查询等。', '2020-11-23', 1, '', 1, 4),
(19, 1, '北京大学', 'https://www.pku.edu.cn/favicon.ico', '社会教育', 'https://www.pku.edu.cn', '', '北京大学（Peking University），简称“北大”，是中华人民共和国教育部直属的全国重点大学，位列“双一流”、“211工程”、“985工程”，入选“学位授权自主审核单位”、“基础学科拔尖学生培养试验计划”、“基础学科招生改革试点”、“高等学校创新能力提升计划”、“高等学校学科创新引智计划”，为九校联盟、松联盟、中国大学校长联谊会、京港大学联盟、亚洲大学联盟、东亚研究型大学协会、国际研究型大学联盟、环太平洋大学联盟、21世纪学术联盟、东亚四大学论坛、国际公立大学论坛、中俄综合性大学联盟成员。', '2020-11-23', 0, '', 0, 5),
(20, 1, '贵州茅台集团', '/assets/images/default_ico.png', '行业机构', 'https://www.china-moutai.com', '', '茅台集团以贵州茅台酒股份有限公司为核心企业，涉足产业包括白酒、保健酒、葡萄酒、金融、文化旅游、教育、酒店、房地产及白酒上下游等。主导产品贵州茅台酒历史悠久、源远流长，具有深厚的文化内涵，1915 年荣获巴拿马万国博览会金奖，与法国科涅克白兰地、英国苏格兰威士忌一起并称“世界三大（蒸馏）名酒”，是我国大曲酱香型白酒的鼻祖和典型代表，是绿色食品、有机食品、地理标志产品，其酿制技艺入选国家首批非物质文化遗产代表作名录，是一张香飘世界的“国家名片”。', '2020-10-25', 1, '', 0, 0),
(21, 2, '0430网站库', '/assets/images/default_ico.png', '目录导航', 'http://www.0430.com', '', '0430网站库(0430.com)免费收录与分享各类正规网站。网站内容覆盖全球多个国家与地区，包含站长、设计、美食、旅游、文化、音乐、移动互联网等类别的优秀网站资源。', '2020-11-23', 7, '', 1, 5);

-- --------------------------------------------------------

--
-- 表的结构 `zzdh_nav`
--

CREATE TABLE IF NOT EXISTS `zzdh_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL,
  `icon` text NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zzdh_nav`
--

INSERT INTO `zzdh_nav` (`id`, `nid`, `icon`, `name`, `url`) VALUES
(1, 1, 'fa-home', '导航首页', './'),
(2, 2, 'fa-plus-square', '申请收录', 'apply.html'),
(3, 3, 'fa-info-circle', '关于本站', 'about.html');

-- --------------------------------------------------------

--
-- 表的结构 `zzdh_notice`
--

CREATE TABLE IF NOT EXISTS `zzdh_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zzdh_notice`
--

INSERT INTO `zzdh_notice` (`id`, `content`) VALUES
(1, '本站为大家收录精选的导航网站，指引大家愉快上网，希望大家喜欢！如有不懂不会问题的话请加QQ群：248078808 交流获取帮助');

-- --------------------------------------------------------

--
-- 表的结构 `zzdh_sort`
--

CREATE TABLE IF NOT EXISTS `zzdh_sort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `icon` text NOT NULL,
  `sortname` text NOT NULL,
  `alias` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `zzdh_sort`
--

INSERT INTO `zzdh_sort` (`id`, `sid`, `icon`, `sortname`, `alias`) VALUES
(1, 1, 'fa-paper-plane', '目录导航', ''),
(2, 2, 'fa-file-text', '博客社区', ''),
(3, 3, 'fa-cubes', '社会生活', ''),
(4, 4, 'fa-youtube-play', '影音网站', ''),
(5, 5, 'fa-cloud', 'IDC网站', ''),
(6, 6, 'fa-line-chart ', '行业机构', ''),
(7, 7, 'fa-graduation-cap', '社会教育', ''),
(8, 8, 'fa-jpy', '投资理财', ''),
(9, 9, 'fa-th-large', '其他网站', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

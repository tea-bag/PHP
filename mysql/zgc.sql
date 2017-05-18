DROP DATABASE IF EXISTS zgc;
CREATE DATABASE zgc;
USE zgc;

-- 管理员账号
DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(20) NOT NULL,
  password varchar(20) NOT NULL,
  email varchar(30) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

LOCK TABLES admin WRITE;
TRUNCATE TABLE admin;
INSERT INTO admin VALUES (NULL,'ljx','123456','729925437@qq.com');
INSERT INTO admin VALUES (NULL,'zhangsan','123456','123456@qq.com');
UNLOCK TABLES;

-- 街区新闻
DROP TABLE IF EXISTS xinwen;
CREATE TABLE xinwen (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(40) NOT NULL,
  img varchar(20) NOT NULL,
  content text NOT NULL,
  createtime timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

LOCK TABLES xinwen WRITE;
TRUNCATE TABLE xinwen;
INSERT INTO xinwen VALUES (NULL,'海淀区区长于军调研双创服务中心','58eb5009307d5.jpg','4月10日，北京市海淀区委副书记、区长于军到海淀区综合服务中心调研，重点调研了综合服务中心与中关村创业大街联合共建的双创服务中心（创新创业会客厅），并对服务中心的下一步工作重点做了重要指示。',now());
INSERT INTO xinwen VALUES (NULL,'北京海淀：创新迈向新高度','14917858191650.jpg','北京市中心延伸到城市西北角的地铁4号线，在三环与四环间，沿着一条并不算长的街道穿行而过，散落着人民大学、海淀黄庄、中关村三个站点。这里就是中关村的发源地——中关村大街。以这条街为起点，枝枝蔓蔓的路网向四面八方铺展开去，构成中关村海淀园的骨架。',now());
INSERT INTO xinwen VALUES (NULL,'中关村创业大街受邀参加中挪商业峰会','58e75b98cd84a.jpg','4月7日,2017中国挪威商业峰会在北京举行。挪威首相Erna Solberg，全国政协副主席、全国工商联主席王钦敏，阿里巴巴集团执行主席马云等中挪两国政、商、学界代表共聚一堂，探讨中挪两国在绿色能源、科技创新等领域的合作机遇。',now());
INSERT INTO xinwen VALUES (NULL,'法国电信运营商Orange与创业大街洽谈全球合作','58e5f68a9ae90.jpg','4月6日，中关村创业大街迎来国际大企业——法国电信运营商Orange公司，双方就全球战略合作进行了洽谈。',now());
INSERT INTO xinwen VALUES (NULL,'中关村创业大街携手大企业亮相Slush大会','58df469e2f720.jpg','Slush起源于北欧芬兰怀有创业梦想的年轻人中，是一个富有奇幻色彩非盈利的全球性科技创业活动。迄今为止，已经成功举办了9个年头，从年轻人的创业梦变成了欧洲最具国际影响力的创投平台。',now());
INSERT INTO xinwen VALUES (NULL,'中关村故事会客厅启动仪式在创业大街举行','58db840d6f41f.jpg','3月29日，中关村故事会客厅启动仪式在中关村创业大街黑马学院举行，此次活动由海淀区委宣传部和北京人民广播电台共同主办。',now());
INSERT INTO xinwen VALUES (NULL,'今天是个好日子，我们搬家了！','58d758d1c2128.jpg','为适应队伍发展壮大需要，中关村创业大街运营公司今天搬家了，新址在中关村创业大街6号楼6层，欢迎来访！',now());
UNLOCK TABLES;

-- 入住机构
DROP TABLE IF EXISTS jigou;
CREATE TABLE jigou (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(40) NOT NULL,
  img varchar(20) NOT NULL,
  content text NOT NULL,
  createtime timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES jigou WRITE;
TRUNCATE TABLE jigou;
INSERT INTO jigou VALUES (NULL,'创业邦','55adb1f0922cf.jpg','最懂创业者，离资本最近',now());
INSERT INTO jigou VALUES (NULL,'拓荒族','55b18f271faf0.gif','集办公、营销、孵化功能三位一体的企业发展生态圈',now());
INSERT INTO jigou VALUES (NULL,'洋葱投','55bb29cd76b19.gif','洋葱投致力于为创业者打造一个全方位、宽领域、多元化的创投服务平台。',now());
INSERT INTO jigou VALUES (NULL,'可可豆创新孵化平台','568cd5343f525.gif','可可豆创新孵化平台隶属于洛可可创新设计集团',now());
INSERT INTO jigou VALUES (NULL,'中科金','56b2ab8db9bea.jpg','为科技企业提供多元化、多层次、全方位的金融服务。',now());
INSERT INTO jigou VALUES (NULL,'硬派空间','56f35bf25b14c.jpg','硬派空间位于中关村创业大街，由创业大街运营管理公司海置科创创办',now());
INSERT INTO jigou VALUES (NULL,'车库咖啡','5382d949c32e6.gif','成立于2011年4月，是中关村创业大街上最早的一批创业主题咖啡厅之一',now());
INSERT INTO jigou VALUES (NULL,'3W咖啡','5382d939c6df0.gif','互联网主题馆，旗下包含3W咖啡馆、3W创新传媒、3W孵化器、3W基金、拉勾招聘',now());
INSERT INTO jigou VALUES (NULL,'Binggo咖啡','5382d8f746dae.gif','一家以咖啡和空间为载体，利用群智，跨界创新的创新型孵化器',now());
INSERT INTO jigou VALUES (NULL,'36氪','5382d8e974cd9.gif','国内极具影响力的创服平台。旗下拥有科技新媒体36氪、氪空间、36氪+',now());
INSERT INTO jigou VALUES (NULL,'创业黑马','5763b380549c3.jpg','国内领先的综合性创业服务平台。通过线上线下相结合的模式，向创业群体提供综合性创业服务。',now());
INSERT INTO jigou VALUES (NULL,'飞马旅','5382d90890208.gif','中国首家服务业创业项目管理支持机构。关注四大领域：TMT；O2M；O2O；B2B',now());
INSERT INTO jigou VALUES (NULL,'联想之星','53868c2ee4454.gif','成立于2008年，是联想控股旗下的综合性专业投资孵化机构',now());
INSERT INTO jigou VALUES (NULL,'言几又','53916abaacf73.gif','以书店为背景、咖啡为渗透、主题活动为拉动，提供新生活方式用品的创新文化生活一体店',now());
INSERT INTO jigou VALUES (NULL,'天使汇','53ab76be33b4d.gif','2011年11月11日正式上线运营。是个聚集创业者和投资人的投融资平台',now());
INSERT INTO jigou VALUES (NULL,'北京大学创业训练营','545839e6a4ba8.gif','北京大学为更好的服务国家创新创业发展战略，由北京大学校友会牵头联合相关单位团体共同',now());
INSERT INTO jigou VALUES (NULL,'拉勾网','54583a40562ab.gif','拉勾网，是一家专为工作3到10年的资深互联网从业者，提供成长方案的互联网垂直招聘网站。',now());
INSERT INTO jigou VALUES (NULL,'亚杰汇','5382d8f746dae.gif','亚杰汇创始人俱乐部是由亚杰商会(AAMA)摇篮计划导师和创业家学员众筹发起创建的一家',now());
INSERT INTO jigou VALUES (NULL,'IC咖啡','5590e2f573467.gif','IC咖啡，一种新型的高科技产业“链”俱乐部。',now());
INSERT INTO jigou VALUES (NULL,'创投圈','54b70fdccb3ae.gif','创投圈www.vc.cn成立于2011年5月',now());
INSERT INTO jigou VALUES (NULL,'清华经管创业者加速器','55a463120cdd1.gif','清华经管创业者加速器是一个体现清华精神，为全球优秀创业者和团队成长服务的创业加速平台。',now());
INSERT INTO jigou VALUES (NULL,'66号成长屋','5590e3368a711.gif','66号成长屋位于中关村创业大街68号',now());
INSERT INTO jigou VALUES (NULL,'InnoTREE因果树','57513c7e9c126.png','InnoTREE –股权众筹生态圈打造者。',now());
INSERT INTO jigou VALUES (NULL,'硬创邦','5590d8a2ec94f.gif','硬创邦是国内领先的硬件和创客教育平台，由雷锋网和好未来联合创办',now());
INSERT INTO jigou VALUES (NULL,'金榕树','5590e20a39f1b.gif','何为金榕树计划?金榕树计划的全称是“金榕树自媒体连接创业计划',now());
INSERT INTO jigou VALUES (NULL,'聚创','5590e27d9994b.gif','聚创为创业者免费提供咖啡、办公、孵化、融资对接等一站式服务',now());
INSERT INTO jigou VALUES (NULL,'虫洞创业之家','55a49695b7894.gif','爱因斯坦告诉我们，“虫洞”是连接宇宙遥远区',now());
UNLOCK TABLES;

-- 街区活动
DROP TABLE IF EXISTS huodong;
CREATE TABLE huodong (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(40) NOT NULL,
  content text NOT NULL,
  createtime timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES huodong WRITE;
TRUNCATE TABLE huodong;
INSERT INTO huodong VALUES (NULL,'中关村创业大街首届手机摄影大赛报名啦！','活动地点：中关村创业大街','2016-11-21');
INSERT INTO huodong VALUES (NULL,'招募 | 注册、孵化、资讯——创业会客厅线上平台需要在创新创业道路上前行的你！',' 活动地点：中关村创业大街','2016-07-07');
INSERT INTO huodong VALUES (NULL,'“午间时光”，打开艺术之门','地点：中关村创业大街','2016-11-28');
INSERT INTO huodong VALUES (NULL,'【创业整理控】那些全球顶尖的孵化机构','地点：中关村创业大街','2016-11-24');
UNLOCK TABLES;
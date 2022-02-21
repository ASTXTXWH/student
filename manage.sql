﻿# Host: localhost  (Version: 5.7.25-log)
# Date: 2021-12-24 18:09:45
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "19student"
#

DROP TABLE IF EXISTS `19student`;
CREATE TABLE `19student` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(30) NOT NULL DEFAULT '' COMMENT '学号',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `sex` varchar(10) NOT NULL DEFAULT '男' COMMENT '性别',
  `nation` varchar(10) DEFAULT NULL COMMENT '民族',
  `class` varchar(20) NOT NULL DEFAULT '' COMMENT '班级',
  `politics` varchar(10) DEFAULT NULL COMMENT '政治面貌',
  `dormitory` varchar(20) DEFAULT NULL COMMENT '宿舍',
  `birthday` varchar(20) DEFAULT NULL COMMENT '出生日期',
  `Telephone` varchar(20) DEFAULT NULL COMMENT '电话',
  `qq` varchar(20) DEFAULT NULL COMMENT 'QQ号',
  `side` varchar(255) DEFAULT NULL COMMENT '地址',
  `state` varchar(10) DEFAULT NULL COMMENT '状态',
  `studentpwd` varchar(20) DEFAULT '' COMMENT '学生登录密码',
  PRIMARY KEY (`Id`,`studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=160 DEFAULT CHARSET=utf8 COMMENT='19级';

#
# Data for table "19student"
#

INSERT INTO `19student` VALUES (1,'19404101','刘涛','女','汉族','1班','共青团员','2栋101','2000-10-09','13611255476','16989852','四川省成都市','在校','1009'),(2,'19404102','张三','男','汉族','1班','共青团员','1栋101','1999-12-12','15082451025','15896985','四川省宜宾市','在校','1212'),(3,'19404103','赵敏','女','汉族','1班','共青团员','2栋101','2001-11-11','13585965465','14856985','四川省绵阳市','在校','1111'),(4,'19404104','张翠山','男','汉族','1班','共青团员','1栋101','1999-08-12','16959896457','125636985','四川省泸州市','在校','0812'),(5,'19404105','谢逊','男','汉族','1班','共青团员','1栋101','2000-01-01','13688596985','1025569632','四川省宜宾市','在校','0101'),(6,'19404106','殷梨亭','女','汉族','1班','共青团员','2栋101','2000-02-26','15696842569','147851565','四川省德阳市','在校','0226'),(7,'19404107','俞岱岩','男','汉族','1班','共青团员','1栋101','1999-02-01','15884769356','556148451','四川省广元市','在校','0201'),(8,'19404108','宋远桥','男','汉族','1班','共青团员','1栋102','2001-04-16','15698457586','545121515','四川省自贡市','参军','0416'),(9,'19404109','胡青牛','男','汉族','1班','共青团员','1栋102','2000-09-21','15884758245','1564845154','四川省绵阳市','在校','0921'),(10,'19404110','宋青书','男','汉族','1班','共青团员','1栋102','1999-03-21','13654858965','545616555','四川省成都市','在校','0321'),(11,'19404111','纪晓芙','女','汉族','1班','群众','2栋101','2000-12-12','17865698457','1445654556','四川省绵阳市','在校','1212'),(12,'19404112','周颠','男','汉族','1班','群众','1栋102','2000-07-19','15698547852','1698445415','四川省泸州市','在校','0719'),(13,'19404113','殷天正','男','汉族','1班','共青团员','1栋103','1998-05-28','17854869325','4544548485','四川省成都市','在校','0528'),(14,'19404114','陈友谅','男','汉族','1班','群众','1栋103','1999-12-28','19658452536','581546251','四川省广安市','在校','1228'),(15,'19404115','成昆','男','汉族','1班','群众','1栋103','2000-06-28','19856899856','123699445','四川省宜宾市','在校','0628'),(16,'19404116','殷素素','女','汉族','1班','共青团员','2栋102','2000-11-15','18058476935','158445155','四川省泸州市','在校','1115'),(17,'19404117','李明','男','汉族','1班','共青团员','1栋103','2001-04-05','15884769304','1234945015','四川省成都市','在校','0405'),(18,'19404118','张晓兰','女','汉族','1班','群众','2栋102','2002-06-19','15082450105','1659511102','四川省自贡市','在校','0619'),(19,'19404119','李正','男','汉族','1班','共青团员','1栋104','2000-08-14','13688288965','1659412102','四川省宜宾市','在校','0814'),(20,'19404120','郑长春','男','汉族','1班','群众','1栋104','2000-12-13','15694587102','102944220','四川省乐山市','在校','1213'),(21,'19404121','罗花花','女','汉族','1班','群众','2栋102','2001-08-09','15698547456','1055922310','四川省宜宾市','在校','0809'),(22,'19404122','郑明','男','汉族','1班','共青团员','1栋104','2001-08-01','13558485698','1025464952','四川省绵阳市','参军','0801'),(23,'19404123','刘明','男','汉族','1班','群众','1栋104','2000-09-05','18082451050','1026544559','四川省成都市','在校','0905'),(24,'19404124','刘洋','男','汉族','1班','共青团员','1栋105','1999-06-08','16859465825','1025594222','四川省眉山市','休学','0608'),(25,'19404125','罗静','女','汉族','1班','群众','2栋102','1999-06-01','18283105402','10369964520','四川省宜宾市','在校','0601'),(26,'19404126','成开贵','男','汉族','1班','共青团员','1栋105','1999-01-15','16958693201','1510164612','四川省德阳市','在校','0115'),(27,'19404127','李小龙','男','汉族','1班','共青团员','1栋105','2000-03-14','17283105403','232656025','四川省广安市','在校','0314'),(28,'19404128','黎明','男','汉族','1班','群众','1栋105','2000-09-14','18283105403','4959231010','四川省宜宾市','在校','0914'),(29,'19404129','刘鑫','男','汉族','1班','共青团员','1栋106','2001-04-09','16958963256','11201556156','四川省攀枝花市','在校','0409'),(30,'19404130','冯晓兰','女','汉族','1班','群众','2栋103','2000-12-28','18283105469','100231115','四川省宜宾市','在校','1228'),(31,'19404201','孟天祥','男','汉族','2班','共青团员','1栋106','2000-02-11','15896584569','215102151','四川省广安市','在校','0211'),(32,'19404202','陈祥通','男','汉族','2班','共青团员','1栋106','2000-01-09','14589652365','1206655551','四川省自贡市','在校','0109'),(33,'19404203','王天宇','男','汉族','2班','共青团员','1栋106','2002-01-16','13659865968','151854855123','四川省广安市','在校','0116'),(34,'19404204','方文成','男','汉族','2班','共青团员','1栋107','1999-09-25','15265487524','26515151155','四川省宜宾市','在校','0925'),(35,'19404205','钱顺卓','男','汉族','2班','群众','1栋107','1999-01-28','18856956325','2516581510','四川省自贡市','在校','0128'),(36,'19404206','王崇江','男','汉族','2班','共青团员','1栋107','2000-06-28','12456958568','15545156115','四川省自贡市','在校','0628'),(37,'19404207','黎浩然','男','汉族','2班','群众','1栋107','2001-06-25','13688288548','1510151515','四川省广安市','在校','0605'),(38,'19404208','刘露露','女','汉族','2班','共青团员','2栋103','2000-09-15','16998569654','51511051153','四川省自贡市','在校','0915'),(39,'19404209','陈祥通','男','汉族','2班','共青团员','1栋108','2000-04-28','19688884758','15021515115','四川省宜宾市','在校','0428'),(40,'19404210','徐志晨','男','汉族','2班','共青团员','1栋108','1998-08-28','19258693652','15110215115','四川省自贡市','在校','0828'),(41,'19404211','张哲宇','男','汉族','2班','共青团员','1栋108','2001-03-26','17845896589','1510515115','四川省泸州市','在校','0326'),(42,'19404212','王炫皓','男','汉族','2班','共青团员','1栋108','2000-12-01','18285696325','51520215165','四川省自贡市','在校','1201'),(43,'19404213','王海德','男','汉族','2班','共青团员','1栋109','2000-04-30','18285477589','05151155','四川省宜宾市','在校','0430'),(44,'19404214','谢丽秋','女','汉族','2班','共青团员','2栋103','2000-06-31','19625639854','15130251561','四川省宜宾市','在校','0631'),(45,'19404215','王崇江','男','汉族','2班','共青团员','1栋109','2001-12-30','18585698547','1520311515','四川省泸州市','在校','1230'),(46,'19404216','关天胜','男','汉族','2班','共青团员','1栋109','2000-12-17','15265954231','1515151115','四川省眉山市','在校','1217'),(47,'19404217','唐雅雅','女','汉族','2班','群众','2栋103','1999-12-11','13688296520','1501515611','四川省成都市','在校','1211'),(48,'19404218','赵琳艳','女','汉族','2班','共青团员','2栋104','2000-11-12','15801020458','51515156115','四川省泸州市','在校','1112'),(49,'19404219','余雅丽','女','汉族','2班','共青团员','2栋104','2001-11-11','15082010369','1501561565','四川省成都市','在校','1111'),(50,'19404220','方嘉康','男','汉族','2班','群众','1栋109','2000-12-12','18586931020','0215156151','四川省自贡市','在校','1212'),(51,'19404221','徐志晨','男','汉族','2班','共青团员','1栋110','1999-04-17','15605898450','1202515615','四川省眉山市','在校','0417'),(52,'19404222','杨国强','男','汉族','2班','共青团员','1栋110','1999-05-08','15698542541','15102231515','四川省成都市','参军','0508'),(53,'19404223','黎浩然','男','汉族','2班','共青团员','1栋110','1999-02-05','15845726935','1512051515','四川省眉山市','在校','0205'),(54,'19404224','方文成','男','汉族','2班','共青团员','1栋110','2000-02-10','18245153690','1023022152','四川省眉山市','在校','0210'),(55,'19404225','刘丽','女','汉族','2班','共青团员','2栋104','2000-10-01','15825010475','13215615651','四川省自贡市','在校','1001'),(56,'19404226','赵刚','男','汉族','2班','共青团员','1栋111','2000-10-07','18082456321','1051565115','四川省自贡市','在校','1007'),(57,'19404227','曲比阿体','男','彝族','2班','共青团员','1栋111','2000-10-04','18859641502','1556145465','四川省凉山州','参军','1004'),(58,'19404228','向奎','男','汉族','2班','共青团员','1栋111','1999-11-25','19254856931','5511515165','四川省眉山市','在校','1125'),(59,'19404229','红日合康','男','彝族','2班','群众','1栋111','2000-08-30','17785964521','1520531156','四川省凉山州','在校','0830'),(60,'19404230','阿一朵','女','彝族','2班','共青团员','2栋104','2001-01-06','15963587452','1551561321','四川省凉山州','在校','0106'),(61,'19404301','徐文彬','男','汉族','3班','共青团员','1栋112','1998-12-25','15478965254','1515612051','四川省泸州市','在校','1225'),(62,'19404302','陈玉美','女','汉族','3班','群众','2栋105','2000-01-30','15586932546','155165151','四川省攀枝花市','在校','0130'),(63,'19404303','林慧音','女','汉族','3班','共青团员','2栋105','2001-02-14','14852569658','135151513','四川省攀枝花市','在校','0214'),(64,'19404304','谢丽秋','女','汉族','3班','共青团员','2栋105','2000-07-01','13658472569','151561566','四川省自贡市','在校','0701'),(65,'19404305','林彩瑜','女','汉族','3班','群众','2栋105','2000-08-25','13968594821','156155165','四川省眉山市','在校','0825'),(66,'19404306','李柏麟','男','汉族','3班','共青团员','1栋112','2001-06-30','18082451052','15561656656','四川省乐山市','在校','0630'),(67,'19404307','胡继尧','男','汉族','3班','群众','1栋112','2001-04-25','15887469304','15151515','四川省泸州市','参军','0425'),(68,'19404308','黄雅玲','女','汉族','3班','共青团员','2栋106','2000-09-15','15896362540','151615551','四川省眉山市','在校','0915'),(69,'19404309','王炫皓','男','汉族','3班','共青团员','1栋112','2001-06-24','15082451010','151316516','四川省广安市','在校','0624'),(70,'19404310','朱健','男','汉族','3班','共青团员','3栋101','2000-12-08','16996352401','165151616','四川省眉山市','在校','1208'),(71,'19404311','汪梅','男','汉族','3班','共青团员','3栋101','2000-07-19','10596834525','1651561616','四川省自贡市','在校','0719'),(72,'19404312','李志明','男','汉族','3班','共青团员','3栋101','1999-08-24','12596587456','16515616515','重庆江北区','在校','0824'),(73,'19404313','韩磊','男','汉族','3班','共青团员','3栋101','1999-07-25','12569874225','1515156151','四川省广安市','在校','0725'),(74,'19404314','科卡鲁比','男','彝族','3班','群众','3栋102','2000-02-12','15896584758','15616516515','四川省眉山市','在校','0212'),(75,'19404315','林涛','男','汉族','3班','共青团员','3栋102','2000-05-24','15963245896','1516516515','四川省乐山市','在校','0524'),(76,'19404316','李明','男','汉族','3班','共青团员','3栋102','2000-06-25','15896542514','11513151156','四川省自贡市','在校','0625'),(77,'19404317','方红红','女','汉族','3班','共青团员','2栋106','2001-02-21','16958642569','1513151616','重庆渝北区','在校','0221'),(78,'19404318','李绮霞','女','汉族','3班','共青团员','2栋106','2001-09-26','19635688475','15131515156','四川省广安市','在校','0926'),(79,'19404319','李庆祥','男','汉族','3班','共青团员','3栋102','2001-09-24','13688289306','1516531615','四川省攀枝花市','在校','0924'),(80,'19404320','刘丽','女','汉族','3班','共青团员','2栋106','2000-08-25','19658741025','16513165156','四川省自贡市','在校','0825'),(81,'19404321','阿卢某日','男','彝族','3班','群众','3栋103','1998-03-26','16895761458','156156151','四川省眉山市','在校','0326'),(82,'19404322','张烈','男','汉族','3班','共青团员','3栋103','1999-05-30','18596340596','15115161616','四川省广安市','在校','0530'),(83,'19404323','王磊','男','汉族','3班','共青团员','3栋103','2000-01-29','15896425698','1516151556','四川省眉山市','在校','0129'),(84,'19404324','王彬彬','男','汉族','3班','共青团员','3栋103','2000-08-31','18586965968','102312002','四川省宜宾市','在校','0831'),(85,'19404325','刘芳','女','汉族','3班','群众','2栋107','2001-02-11','18254789630','16499844','四川省眉山市','在校','0211'),(86,'19404326','王志明','男','汉族','3班','共青团员','3栋104','2002-05-28','15896475825','4849851121','四川省宜宾市','参军','0528'),(87,'19404327','赵志龙','男','汉族','3班','共青团员','3栋104','2000-09-26','13559864859','456156121','四川省眉山市','在校','0926'),(88,'19404328','宋埼玉','女','汉族','3班','共青团员','2栋107','2001-07-26','16958647852','11305151','四川省攀枝花市','在校','0726'),(89,'19404329','王彩霞','女','汉族','3班','群众','2栋107','2001-06-26','15965874589','1551651561','四川省宜宾市','在校','0626'),(90,'19404330','曾志龙','男','汉族','3班','共青团员','3栋104','2001-04-25','15963258475','051616515','四川省乐山市','在校','0425'),(91,'19404401','刘倩倩','女','汉族','4班','群众','2栋107','1999-05-25','18896548752','15521156','四川省广元市','在校','0525'),(92,'19404402','李桥','男','汉族','4班','共青团员','3栋104','1996-08-25','15968475236','561651516','四川省宜宾市','在校','0825'),(93,'19404403','周敏','女','汉族','4班','共青团员','2栋108','1999-12-18','15082450108','1560231516','四川省绵阳市','在校','1218'),(94,'19404404','方志豪','男','汉族','4班','共青团员','3栋105','2000-04-25','15896965696','156115616','四川省广元市','在校','0425'),(95,'19404405','王浩','男','汉族','4班','群众','3栋105','2001-08-14','17082569301','165061616','四川省广元市','在校','0814'),(96,'19404406','青林','男','汉族','4班','共青团员','3栋105','2000-12-18','19630122589','203251651','四川省宜宾市','在校','1218'),(97,'19404407','郝之源','男','汉族','4班','群众','3栋105','2000-09-20','15986598456','1023315631','四川省乐山市','在校','0920'),(98,'19404408','李倩','女','汉族','4班','共青团员','2栋108','2000-08-26','16025963658','03203215615','四川省宜宾市','在校','0826'),(99,'19404409','卓文斌','男','汉族','4班','共青团员','3栋106','1999-04-28','15968987452','155161515','四川省宜宾市','在校','0428'),(100,'19404410','卓铭','男','汉族','4班','共青团员','3栋106','1999-04-11','16025986589','1151651565','四川省绵阳市','在校','0411'),(101,'19404411','文昌','男','汉族','4班','群众','3栋106','1999-05-14','14859632586','15613156156','四川省广元市','在校','0514'),(102,'19404412','李茜','女','汉族','4班','共青团员','2栋108','2000-08-14','16959845786','112151515','四川省宜宾市','在校','0814'),(103,'19404413','方桥','男','汉族','4班','共青团员','3栋106','2001-11-15','15226935482','51561315615','四川省宜宾市','在校','1115'),(104,'19404414','郭嘉','男','汉族','4班','群众','3栋107','2001-03-25','16925461588','15115151','四川省乐山市','在校','0325'),(105,'19404415','刘青青','女','汉族','4班','共青团员','2栋108','2000-04-26','19696315420','1313515653','四川省宜宾市','在校','0426'),(106,'19404416','郭丽','女','汉族','4班','共青团员','2栋109','1999-05-01','15884569320','123498469','四川省泸州市','休学','0501'),(107,'19404417','埼玉','女','汉族','4班','共青团员','2栋109','1998-06-21','15800122254','1351515616','四川省乐山市','在校','0621'),(108,'19404418','卓芝麻','男','汉族','4班','共青团员','3栋107','2000-05-14','15950102232','1515333515','四川省宜宾市','在校','0514'),(109,'19404419','王芳','女','汉族','4班','共青团员','2栋109','2001-09-26','16934582102','120336994','四川省乐山市','在校','0926'),(110,'19404420','罗庆','男','汉族','4班','共青团员','3栋107','2002-08-30','16959601235','1077815156','四川省广元市','在校','0830'),(111,'19404421','李农','男','汉族','4班','共青团员','3栋107','2001-02-04','15824569520','1235448151','四川省广元市','在校','0204'),(112,'19404422','赵子龙','男','汉族','4班','群众','3栋108','2000-04-25','18665982103','1516516451','四川省泸州市','在校','0425'),(113,'19404423','赵刚列','男','汉族','4班','共青团员','3栋108','2000-07-25','15478256932','15105154','四川省绵阳市','在校','0725'),(114,'19404424','李晓霞','女','汉族','4班','共青团员','2栋109','2000-08-29','16936528964','511566135','四川省宜宾市','参军','0829'),(115,'19404425','王清扬','男','汉族','4班','共青团员','3栋108','2000-01-28','15963692450','56154266','四川省绵阳市','在校','0128'),(116,'19404426','周长生','男','汉族','4班','共青团员','3栋108','2001-09-28','15896542016','162615984','四川省宜宾市','在校','0928'),(117,'19404427','周峰放','男','汉族','4班','共青团员','3栋109','2001-07-19','15052693202','15056151','四川省泸州市','在校','0719'),(118,'19404428','曾桂芳','女','汉族','4班','群众','2栋110','2002-01-02','14859685234','0515481498','四川省绵阳市','在校','0102'),(119,'19404429','李芬','女','汉族','4班','共青团员','2栋110','2001-01-20','15896584125','18651515515','四川省宜宾市','休学','0120'),(120,'19404430','谢昊','男','汉族','4班','共青团员','3栋109','2000-04-27','16985745824','15484861156','四川省宜宾市','在校','0427');

#
# Structure for table "administrators"
#

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE `administrators` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(6) NOT NULL DEFAULT '0',
  `tname` varchar(20) DEFAULT '' COMMENT '管理员用户名',
  `tpwd` varchar(20) DEFAULT NULL COMMENT '管理员登录密码',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='管理员登录表';

#
# Data for table "administrators"
#

INSERT INTO `administrators` VALUES (1,100001,'root','666666'),(2,100002,'zhangsan','666666'),(3,100003,'tom','123456789');

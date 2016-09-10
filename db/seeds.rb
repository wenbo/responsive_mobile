# coding: utf-8
# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rails db:seed command (or created alongside the database with db:setup).
#
# Examples:
#
#   movies = Movie.create([{ name: 'Star Wars' }, { name: 'Lord of the Rings' }])
#   Character.create(name: 'Luke', movie: movies.first)
User.create(username: "admin", password: "asdfasdf") if User.find_by(username: "admin").blank?

 Industry.connection.execute("truncate table industries")
 a = Industry.create( name: "电力/新能源", number: 1 )
 Industry.create( name: "发电厂", number: 1, parent_id: a.id)
 Industry.create( name: "输变电网", number: 2, parent_id: a.id)
 Industry.create( name: "光伏太阳能", number: 3, parent_id: a.id)
 Industry.create( name: "风电", number: 4, parent_id: a.id)
 Industry.create( name: "核电", number: 5, parent_id: a.id)
 Industry.create( name: "应用", number: 6, parent_id: a.id)
 b = Industry.create( name: "汽车", number: 2 )
 Industry.create( name: "汽车研发（电动，混动）", number: 7, parent_id: b.id)
 Industry.create( name: "汽车生产", number: 8, parent_id: b.id)
 Industry.create( name: "汽车电子部品", number: 9, parent_id: b.id)
 Industry.create( name: "汽车检测维护", number: 10, parent_id: b.id)
 Industry.create( name: "应用", number: 11, parent_id: b.id)
 
 c = Industry.create( name: "电子零件/电气设备", number: 3 )
 Industry.create( name: "电子产品生产", number: 12, parent_id: c.id)
 Industry.create( name: "电子元器件生产", number: 13, parent_id: c.id)
 Industry.create( name: "电气设备生产", number: 14, parent_id: c.id)
 Industry.create( name: "电气设备维护", number: 15, parent_id: c.id)
 Industry.create( name: "应用", number: 16, parent_id: c.id)

 d = Industry.create( name: "电池", number: 4 )
 Industry.create( name: "电池芯生产（cell）", number: 17, parent_id: d.id)
 Industry.create( name: "电池组生产（pack）", number: 18, parent_id: d.id)
 Industry.create( name: "电池管理系统（BMS）", number: 19, parent_id: d.id)
 Industry.create( name: "电池维护", number: 20, parent_id: d.id)
 Industry.create( name: "应用", number: 21, parent_id: d.id)

 e = Industry.create( name: "交通（地铁、高铁、航空）", number: 5 )
 Industry.create( name: "地铁，高铁车辆生产", number: 22, parent_id: e.id)
 Industry.create( name: "地铁，高铁运营维护", number: 23, parent_id: e.id)
 Industry.create( name: "地铁，高铁研发检测", number: 24, parent_id: e.id)
 Industry.create( name: "航空研发生产", number: 25, parent_id: e.id)
 Industry.create( name: "应用", number: 26, parent_id: e.id)

 #Category.connection.execute("truncate table categories")
 c = Category.create(name: "现场测试仪器")
 c.children << Category.create(name: "电表继电器,变流器")
 c.children << Category.create(name: "万用表")
 c.children << Category.create(name: "接地电阻计,验电笔,相序表")
 c.children << Category.create(name: "电压计,相序表")
 c.children << Category.create(name: "绝缘电阻表")
 c.children << Category.create(name: "噪音计,转速计,照度计")
 c.children << Category.create(name: "光功率计,LAN线测试仪")
 c.children << Category.create(name: "兆欧表")


  c = Category.create(name: "环境测量仪表")
 c.children << Category.create(name: "环境测量系统")
 c.children << Category.create(name: "噪音计,转速计,照度计")
 c.children << Category.create(name: "温度计")
 c.children << Category.create(name: "磁场测试仪,光测试仪")
 
 c = Category.create(name: "安全标准测量仪")
 c.children << Category.create(name: "绝缘耐压测试仪")
 c.children << Category.create(name: "接地保护测试仪")
 c.children << Category.create(name: "泄漏电流测试仪")

 c = Category.create(name: "电力测量仪器")
 c.children << Category.create(name: "功率分析仪")
 c.children << Category.create(name: "电能质量分析仪")
 c.children << Category.create(name: "功率计")
 c.children << Category.create(name: "钳形功率计")

 c = Category.create(name: "电子测量仪表")
 c.children << Category.create(name: "台式万用表")
 c.children << Category.create(name: "LCR测试仪")
 c.children << Category.create(name: "电池测试仪")
 c.children << Category.create(name: "绝缘耐压测试仪")
 c.children << Category.create(name: "LCR测试仪,阻抗分析仪")

 c = Category.create(name: "钳形表,钳形传感器")
 c.children << Category.create(name: "钳形传感器")
 c.children << Category.create(name: "钳形表")

 c = Category.create(name: "记录仪,数据采集仪")
 c.children << Category.create(name: "记录仪")
 c.children << Category.create(name: "数据采集仪")

 c = Category.create(name: "信号发生器,波形发生器")
 c.children << Category.create(name: "信号发生器")

 p = Product.create(
   sku: "8861-50",
   title: "8860-50/ 8861-50",
   category_id: Category.find_by(name: "记录仪").id,
   industry_ids: [1,2,3,4,5,6],
   is_main_body: true,
   is_display: true,
   feature: "最大32通道+16个逻辑通道,
扫描单元 64ch,
20MS/s(12bits 8通道),
64MW～2GW内存(附件),
12bit/16bit A/D 分辩率,
USB, HD, PC卡",
   desc_as_option: "高速信号波形捕捉, 同时记录多路信号"
 )

#   p = Product.create(
#    sku: "PW9100",
#    title: "电流直接输入单元PW9100",
#    category_id: Category.find_by(name: "电力测量仪表").id,
#    feature: "宽频带、高精度,
# PW6001/3390用，3ch,
# PW6001/3390用，4ch",
#    desc_as_option: ""
#   )
  
  p = Product.create(
   sku: "3390",
   title: "3390",
   category_id: Category.find_by(name: "功率分析仪").id,
   industry_ids: [1,2,3,4,5,6],
   is_main_body: true,
   is_display: true,
   is_option: true,
   feature: "适用于设备的综合评估,
带宽DC, 0.5 ~ 150kHz,
DC, 或单相至三相4线,
4ch/ 钳式传感器输出,
测量变频器设备和分析马达",
   desc_as_option: "宽频带，多用途型号，高性能仪器"
 )

  p = Product.create(
   sku: "3391",
   title: "3391",
   category_id: Category.find_by(name: "功率分析仪").id,
   industry_ids: [1,2,3,4,5,6],
   is_main_body: true,
   is_display: true,
   is_option: true,
   feature: "适用于设备的综合评估,
带宽DC, 0.5 ~ 150kHz,
DC, 或单相至三相4线,
4ch/ 钳式传感器输出,
测量变频器设备和分析马达",
   desc_as_option: "宽频带，多用途型号，高性能仪器"
 )

  p = Product.create(
   sku: "3392",
   title: "3392",
   category_id: Category.find_by(name: "功率分析仪").id,
   industry_ids: [1,2,3,4,5,6],
   is_main_body: true,
   is_display: true,
   is_option: true,
   feature: "适用于设备的综合评估,
带宽DC, 0.5 ~ 150kHz,
DC, 或单相至三相4线,
4ch/ 钳式传感器输出,
测量变频器设备和分析马达",
   desc_as_option: "宽频带，多用途型号，高性能仪器"
 )
 news_cate1 = NewsCategory.create(
   name: "企业新闻",
   image: File.new(File.join(Rails.root, "doc/www/images/hioki_r14_c11.jpg"))
 )
 news_cate1 = NewsCategory.create(
   name: "展会信息",
   image: File.new(File.join(Rails.root, "doc/www/images/hioki_r14_c12.jpg"))
 )
 news_cate1 = NewsCategory.create(
   name: "业界新闻",
   image: File.new(File.join(Rails.root, "doc/www/images/hioki_r14_c13.jpg"))
 )
 news_cate1 = NewsCategory.create(
   name: "新品发布",
   image: File.new(File.join(Rails.root, "doc/www/images/hioki_r14_c14.jpg"))
 )
 news_cate1 = NewsCategory.create(
   name: "保养维修",
   image: File.new(File.join(Rails.root, "doc/www/images/hioki_r14_c15.jpg"))
 )
 news_cate1 = NewsCategory.create(
   name: "活动新闻",
   image: File.new(File.join(Rails.root, "doc/www/images/hioki_r14_c16.jpg"))
 )

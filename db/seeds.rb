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

# coding: utf-8
desc "import:seihin from excel"
task "import:seihin" => :environment do
  ActiveRecord::Base.connection.execute("truncate table seihins");
  #xls = Roo::Spreadsheet.open(File.join(Rails.root, "doc/katamei_sample.csv"))
  xls = Roo::Spreadsheet.open(File.join(Rails.root, "doc/katamei.csv"))
  sheet = xls.sheet(0)
  sheet.each do |row|
    if Seihin.find_by(product_model_name: row[1].strip) 
      puts row[1].strip
    else
    Seihin.find_by(product_model_name: row[1].strip) || Seihin.create(product_name: row[0].strip, product_model_name: row[1].strip, note: row[2].try(:strip))
    end
  end
end

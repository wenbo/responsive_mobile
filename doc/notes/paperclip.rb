ck = Ckeditor::Picture.new
ck.data = File.new(File.join(Rails.root, "public/apple-touch-icon-precomposed.png"))
ck.data = File.new(File.join(Rails.root, "public/country_road.jpg"))
ck.save

local
#<ActiveModel::Errors:0x007fa04fd146a0 @base=#<Ckeditor::Picture id: nil, data_file_name: "country_road.jpg", data_content_type: "image/jpeg", data_file_size: 40816, data_fingerprint: "bc3ccccac1e11cc4314533ebe5f64138", assetable_id: nil, assetable_type: nil, type: "Ckeditor::Picture", width: nil, height: nil, created_at: nil, updated_at: nil>, @messages={}, @details={}>
server
#<ActiveModel::Errors:0x00000018875fd8 @base=#<Ckeditor::Picture id: nil, data_file_name: "country_road.jpg", data_content_type: "application/octet-stream", data_file_size: 40816, data_fingerprint: "bc3ccccac1e11cc4314533ebe5f64138", assetable_id: nil, assetable_type: nil, type: "Ckeditor::Picture", width: nil, height: nil, created_at: nil, updated_at: nil>, @messages={:data_content_type=>["is invalid"], :data=>["is invalid"]}, @details={:data_content_type=>[{:error=>:invalid, :content_type=>/\Aimage/, :types=>"(?-mix:\\Aimage)"}], :data=>[{:error=>"is invalid"}]}> 


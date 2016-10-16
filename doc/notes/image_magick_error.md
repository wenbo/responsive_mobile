	{"sku"=>"test zip on Mac 20161016", "name"=>"test zip on Mac 20161016
    ", "desc"=>"test zip on Mac 20161016", "attachment"=>#<ActionDispatch::Http::UploadedFile:0x007f4e08bea8b8 @tempfile=#
    <Tempfile:/tmp/RackMultipart20161016-25548-178j1g6.zip>, @original_filename="MR8847AV105.zip", @content_type="applicat
    ion/zip", @headers="Content-Disposition: form-data; name=\"product[upgrade_attachments_attributes][1476600621968][atta
    chment]\"; filename=\"MR8847AV105.zip\"\r\nContent-Type: application/zip\r\n">, "classifier_id"=>"1"}




{"sku"=>"test 1016", "name"=>"test 1016", "desc"=>"test 1016", "attachment"=>#<ActionDispatch::Http::UploadedFile:0x007f4e08672250 @tempfile=#<Tempfile:/tmp/RackMultipart20161016-25548-1e3lhk8.zip>, @original_filename="MR8847AV105.zip", @content_type="application/octet-stream", @headers="Content-Disposition: form-data; name=\"product[upgrade_attachments_attributes][1476599115933][attachment]\"; filename=\"MR8847AV105.zip\"\r\nContent-Type: application/octet-stream\r\n">, "classifier_id"=>"1"}

	I, [2016-10-16T14:24:21.466701 #25548]  INFO -- : [e3a674af-7955-4c20-b1ba-564d9a255a11] Command :: identify -format '%wx%h,%[exif:orientation]' '/tmp/c7acfbf0e6f1030e6763154298eef88a20161016-25548-1o0zjco.zip[0]' 2>/dev/null
	539 I, [2016-10-16T14:24:21.472386 #25548]  INFO -- : [e3a674af-7955-4c20-b1ba-564d9a255a11] [paperclip] An error was received while processing: #<Paperclip::Errors::NotIdentifiedByImageMagickError: Paperclip::Errors::NotIdentifiedByImageMagickError>

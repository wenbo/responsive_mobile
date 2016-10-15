require 'digest/sha1'
puts Digest::SHA1.hexdigest('asdfasdf')

# test@test.com | 92429d82a41e930486c6de5ebda9602d55c39986

# sql = " SELECT * FROM `h_user` WHERE `del_flag`='no' AND `check_flag`=9 AND `email`='".$username."' AND `password`='".$password."' LIMIT 1 ";

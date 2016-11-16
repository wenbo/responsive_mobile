#!/usr/bin/expect  
set timeout 60  
spawn ssh root@103.197.26.6
interact {          
    timeout 300 {send "\x20"}  
  }

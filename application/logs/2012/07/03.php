<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-03 16:46:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-03 16:46:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Rainee Thomas\Documents\GitHub\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee Thomas\Documents\GitHub\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee Thomas\Documents\GitHub\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 16:47:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-03 16:47:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Rainee Thomas\Documents\GitHub\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Rainee Thomas\Documents\GitHub\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Rainee Thomas\Documents\GitHub\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-03 17:57:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-03 17:57:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Rainee Thomas\Documents\GitHub\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
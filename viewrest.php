<?php
  // SQL Server Extension Sample Code:
  $connectionInfo = array("UID" => "apuadmin", "pwd" => "Pravin5383#",
  "Database" => "WebApplicationDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:webapplicationtp031881.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);


if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
  
?>

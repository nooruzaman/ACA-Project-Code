<?php

  # Retrieve settings from Parameter Store
  error_log('Retrieving settings');
  require 'aws.phar';
  
  $az = file_get_contents('http://169.254.169.254/latest/meta-data/placement/availability-zone');
  $region = substr($az, 0, -1);
  $ssm_client = new Aws\Ssm\SsmClient([
     'version' => 'latest',
     'region'  => $region
  ]);
  
  
  
    # Retrieve settings from Parameter Store
    #$result = $ssm_client->GetParametersByPath(['Path' => '/example/']);
	
	$ep = '';
    $db = '';
    $un = '';
    $pw = '';
    
	# Extract individual parameters
	#foreach($result['Parameters'] as $p) {
	#	if ($p['Name'] == '/example/endpoint') $ep = $p['Value'];
	#	if ($p['Name'] == '/example/username') $un = $p['Value'];
	#	if ($p['Name'] == '/example/password') $pw = $p['Value'];
	#	if ($p['Name'] == '/example/database') $db = $p['Value'];
	#}

    #$ep = $values['/example/endpoint'];
    #$un = $values['/example/username'];
    #$pw = $values['/example/password'];
    #$db = $values['/example/database'];
    
	$ep = 'localhost';
    $db = 'country_schema';
    $un = 'root';
    $pw = $ssm_client;
?>
<?php

$str = shell_exec("aws elasticbeanstalk describe-environments --environment-names Sample-env");

$json = json_decode($str, true);

echo $json['Environments'][0]['VersionLabel'];

//echo exec('unzip -z "/opt/elasticbeanstalk/deploy/appsource/source_bundle" | tail -n1');

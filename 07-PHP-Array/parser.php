<?php
$output = 'Output:';
$schema = 'schema: ';
$host = 'host: ';
$path = 'path: ';
$query = 'query: ';
$fragment = 'fragment: ';
$url = 'https://www.google.com/search?q=123#some_fragment';
$parse = parse_url($url);

//print query as table
echo $output . PHP_EOL;
echo $schema . parse_url($url, PHP_URL_SCHEME) . PHP_EOL;
echo $host . parse_url($url, PHP_URL_HOST) . PHP_EOL;
echo $path . parse_url($url, PHP_URL_PATH) . PHP_EOL;
echo $query . parse_url($url, PHP_URL_QUERY) . PHP_EOL;
echo $fragment . parse_url($url, PHP_URL_FRAGMENT) . PHP_EOL;

//print query as array with arguments
print_r($parse);

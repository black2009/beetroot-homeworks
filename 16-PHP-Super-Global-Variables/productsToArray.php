<?php

$sourceFile = 'products.json';

/**
 * @param string $sourceFile
 * @return array|null
 * @throws Exception
 */
function jsonToArray(string $sourceFile): array
{
    if (!file_exists($sourceFile)) {
        throw new Exception("File '$sourceFile' is not exist");
    }

    $json = file_get_contents($sourceFile);
    if ($json === false) {
        throw new Exception("Unable to retrieve file contents: $sourceFile");
    }

    try {
        $products = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (Exception $e) {
        throw new Exception('json processing error');
    }

    return $products;
}

try {
    $productsArray = jsonToArray($sourceFile);
} catch (Exception $e) {
}

//print_r($productsArray);

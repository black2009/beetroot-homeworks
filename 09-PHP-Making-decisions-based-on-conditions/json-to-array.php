<?php
$json = '{
	"menu": {
		"id": "file",
		"value": "File",
		"popup": {
			"menuitem": [{
					"value": "New",
					"onclick": "CreateNewDoc()"
				},
				{
					"value": "Open",
					"onclick": "OpenDoc()"
				},
				{
					"value": "Close",
					"onclick": "CloseDoc()"
				}
			]
		}
	}
}';

//var_dump(json_decode($json));
var_dump(json_decode($json, true));
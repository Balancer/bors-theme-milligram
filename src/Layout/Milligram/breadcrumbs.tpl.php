<?php

$result = [];

foreach(bors_lib_object::parent_lines($self) as $breadcrumbs_line)
{
	$line = [];
	foreach($breadcrumbs_line as $x)
	{
		if(empty($x['is_active']))
			$line[] = "<a href=\"{$x['url']}\">{$x['title']}</a>";
		else
			$line[] = "<a href=\"{$x['url']}\"><b>{$x['title']}</b></a>";
	}

	$result[] = join(' » ', $line);
}

echo join("<br/>\n", $result);

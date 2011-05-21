<?php
	if ($id != '' && !is_numeric($id))
	{
		$feed = new Feed($id, $extra);
		if ($feed->mCategoryId != '' && $feed-> mTypeId !='')
		{
			$feed->Display();
			exit;
		}
		else
		{
			redirect_to(BASE_URL);
		}
	}
	else
	{
		$template = 'rss.tpl';
	}
?>
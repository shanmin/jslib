window.onload=function()
{
	//显示语言
	function langChange()
	{
		let nlang=localStorage.getItem('lang');
		if(nlang=='en')
		{
			$js('[lang=zh]').hide();
			$js('[lang=en]').show();
		}
		else
		{
			$js('[lang=zh]').show();
			$js('[lang=en]').hide();
		}
	}
	langChange();
}
window.onload=function()
{
	slang.onchange=function()
	{
		location.href=location.href.replace(/(\/zh\/)|(\/en\/)/,'/'+this.value+'/');
	}
}
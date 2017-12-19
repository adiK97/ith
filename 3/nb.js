function preventBack()
		{
			window.history.forward();
		}
		setTimeout("preventBack()",null);
		window.onUnload=function()
		{
			null;
		}
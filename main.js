$(document).ready(function()
{
	$('#search').keyup(function()
	{
		var Search = $('#search').val();
		if(Search!="")
		{
			$.ajax(
			{
				url: 'includes/search.php',
				method: 'POST',
				data:{search:Search},
				success:function(data){
					$('#content').html(data);
				}
			})
		}
		else
		{
			$('#content').html('');
		}
		
		$(document).on('click','a',function(){
			$('#search').val($(this).text());
			$('#content').html('');
		})
	})
	
	$(document).on('click','#btn_search, n:function(){
		
		var value = $('#search').val();
		$.ajax(
		{
			url: 'includes/display.php',
			method: 'POST',
			data:{querry:value},
			success: function(data){
				$("#content").html(data);
			}
		})
	})

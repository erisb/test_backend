<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test Online</title>

	<script src="<?php echo base_url();?>asset/jquery.min.js"></script>
</head>
<body>
<div>
	<input type="hidden" name="data_temp_pertama" id="data_temp_pertama">
	<input type="hidden" name="data_temp_kedua" id="data_temp_kedua">
	<input type="hidden" name="data_temp_ketiga" id="data_temp_ketiga">
	<input type="hidden" name="data_temp_keempat" id="data_temp_keempat">
	<input type="button" name="reload" value="Reload" id="reload" onclick="ulang();">
	<input type="button" name="play" value="Play" id="play">
</div>

</body>
</html>

<script type="text/javascript">

	function ulang()
	{
		location.reload(true);
	}

	$("#play").on('click',function(){

		var pertama = [];
		var kedua = [];
		var ketiga = [];
		var keempat = [];
		if($('#data_temp_pertama').val() == 0)
		{
			var pertama_1 = Math.floor((Math.random() * 6) + 1);
			var pertama_2 = Math.floor((Math.random() * 6) + 1);
			var pertama_3 = Math.floor((Math.random() * 6) + 1);
			var pertama_4 = Math.floor((Math.random() * 6) + 1);
			var pertama_5 = Math.floor((Math.random() * 6) + 1);
			var pertama_6 = Math.floor((Math.random() * 6) + 1);
			pertama.push(pertama_1,pertama_2,pertama_3,pertama_4,pertama_5,pertama_6);
		}
		else
		{
			var numberString = $('#data_temp_pertama').val();
			pertama = numberString.split(',');
			// console.log(pertama);
		}

		if($('#data_temp_kedua').val() == 0)
		{
			var kedua_1 = Math.floor((Math.random() * 6) + 1);
			var kedua_2 = Math.floor((Math.random() * 6) + 1);
			var kedua_3 = Math.floor((Math.random() * 6) + 1);
			var kedua_4 = Math.floor((Math.random() * 6) + 1);
			var kedua_5 = Math.floor((Math.random() * 6) + 1);
			var kedua_6 = Math.floor((Math.random() * 6) + 1);
			kedua.push(kedua_1,kedua_2,kedua_3,kedua_4,kedua_5,kedua_6);
		}
		else
		{
			var numberString = $('#data_temp_kedua').val();
			kedua = numberString.split(',');
			// console.log(kedua);
		}

		if($('#data_temp_ketiga').val() == 0)
		{
			var ketiga_1 = Math.floor((Math.random() * 6) + 1);
			var ketiga_2 = Math.floor((Math.random() * 6) + 1);
			var ketiga_3 = Math.floor((Math.random() * 6) + 1);
			var ketiga_4 = Math.floor((Math.random() * 6) + 1);
			var ketiga_5 = Math.floor((Math.random() * 6) + 1);
			var ketiga_6 = Math.floor((Math.random() * 6) + 1);
			ketiga.push(ketiga_1,ketiga_2,ketiga_3,ketiga_4,ketiga_5,ketiga_6);
		}
		else
		{
			var numberString = $('#data_temp_ketiga').val();
			ketiga = numberString.split(',');
			// console.log(ketiga);
		}

		if($('#data_temp_keempat').val() == 0)
		{
			var keempat_1 = Math.floor((Math.random() * 6) + 1);
			var keempat_2 = Math.floor((Math.random() * 6) + 1);
			var keempat_3 = Math.floor((Math.random() * 6) + 1);
			var keempat_4 = Math.floor((Math.random() * 6) + 1);
			var keempat_5 = Math.floor((Math.random() * 6) + 1);
			var keempat_6 = Math.floor((Math.random() * 6) + 1);
			keempat.push(keempat_1,keempat_2,keempat_3,keempat_4,keempat_5,keempat_6);
		}
		else
		{
			var numberString = $('#data_temp_keempat').val();
			keempat = numberString.split(',');
			// console.log(keempat);
		}

		var data_all = {pertama:pertama,kedua:kedua,ketiga:ketiga,keempat:keempat};

		$.ajax({
			url:"<?php echo base_url();?>index.php/Main/pertama",
			method:"POST",
			dataType:"json",
			data:data_all,
			success:function(data){
				
				console.log(data);
				var pertama_temp = [];
				var kedua_temp = [];
				var ketiga_temp = [];
				var keempat_temp= [];

				for (var x=1;x<=Object.keys(data[0]).length;x++)
				{
					var temp_x = Math.floor((Math.random() * 6) + 1);
					pertama_temp.push(temp_x);
				}
				$("#data_temp_pertama").val(pertama_temp);

				for (var x=1;x<=Object.keys(data[1]).length;x++)
				{
					var temp_x = Math.floor((Math.random() * 6) + 1);
					kedua_temp.push(temp_x);
				}
				$("#data_temp_kedua").val(kedua_temp);

				for (var x=1;x<=Object.keys(data[2]).length;x++)
				{
					var temp_x = Math.floor((Math.random() * 6) + 1);
					ketiga_temp.push(temp_x);
				}
				$("#data_temp_ketiga").val(ketiga_temp);

				for (var x=1;x<=Object.keys(data[3]).length;x++)
				{
					var temp_x = Math.floor((Math.random() * 6) + 1);
					keempat_temp.push(temp_x);
				}
				$("#data_temp_keempat").val(keempat_temp);
				
				window.open('<?php echo base_url();?>index.php/Main/cetak?data_all='+JSON.stringify(data_all)+'&data_after='+JSON.stringify(data),'_blank');
			},
			error:function(error){
				alert('ada masalah nih!!');
			}

		});
	});
</script>
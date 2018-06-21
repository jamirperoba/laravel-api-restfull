<!DOCTYPE html>
<html>
<head>
	<title>APIT REST - PHP</title>
	<script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=" crossorigin="anonymous"></script>
</head>
<body>
	
	<div>
		<h3>Utilize este comando no seu console request(query, method, data). </h3>		
	</div>

	<div>
		Examples: 
		<div>request('schools', 'GET', {})</div>
		<div>request('schools/2', 'GET', {})</div>		
		request('schools', 'POST', {
		name: "escola exemplo novo", 
		email: "exemplo@exemplonovo.com", 
		fone: "9999999", 
		address: "endereco exemplo novo", 
		created_at: "2018-05-02 00:00:00", 
		updated_at: "2018-05-03 00:20:16", 
		deleted_at: null 
	})
	<div>request('schools/5', 'DELETE', {})</div>
	<div>request('schools/12', 'PATCH', {'nome':'camisa classic - 12 - editado', 'valor':'49,90', 'tipo':'roupa', 'acao':'update'})</div>		
</div>

</body>
<script type="text/javascript">
	function request(query, method, data){
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
		jQuery.ajax({
			url:query,
			type: method,
			data: data,
			success: function( data ){
				if(data.length>=1){
					for(i=0;i<data.length; i++){
						console.log(data[i]);
					}
				}else{
					console.log(data);
				}
			},
			error: function (xhr, b, c) {
				console.log("xhr=" + xhr + " b=" + b + " c=" + c);
			}
		});		
	}
</script>
</html>
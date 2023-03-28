
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			color: #333333;
			background-color: #f5f5f5;
		}
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 5px;
			box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
		}
		.header {
			text-align: center;
			margin-bottom: 20px;
		}
		.header h1 {
			font-size: 24px;
			margin: 0;
			padding: 0;
		}
		.content {
			margin-bottom: 20px;
		}
		.footer {
			text-align: left;
			font-size: 12px;
			color: #999999;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>New Message!</h1>
		</div>
		<div class="content">
			<p> Name : {{ $data['name'] }}
            </p>
            <br/>
            <p> Email: {{ $data['email_sender'] }}
            </p>
                <br/>
            <p>  Message: {{ $data['message'] }}</p>
            
		</div>
		
	</div>
</body>
</html>


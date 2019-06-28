<html></!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>

            <table border="1" width="350px">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach($alldata as $d){?>
                    <tr>
                    <td><?=$d['user_name']?></td>
                    <td><?=$d['user_email_id']?></td>
                    <?php }?>
                </tr>
                </tbody>
                
            </table>
	
</table>
</body>
</html>

<html> 
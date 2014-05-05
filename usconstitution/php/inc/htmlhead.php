<link rel="stylesheet" href="css/constitution.css" type="text/css" />
<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    	var mybodyid = $('body').attr('id');
		var mynavid = '#nav' + mybodyid;
		/* e.g. for iii.php:
		mybodyid is 'Article3'
		mynavid  is '#navArticle3'
		*/
    $(mynavid).attr('id','iamhere');
	});
</script>
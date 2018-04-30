
function validate() {

			var result=true;
			var e=document.getElementsByName('email_id')[0];
			var l=e.value.length;
			var atindex=e.indexOf('@');
			var dotindex=e.lastIndexOf('.');
			if(atindex<1 || dotindex>=l-2 || dotindex-atindex<3)
				result=false;
			return(result);
			
		}
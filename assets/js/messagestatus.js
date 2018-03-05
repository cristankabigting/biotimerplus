var handleMessageStatus = function() {

	return {

        init: function() {
            this.initMessages();
        },
        
        initMessages: function() {
        	url = 'regulartime/messagestatus';
		    $.post(url,function(html){
		        $('#staffstatus').html(html);
		    });
        }

	};

}();

jQuery(document).ready(function() {    
   handleMessageStatus.init(); 
});
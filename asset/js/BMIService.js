var BMIService = {

	getIndex: function(weight, height, callback) {
		$.ajax({
		  url: 'services/bmi.action.php/bmi/' + weight + '/' + height,
		  success: function(result) {
		  	callback(result);
		  },
		  error: function() {
		  	callback(null);
		  }
		});
	},
	
	getDescription: function (index) {
		//TODO to be implemented
		return "";
	}
	
};
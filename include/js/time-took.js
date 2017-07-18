var Took = new function() {
	this.took = 0.1;
	this.tookParseFloat;
	this.element;

	this.tiktok = function() {
		this.took = this.took + 0.01;	
		this.tookParseFloat = parseFloat(this.took);

		$('#' +this.element).text("Took: " + Math.round(this.tookParseFloat * 1000) / 1000 + " s");
	}

	this.getTimeLoadPage = function(element) {
		this.element = element;
	}
};

var loopTime = setInterval('Took.tiktok()', 10);

$(window).bind("load", function() { 
	clearInterval(loopTime);
});


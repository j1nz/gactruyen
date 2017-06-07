var FontFamily = new function() {
	this.new_font = '';
	this.old_font = '';
	this.element = '';
	this.value = '';

	this.setElement = function(element) {
		this.element = element;
	};

	this.setNewFont = function(new_font) {
		this.new_font = new_font;
	};

	this.setOldFont = function(old_font) {
		this.old_font = old_font;
	}

	this.changeFont = function(new_font, element) {
		this.setNewFont(new_font);
		this.setElement(element);

		//document.getElementById(this.element).style.font-family(this.new_font);

		$('#' +this.element).css({'font-family' : this.new_font});
	};

	this.resetFont = function(old_font, element) {
		this.setOldFont(old_font);
		this.setElement(element);

		$('#' +this.element).css({'font-family' : this.old_font});
	};


};

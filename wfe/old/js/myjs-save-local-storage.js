class SettingReadMode {
	constructor (font_family, font_size, color_foreground, color_backgroud) {
		this.font_family = font_family;
		this.font_size = font_size;
		this.color_foreground = color_foreground;
		this.color_backgroud = color_backgroud;
	}

	saveToLocalStorage() {
		if(typeof(Storage) !== 'undefined') {
	    	localStorage.setItem('font_family', this.font_family);
	    	localStorage.setItem('font_size', this.font_size);
	    	localStorage.setItem('color_foreground', this.color_foreground);
	    	localStorage.setItem('color_backgroud', this.color_backgroud);
		} else {
		    throw new Error('Your browser not support local storage');
		}
	}

	saveToSessionStorage() {
		if(typeof(Storage) !== 'undefined') {
	    	sessionStorage.font_family = this.font_family;
	    	sessionStorage.font_size = this.font_size;
	    	sessionStorage.color_backgroud = this.color_backgroud;
	    	sessionStorage.color_foreground = this.color_foreground;
		} else {
		    throw new Error('Your browser not support local storage');
		}
	}

	getFromLocalStorage() {
		var variable = [];
		variable[0] = localStorage.getItem('font_family');
    	variable[1] = localStorage.getItem('font_size');
    	variable[2] = localStorage.getItem('color_foreground');
    	variable[3] = localStorage.getItem('color_backgroud');

    	return variable;
	}
}
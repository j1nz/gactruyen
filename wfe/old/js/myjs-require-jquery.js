if (typeof jQuery === 'undefined') {
	throw new Error('My project use Jquery framework of JavaScript and it requires jQuery')
} else {
	document.writeln('<script src="js/jscolor.js"></script>');
	document.writeln('<script src="js/change_font_size.js"></script>');
	document.writeln('<script src="js/jquery.mousewheel.js"></script>');
	document.writeln('<script src="js/myjs-save-local-storage.js"></script>');
}
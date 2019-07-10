window.addEvent('domready', function(){
			var accordion = new Accordion('h3.atStart', 'div.atStart', {
				opacity: false,
				onActive: function(toggler, element){
					toggler.setStyle('color', '#8CCBDB');
					toggler.setStyle('font-size', '13px');
					toggler.setStyle('text-decoration', 'none');
					toggler.setStyle('line-height', '1px');
					toggler.setStyle('margin-top', '5px');
					
				},
				
				
				
				
				
				
				onBackground: function(toggler, element){
					toggler.setStyle('color', '#3999B2');
					toggler.setStyle('font-size', '13px');
					toggler.setStyle('text-decoration', 'underline');
					toggler.setStyle('line-height', '1px');
					toggler.setStyle('margin-top', '5px');
									}
			}, $('accordion'));
});
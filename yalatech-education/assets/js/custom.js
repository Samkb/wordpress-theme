jQuery(document).ready(function($) {

	// number counter//

	(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
			}
		}(jQuery));

		jQuery(function ($) {
		  // custom formatting example
		  $('.count-number').data('countToOptions', {
			formatter: function (value, options) {
			  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
			}
		  });
		  
		  // start all the timers
		  $('.timer').each(count);  
		  
		  function count(options) {
			var $this = $(this);
			options = $.extend({}, options || {}, $this.data('countToOptions') || {});
			$this.countTo(options);
		}
	});

});

// scroll nav //

jQuery(document).ready(function($) {
  // Custom 
  var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop){
      stickyWrapper.height(stickyHeight);
      sticky.addClass("is-sticky");
    }
    else{
      sticky.removeClass("is-sticky");
      stickyWrapper.height('auto');
    }
  };

  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function() {
    var sticky = $(this);
    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass('sticky');
    
    // Scroll & resize events
    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
      stickyToggle(sticky, stickyWrapper, $(this));
    });
    
    // On page load
    stickyToggle(sticky, stickyWrapper, $(window));
	});
	
	$('#search-btn').on('click', function(e) {
	  e.preventDefault();
	  $("#search-wrapper").removeClass('hidden');
	  $('#search-btn').addClass('hidden');
	  $('#search-bar').focus();
	  
	  
	  $(document).mouseup(function(e) 
	{
	    var container = $("#search-wrapper");
	    
	    if (!container.is(e.target) && container.has(e.target).length === 0) 
	    {
	      $('#search-wrapper').addClass('hidden');
	      $('#search-btn').removeClass('hidden');
	    }
	});
	})

	$('#close-search').on('click', function(e) {
	  e.preventDefault();
	  $('#search-wrapper').addClass('hidden');
	  $('#search-btn').removeClass('hidden');
	})

	$('#search-go').on('click', function(e) {
	  e.preventDefault();
	  var searchString = $('#search-bar').val().replace(' ', '%20');
	  // window.location.replace("https://www.germe.com/search/node/" + searchString);
});
});

// search bar //




// testimonials slider //

jQuery(document).ready(function($){
    $("#testimonial-slider").owlCarousel({
    items:1,
    itemsDesktop:[1000,1],
    itemsDesktopSmall:[979,1],
    itemsTablet:[768,1],
    pagination:true,
    navigationText:["",""],
    slideSpeed:1000,
    autoPlay:true
	});
});



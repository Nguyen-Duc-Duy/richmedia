
// Dropdown multi select
$(window).on('load', function() {
    $('.btn-input').on('click', '.dropdown-menu li', function(event) {
        var $target = $(event.currentTarget);
        $target.closest('.btn-group')
            .find('[data-bind="label"]').text($target.text())
            .end()
            .children('.dropdown-toggle').dropdown('toggle');
        return false;
    });
});

var setLang = function(lang){
  $.cookie('lang',lang, { path: '/' });
  window.location='/';
  return false;
}  

$(document).ready(function() {

    // Menu Mobile
    $('#menu').on('click', '.panel-heading', function(e) {
        var $this = $(this);
        if (!$this.find('span.clickable:first').hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.find('span.clickable:first').addClass('panel-collapsed');
            $this.find('i').removeClass('sp-menu-up').addClass('sp-menu-down');
        } else {
            $('.panel-body').slideUp();
            $('i').removeClass('sp-menu-up').addClass('sp-menu-down');
            $('span.clickable').addClass('panel-collapsed');

            $this.parents('.panel').find('.panel-body').slideDown();
            $this.find('span.clickable:first').removeClass('panel-collapsed');
            $this.find('i').removeClass('sp-menu-down').addClass('sp-menu-up');
        }
    })

	// Disable zoom on embedded Google Maps
	$('.box-map').click(function(e) {
		$(this).find('iframe').css('pointer-events', 'all');
	}).mouseleave(function(e) {
		$(this).find('iframe').css('pointer-events', 'none');
	});

	// Disable dropdown auto close	
	$('.stop-click').click(function(e){
		e.stopPropagation();		
	})

	// Search form	
	var isOpen=false;
	$('.btn-search').click(function(){
		if(isOpen){
			var a = $(this).closest('form').find('.search-form input').val();
			console.log(a);
			if($.trim(a)!=''){
				$(this).closest('form').submit();
			}else{
				$('.search-form').animate({ width: 'hide' });
				isOpen=false;
				$('.overlay').removeClass('for-search');
			}			
		}else{
			$('.search-form').animate({ width: 'show' });
			isOpen=true;
			$('.overlay').addClass('for-search');
		}
		
		return false;
	})
	$(document).mouseup(function(){
		if(isOpen){
			$('.search-form').css('display','none');
			$('.overlay').removeClass('for-search');
		}
	})
	$('.search-form').mouseup(function(){
		return false;
	})

});

// JavaScript Document

$(document).ready(function(){
    setupRotator();
						   
   	$('#navWrapper li:first').addClass('navFirstLi');
//	$('#navWrapper > li:not(:has(ul)').last().addClass('navLastLi');
    $('#navWrapper > li').last().addClass('navLastLi');
	
	$('.entry table thead tr th:first').addClass('firstTH');
	$('.entry table tbody tr td:first-child').addClass('firstTD');

	$('tbody tr:nth-child(odd)').addClass('odd'); // zebra table
	

	
    $('#shareContainerDrop').hover(
      function () {
        $('#shareContainerWrap').show();
        $('#shareContainerDrop a:first').addClass('hovered');
      }, 
      function () {
        $('#shareContainerWrap').hide();
        $('#shareContainerDrop a:first').removeClass('hovered');
      }
    );

    $("#scrollable").scrollable({circular: true, mousewheel: true}).autoscroll({
        interval: 5000
    });

    $("#daybreak-slides").scrollable({circular: true, mousewheel: true}).autoscroll({
        interval: 5000
    });

    $("#old-course-slides").scrollable({circular: true, mousewheel: true}).autoscroll({
        interval: 5000
    });


    $("ul.tabs").tabs("div.panes > div");

    $("#tabwrap > ul.tabs").tabs("> .pane");

    $("#midland > ul.tabs").tabs("> .pane");

    $("#odessa > ul.tabs").tabs("> .pane");
	
	if (jQuery.browser.msie) {
		if(parseInt(jQuery.browser.version) == 6) {
			$('#commentTabs').tabs();
		}
	}
	if( (parseInt(jQuery.browser.version) == 7) || (parseInt(jQuery.browser.version) == 8) ) {
		$('#commentTabs').tabs();
	}
	else {
		$('#commentTabs').tabs({ fxFade: true, fxSpeed: 'fast' });		
	}

    var href = window.location.hash;

    if (href == '#tabs-4') {
        $('a.midland').click();
//        $('a[href="'+href+'"]').addClass('current');
    }
	
});

DD_belatedPNG.fix('img.ribbon');
DD_belatedPNG.fix('#footerLogo');

function setupRotator()
{
    if($('.textItem').length > 1)
    {
        $('.textItem:first').addClass('current').fadeIn(1000);
        setInterval('textRotate()', 4000);
    }
}

function textRotate()
{
    var current = $('#quotes > .current');
    if(current.next().length == 0)
    {
        current.removeClass('current').fadeOut(1000);
        $('.textItem:first').addClass('current').fadeIn(1000);
    }
    else
    {
        current.removeClass('current').fadeOut(1000);
        current.next().addClass('current').fadeIn(1000);
    }
}

function mailpage()
{
	mail_str = 'mailto:?subject=Check out the ' + document.title;
	mail_str += '&body=I thought you might be interested in the ' + document.title;
	mail_str += '. You can view it at, ' + location.href;
	location.href = mail_str;
}


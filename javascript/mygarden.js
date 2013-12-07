  $(document).ready(function(){
    Galleria.loadTheme('/myhome/javascript/jquery/galleria.classic.js');
        $('.images').galleria({
           image_crop:true,
           transition: 'fade',
        });
  }); 
//
$(function(){
	$('#listSingle li , #listBig li,#listSmall li').synchroMove({speed:'slow',complete:completeDo}) ;
	});


//
hs.graphicsDir = "/myhome/highslide/graphics/";
hs.wrapperClassName = 'wide-border';
hs.fadeInOut = true;
function completeDo(){
	$('#listSingle a , #listBig a,#listSmall a').click(function(){
		hs.expand(this);
		return false;
	});
};
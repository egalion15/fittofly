

var img1, img2, img3, urll, urlc, urlr,textleft,centerText,rightText;
var cli=0;

jQuery(document).ready(function() {

    setTimeout(next(),2000);

    $(".question").click(function() {
       $(this).next().toggle();
       
    });

 $("#show").mouseover(function(){
    $("#hwrap").css('display','block');
  });
$("#hiblock").mouseleave(function(){
  $("#hwrap").css('display','none');
});

 $("#filter").click(function(){
    $("#fliterblock").css("display",'block');
  });
$("#hidefilter").click(function(){
  $("#fliterblock").css("display",'none');
});

img1 = $('#left').attr('src');
img2 = $('#center').attr('src');
img3 = $('#right').attr('src');

urll = $('#urll').attr('href');
urlc = $('#urlc').attr('href');
urlr = $('#urlr').attr('href');

textleft = $('#text-left').html();
textCenter = $('#text-center').html();
textRight = $('#text-right').html();


});

function next()
{


if(cli !==2)
{
cli++;
}
else
{
cli=0;
}

switch (cli){
	case 0:
	$('#left').attr('src',img1);
	$('#center').attr('src',img2);
	$('#right').attr('src',img3);

	$('#urll').attr('href',urll);
	$('#urlc').attr('href',urlc);
	$('#urlr').attr('href',urlr);

    $('#text-left').html(textleft);
    $('#text-center').html(textCenter );
    $('#text-right').html(textRight);

	break;


	case 1:
	$('#left').attr('src',img2);
	$('#center').attr('src',img3);
	$('#right').attr('src',img1);

	$('#urll').attr('href',urlc);
	$('#urlc').attr('href',urlr);
	$('#urlr').attr('href',urll);

    $('#text-left').html(textCenter);
    $('#text-center').html(textRight );
    $('#text-right').html(textleft);


	break;
	case 2:
	$('#left').attr('src',img3);
	$('#center').attr('src',img1);
	$('#right').attr('src',img2);

	$('#urll').attr('href',urlr);
	$('#urlc').attr('href',urll);
	$('#urlr').attr('href',urlc);

    $('#text-left').html(textRight);
    $('#text-center').html(textleft );
    $('#text-right').html(textCenter);
	break;
	}




}

function perv()
{


if(cli==0)
{
cli=2;

}
else
{
cli--;
}
switch (cli){
	case 0:
$('#left').attr('src',img1);
	$('#center').attr('src',img2);
	$('#right').attr('src',img3);

	$('#urll').attr('href',urll);
	$('#urlc').attr('href',urlc);
	$('#urlr').attr('href',urlr);

    $('#text-left').html(textleft);
    $('#text-center').html(textCenter );
    $('#text-right').html(textRight);

	break;


	case 1:
	$('#left').attr('src',img2);
	$('#center').attr('src',img3);
	$('#right').attr('src',img1);

	$('#urll').attr('href',urlc);
	$('#urlc').attr('href',urlr);
	$('#urlr').attr('href',urll);

    $('#text-left').html(textCenter);
    $('#text-center').html(textleft );
    $('#text-right').html(textRight);


	break;
	case 2:
	$('#left').attr('src',img3);
	$('#center').attr('src',img1);
	$('#right').attr('src',img2);

	$('#urll').attr('href',urlr);
	$('#urlc').attr('href',urll);
	$('#urlr').attr('href',urlc);

    $('#text-left').html(textRight);
    $('#text-center').html(textleft );
    $('#text-right').html(textCenter);
	break;
	}

}
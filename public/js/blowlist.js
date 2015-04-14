/**
 * Created by gernest on 4/11/15.
 */

$(document).ready(function(){
    var footer=function(){
        var windowHeight=$(window).height();
        var docHeight=$(document).height();
        var currFooter=$('footer');
        if (docHeight<=windowHeight){
            p=windowHeight-docHeight;
            currFooter.offset({
                left:0,
                top:docHeight-currFooter.height()+p
            })
        }
    };
    footer();
    $(window).resize(function(){ footer()});

    var loadAnim=$('.loading');
    var lForm=$('form');
    var mainContent=$('.main-content');

    loadAnim.toggle();

    lForm.submit(function(e){
        e.preventDefault();
        lForm.toggle();
        loadAnim.toggle();
        var title=$('#f-title').val();
        var desc=$('#f-desc').val();
        var data={
            title:title,
            description:desc
        };
        $.post(lForm.attr('action'),data, function(resp){
            $('.loading .msg').text('data received   ');
            console.log(resp);
            mainContent.load('/index.php .main-content')
        });
    });
    $('.new-post').on('click', function(){
        loadAnim.toggle();
        lForm.toggle();
    });
    $('.single').on('click',function(){
        mainContent.load($(this).attr('r-path'))
    })

});
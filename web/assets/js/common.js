
function nav_click(obj) {
    a = $(obj).parent().attr('class')
    if (a=='nav-up-selected'){
        $(obj).parent().removeClass('nav-up-selected')
        // console.log(a)
    }else{
        $(obj).parent().addClass('nav-up-selected')
    }

}
$(function(){
// 头部导航


    if($(".you_like_end").length > 0) {
        // console.log()
        var emial_top=$(".you_like_end").offset().top -180;
        var bottom_top=$("footer").offset().top-620;
        $(window).scroll(function(){
            // console.log(bottom_top-$(window).scrollTop())
            if(emial_top<$(window).scrollTop())
            {
                $(".common_email_all").addClass('fix_email_top')
                $(".online").addClass('none')
            }
            if($(".common_email_all").offset().top<emial_top  || bottom_top<$(window).scrollTop())
            {
                $(".common_email_all").removeClass('fix_email_top')
                $(".online").removeClass('none')
            }
        })
    }



//     $url=window.location.pathname;
//     $("#nav_bar .navigation-v3 li a").each(function(){
//         $src=$(this).attr("href");
//         if($url==$src){
//             $(this).parent().addClass("checked")
//         }
//     });


    $(".common_nav li .item").mouseover(function(){
        $(".common_nav li .item").removeClass("checked")
        $(this).addClass("checked");
        var wdith=$(this).has(".text").width();
        $(this).children(".ico").css("width",wdith+"px");

        //获取要现实的内容
        var value=$(this).attr("data");
        $(".common_nav_list>li").addClass("none")
        $(".common_nav_list ."+value).removeClass("none")
        // alert(value)
    });

    jQuery(document).ready(function(){
        //点击菜单收起
        var screen=$(window).width();
        if (screen>780){
            // 导航置顶
            var top=$("#nav_bar").offset().top
            $(window).scroll(function(){
                if(top<$(window).scrollTop())
                {
                    $("#nav_bar").addClass('fix_top')
                }
                if($("#nav_bar").offset().top<top)
                {
                    $("#nav_bar").removeClass('fix_top')
                }
            })
        }else {
            // 导航置顶
            var top=$(".header_top").height()
            $(window).scroll(function(){
                if(top<$(window).scrollTop())
                {
                    $(".header_top").addClass('fix_top')
                    $('.search').addClass('none');
                }
                if($(".header_top").offset().top<top)
                {
                    $(".header_top").removeClass('fix_top')
                    $('.search').removeClass('none');
                }
            })

            $(".top_of_page").click( function () {
                $('html , body').animate({scrollTop: 0},'slow');
            });



            //小屏幕的js
              // 点击Filter
            var screen=$(window).width();
            var h=screen;
            $(".pageview").css("width",screen);
            $(".phone_imgs").css("height",h);


             $(".category_index .fiter").click(function () {
                 $(this).toggleClass("down");
                 $('.product_nav_list').toggleClass("none");
                 $(".category_index .category_nav_list").toggle();

             });
            $(".category_nav_list .content").click( function () {

                $(this).toggleClass("selected");
                if($(this).is(".selected")){
                    $(".category_nav_list .content").removeClass("selected");
                    $(this).addClass("selected")
                }else{
                    $(".category_nav_list .content").removeClass("selected")
                }

            });
            // 首页产品轮播
            $('#full-width-slider').royalSlider({

                arrowsNav: true,

                loop: false,

                keyboardNavEnabled: true,

                controlsInside: false,

                imageScaleMode: 'fill',

                arrowsNavAutoHide: false,

                autoScaleSlider: true,

                autoScaleSliderWidth: 960,

                autoScaleSliderHeight: 960,

                controlNavigation: 'bullets',

                thumbsFitInViewport: false,

                navigateByClick: true,

                startSlideId: 0,

                autoPlay: false,

                transitionType:'move',

                globalCaption: true,

                deeplinking: {

                    enabled: true,

                    change: false

                },



                imgWidth: 800,

                imgHeight: 800

            });


        }

        var qcloud={};
        $('[_t_nav]').hover(function(){
            var _nav = $(this).attr('_t_nav');
            clearTimeout( qcloud[ _nav + '_timer' ] );
            qcloud[ _nav + '_timer' ] = setTimeout(function(){
                $('[_t_nav]').each(function(){
                    $(this)[ _nav == $(this).attr('_t_nav') ? 'addClass':'removeClass' ]('nav-up-selected');
                });
                $('#'+_nav).stop(true,true).slideDown(200);
            }, 150);
        },function(){
            var _nav = $(this).attr('_t_nav');
            clearTimeout( qcloud[ _nav + '_timer' ] );
            qcloud[ _nav + '_timer' ] = setTimeout(function(){
                $('[_t_nav]').removeClass('nav-up-selected');
                $('#'+_nav).stop(true,true).slideUp(200);
            }, 150);
        });


        $(".nav_button").click(function(){
            screen=$(window).height()
            $("header .p_r").slideToggle("fast");
            $("#fix-r").slideToggle("fast");

            $("#nav_bar").slideToggle("fast");
            var d=$(".nav_button").attr("data");
            if (d==0){
                $(".nav_button").attr("data",1);
                $(".header_top").addClass("hmenu-canvas-background");
                $(".nav_button").addClass("two");
                $(".nav_button").removeClass("one");
                $(".zhuti").css("height",screen)
            }else {
                $(".nav_button").attr("data",0);
                $(".header_top").removeClass("hmenu-canvas-background");
                $(".nav_button").removeClass("two");
                $(".nav_button").addClass("one");
                $(".zhuti").css("height",'auto')
            }

        });
    });
    // 头部语言切换
    $(".lag .t2").mouseover(function(){
        $(".lag .t2 .other").removeClass("none")
    });
    $(".lag .t2").mouseout(function(){
        $(".lag .t2 .other").addClass("none")
    });
})




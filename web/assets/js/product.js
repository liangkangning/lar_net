    $(function() {


        $k=1;
        $(".filter-sort__head-title").click(function(){
            $(".category_nav_list").slideToggle("slow");
            $k++;
            if ($k%2==0){
                $(".filter-sort__arrow").addClass('up')
            }else
                {
                    $(".filter-sort__arrow").removeClass('up')
                }
        });


    })
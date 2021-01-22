

$(document).ready(function(){

    $("#minMenu a").click(function(){
        const theid=$(this).attr("href");
        const val =$(theid).offset().top-$("#scMenu").innerHeight()+1;

        $("html").animate(
            {scrollTop: val},1000,"swing"
        );
    });

    $(document).scroll(function(){
        spy();
    });

    function spy(){
        const nowat=$(document).scrollTop();

        $("section").each(function(){
            const offset=$(this).offset().top;
            const height=$(this).innerHeight();

            if(offset <= nowat && nowat <offset+height) {
                console.log(this);
                $('#minMenu a').removeClass('active');
                $(`#minMenu a[href='#${id}']`).addClass('active');
            }
        })
    }

    new WOW().init();
});



    


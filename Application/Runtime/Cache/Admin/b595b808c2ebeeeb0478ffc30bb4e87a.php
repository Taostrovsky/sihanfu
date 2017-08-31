<?php if (!defined('THINK_PATH')) exit();?><includle file="public::header" />

		<iframe name="content" src="<?php echo U('Index/main');?>" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;">


		</iframe>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script>
    $().ready(function(){
        var item = $(".public-ifame-item");

        for(var i=0; i < item.length; i++){
            $(item[i]).on('click',function(){
                $(".ifame-item-sub").hide();
                if($(this.lastElementChild).css('display') == 'block'){
                    $(this.lastElementChild).hide()
                    $(".ifame-item-sub li").removeClass("active");
                }else{
                    $(this.lastElementChild).show();
                    $(".ifame-item-sub li").on('click',function(){
                        $(".ifame-item-sub li").removeClass("active");
                        $(this).addClass("active");
                    });
                }
            });
        }
    });
</script>
</body>
</html>
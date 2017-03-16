<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<!--操作成功 start-->   
<div class="change_done bd_db">  
    <p>  
        <span class="ico_big ico_done"></span>  
        <span class="fw_b fs_14"><?php echo isset($message)?$message:'操作成功' ?></span>  
    </p>  
    <p class="line_30">现在去，  
        <?php   
            foreach($links as $key=>$link){
                $url=$link[1];  
                echo Html::a($link[0], $url, ['class' => 'links']);
                echo "&nbsp;&nbsp;"; 
            }  
        ?>  
    </p>  
    <p class="c_666 ml40">该页将在 <span id='setouttime'>3</span>秒后自动跳转!</p>  
</div>   
<!--操作成功 end-->          
  
<script language=javascript>  
var int=self.setInterval("countdown()",1000);  
function countdown(){  
    var t=document.getElementById("setouttime").innerHTML-1;  
    document.getElementById("setouttime").innerHTML=t;  
    if(t===0){  
        location='<?php $url=$links[0][1]; echo  Url::to("$url");?>';  
    }  
} 
</script>  
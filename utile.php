Utile :


<?php

 include 'zipper.php'; 


    if ( $mansion->created_at == $mansion->updated_at) {
    // echo '<span style="position: absolute; width:100%; height:100%;background-color:rgba(70, 130, 180, 0.28)"></span>';
    echo '<p style="color:#337ab7;"><i style="margin-left:10px;color:#337ab7;" class="fa fa-envelope-o fa-1x fa-spin " aria-hidden="true">  </i> NEW</p> ';
    
    } 
    if (stripos($mansion->linea_status, '入力済み') !== FALSE) { 
        
        // $('linea_status').css('background-color','blue');
        echo '<p class="linea-status" style="background-color:rgba(0, 0, 255, 0.25);width:80%;">'.$mansion->linea_status.'</p>';

    }elseif (stripos($mansion->linea_status, '入力作業中') !== FALSE){
        echo '<p class="linea-status" style="width:80%;background-color:rgba(255, 0, 0, 0.25);">'.$mansion->linea_status.'</p>';
    
    }elseif (stripos($mansion->linea_status, 'サイト作成中') !== FALSE){
        echo '<p class="linea-status" style="width:80%;background-color:rgba(0, 128, 0, 0.25);">'.$mansion->linea_status.'</p>';
    
    }elseif (stripos($mansion->linea_status, '確認中') !== FALSE){
        echo '<p class="linea-status" style="width:80%;background-color:rgba(128, 128, 128, 0.23);">'.$mansion->linea_status.'</p>';
    
    }elseif (stripos($mansion->linea_status, '公開完了') !== FALSE){
        echo '<p class="linea-status" style="width:80%;background-color:rgba(255, 255, 0, 0.47);">'.$mansion->linea_status.'</p>';
    
    }elseif (stripos($mansion->linea_status, '削除済み') !== FALSE){
        echo '<p class="linea-status" style="width:80%;background-color:rgba(255, 165, 0, 0.32);">'.$mansion->linea_status.'</p>';
    }
    // }else{
    //     echo '<i style="padding: 4px 1px;color:#337ab7;width:80%;background-color:white;" class="fa fa-envelope-o fa-1x" aria-hidden="true"> NEW </i>';
    // }
                                           
                        
   

 



 ?>

 <a href="{{ route('mansions.edit',$mansion) }}">



{!! Form::open(['route' => ['mansions.destroy', $mansion->id], 'method' => 'delete']) !!}

{!! Form::submit('Delete', array('class' => 'del', 'onClick' => 'return confirm("You are about to delete a record. This cannot be undone. Are you sure?");')) !!}

{!! Form::close() !!}  


<?php
    if (!empty($mansions->previousPageUrl())){
         echo '<a href="'.$mansions->previousPageUrl().'">PREV <i class="fa fa-arrow-left" aria-hidden="true"></i></a>' ; 
    }
    if (!empty($mansions->nextPageUrl())){
         echo '<a href="'.$mansions->nextPageUrl().'"><i class="fa fa-arrow-right" aria-hidden="true"></i> NEXT</a>' ; 
    }
?>  
<script type="text/javascript"> function telechargerZip(nom){ location = nom+'.zip'; } </script>
<button><i  class="fa fa-download fa-2x" aria-hidden="true" onclick="telechargerZip('images/'+ <?php echo $mansion->id; ?>)"></i></button>


 <?php
    if (!empty($mansions->previousPageUrl())){
        echo '<a href="'.$mansions->previousPageUrl().'">PREV <i class="fa fa-arrow-left" aria-hidden="true"></i></a>' ; 
    }
    if (!empty($mansions->nextPageUrl())){
        echo '<a href="'.$mansions->nextPageUrl().'"><i class="fa fa-arrow-right" aria-hidden="true"></i> NEXT</a>' ; 
    }
?>   


<script>
$(function(){
    
        $('#oeil').click(function() {
        $(this).toggleClass('fa-chevron-down');
        $(this).toggleClass('fa-chevron-up');
    });
});
</script>


<script>

	$(function(){
		
		if( $.trim( $('#room2_description').html() ).length ) {
			$("#collapse2").removeClass("collapse");
		}

		if( $.trim( $('#room3_description').html() ).length ) {
			$("#collapse3").removeClass("collapse");
		}

		if( $.trim( $('#room4_description').html() ).length ) {
			$("#collapse4").removeClass("collapse");
		}
		if( $.trim( $('#room5_description').html() ).length ) {
			$("#collapse5").removeClass("collapse");
		}

	});

</script>


<?php
    $dir = 'images/'.($mansion->id).'/room5/*.{jpg,jpeg,gif,png}';
    $files = glob($dir,GLOB_BRACE); 
    foreach($files as $image){ 
       $image = '/Outline/public/'. $image;
       echo '<img style="padding:2px;" class="img-responsive" src="'.$image.'" alt="">';}
?>
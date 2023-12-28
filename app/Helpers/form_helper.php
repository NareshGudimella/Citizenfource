<?php
function display_error($feild){
  if(isset($errors)){
  if(session()->has('errors')){
     
           return "<span  class='text-danger'>". session()->get('errors')[$feild] ."</span>";
      }
      else{
       
        return false;
      }
}
}





<?php

namespace app\web_view_components\template;

use app\resources\urls;

class header
{



static public function hdf1($pageName,$hint,$back = null)
{

    $element = new element();
    $back = empty(trim($back))?'':$element::box('class="icn icn-chevron-left" style="padding: 4px; box-shadow: 0 0 2px #ccc; position:absolute; left:0px;
                    display:inline-block;"','');

    return $element->setElementName('header')
             ->setAttr("style='padding:5px;background:#fff; position:relative;' ")
             ->create(
              $back
              .$element::box('style="text-align:center; padding: 5px 0;
                 font-size:30px; font-weight:bolder;"', 
                web_link::render()
              )
              .misc::break(2)
              .$element::box('style="text-align:center; padding: 10px 0; font-size:30px; 
              font-weight:bolder;  "', $pageName)
              .$element::box('Style="text-align:center; color:#808080"',$hint)
           
            ) .misc::break(2);  
}




  static  function header(){


    $urlSignUp = urls::signup;
    $urlLogin = urls::signup;
    $urlSignUp = urls::signup;
    $urlHome = urls::home;
    $urlabout = urls::signup;
      $urlFaq = urls::signup;
      $urlSignUp = urls::signup;


    return "<header style=' padding: 20px 10px;  z-index: 3;position: fixed; top: 0; left: 0; right: 0'>
                    <nav style=''>
                
                     <div class='left'>
                      
                      company name
                 
                      </div>
                     
                     <div class='right'>
                      <a>Contact us</a>
                       <a>About us</a>
                        <a>Investment Plan</a>
                        <a href='$urlLogin'>Login</a>
                         <a href='$urlSignUp' style='padding:6px;background: #e5d519; color: #fff'>Sign up</a>
                      </div> 
                    </nav>
        </header><div style='margin-bottom: 60px'></div>";


    }
}
<?php

namespace app\web_view_components\template;

use app\lib\request;
use app\lib\string_m;
use app\resources\urls;

trait template_t2
{


    static function nomineeForm($data,$errors,$edit = false){


        $name =isset($data['name'])?$data['name']: request::getPostReqString('name');
        $character =isset($data['character'])?$data['character']: request::getPostReqString('character');
        $vote =isset($data['vote'])?$data['vote']: request::getPostReqString('vote');
        $description =isset($data['description'])?$data['description']: request::getPostReqString('description');
        $link = isset($data['link'])?$data['link']:request::getPostReqString('link');
        $username =isset($data['namespace'])?$data['namespace']: request::getPostReqString('username');


        $usernameInfo = isset($errors['username']['message'])?"<div style='color: #F00'>".$errors['username']['message']."</div>":'';
        $nameInfo = isset($errors['name']['message'])?"<div style='color: #F00'>".$errors['name']['message']."</div>":'';
        $voteInfo = isset($errors['vote']['message'])?"<div style='color: #F00'>".$errors['vote']['message']."</div>":'';
        $descriptionInfo = isset($errors['description']['message'])?"<div style='color: #F00'>".$errors['description']['message']."</div>":'';
        $linkInfo = isset($errors['link']['message'])?"<div style='color: #F00'>".$errors['link']['message']."</div>":'';
        $characterInfo = isset($errors['character']['message'])?"<div style='color: #F00'>".$errors['character']['message']."</div>":'';
        $imageInfo = isset($errors['image']['message'])?"<div style='color: #F00'>".$errors['image']['message']."</div>":'';

if ($edit){
    $submitName = 'edit';
    $submitValue = 'Save';
    $imageRequired  = '';
    $imagePlaceholder = 'Upload new image of nominee to change old one';
}else{
    $imageRequired  = 'required';
    $submitName = 'create';
    $submitValue = 'Add nominee';
    $imagePlaceholder = 'Upload an image of nominee';

}
return form_container::center(

    "
            <form method='post' enctype='multipart/form-data'>

            <label class='nomiCreateLabel'>
                <input class='nomiInput' name='name' required placeholder='actor name' value='$name'>
            $nameInfo
            </label>
            <label class='nomiCreateLabel'>
                <input class='nomiInput' name='character' placeholder='Character name' value='$character'>
            $characterInfo
            </label>

            <label class='nomiCreateLabel'>
                <input class='nomiInput' type='number' required name='vote' placeholder='Number of votes' value='$vote'>
            $voteInfo
            </label>

            <label class='nomiCreateLabel'>
                <input class='nomiInput' name='description' required placeholder='Description' value='$description'>
                $descriptionInfo
            </label>

            <label class='nomiCreateLabel'>
                <input class='nomiInput' name='link'  required type='url' placeholder='Wiki Link' value='$link'>
            $linkInfo
            </label>

            <label class='nomiCreateLabel'>
                <input class='nomiInput' name='username'  type='text' placeholder='username' value='$username' required>
                    $usernameInfo
            </label>
            
            <label class='nomiCreateLabel'>
            $imagePlaceholder
        <input class='nomiInput' accept='image/png, image/jpeg' type='file' name='image' $imageRequired>
                $imageInfo
            </label>
         <input class='nomiInput' type='submit' name='$submitName'  value='$submitValue'>
           </form>");
    }



    static function adminNominee($data){


        $name = isset($data['name'])?$data['name']:'';
        $image =  isset($data['image'])?urls::nomineePhoto.$data['image']:'';
        $username = isset($data['namespace'])?$data['namespace']:'';
        $character = isset($data['character'])?$data['character']:'';
        $description = isset($data['description'])?$data['description']:'';
        $link = isset($data['link'])?$data['link']:'';
        $vote = isset($data['vote'])?$data['vote']:'';
        $urlEditNominee = urls::nomineeEdit.$username;
        $urlDelete = urls::nomineeDelete.$username;
        $description  =string_m::ellipsisString($description,100);
        return "
         <div style='position:relative; margin: 5px auto;
         min-height: 600px;  display: inline-block;
         width: 80%; 
         max-width: 500px;
                                    background-image:url($image);
                                    background-position: center;
                                    background-size: cover;
                                     background-color: #ccc'
         >
                    
                      
                   
                       <div style='position: absolute; bottom: 0;padding: 5px; color:#fff; background-color: rgba(0,0,0,0.4)'>
                            <div><span style='color:#0aa0ff'>Name:</span> $name</div>
                            <div><span style='color:#0aa0ff'>username:</span> $username</div>
                            <div><span style='color:#0aa0ff'>character Name:</span>  $character</div>
                            <div><span style='color:#0aa0ff'>Description:</span>  $description</div>
                            <div><span style='color:#0aa0ff'>Wiki Link:</span>  $link</div>
                             <div><span style='color:#0aa0ff'>Votes:</span>  $vote</div>
                         <div> 
                         <br>
                                <a href='$urlEditNominee' style='color: #fff;padding: 7px; border:#0aa0ff solid'>Edit</a> 
                               <a href='$urlDelete' style='color: #fff;padding: 7px; border:#0aa0ff solid'>Delete</a>
                          <br>
                         </div>
                        </div>
                    <div style='clear:both;'></div>
                    
                
                    </div>
        ";
    }

}
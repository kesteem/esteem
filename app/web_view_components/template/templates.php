<?php

namespace app\web_view_components\template;

use app\lib\formatter;
use app\lib\request;
use app\object\user;
use app\resources\urls;

class templates
{
    public static $mark ='';
    use template_t2;
    use error;



    static function box($cont,$style='',$attr=''){

        return "<div style='$style' $attr>$cont</div>";
    }

    static function referralBonus(){

        return  "<div class='w' style='
             padding: 30px;
             display: inline-block;
             border-radius: 7px;
              margin: 10px;
             height: 170px;
               background-image: linear-gradient(10deg,#d8e4f1,#e7e9ea); '>

<div style='border-radius: 10px;
text-align: center;
 background: #0aa0ff; margin: auto; color: #fff; width: 80%'>

            <div style='font-weight:bold; display: inline-block;margin: 5px'>
            0 
             <div style='font-weight: lighter'>Referrals</div>
             </div>
             
             <div style='font-weight:bold; display: inline-block; margin: 5px'>
            $0.00
        <div style='font-weight: lighter'>Bonus Earn</div>
             </div>

    </div><br>
    <div style='text-align: center'>All bonus earning are withdrawable</div>
    </div>";

    }


static function referalLink(){
   return "
<div style='display: flex; flex-wrap: wrap; justify-content: center'>


 <div style='
            margin: 10px;
             padding: 7px;
             border-radius: 7px;
              max-width: 500px; 
             height: 170px;
               background-image: linear-gradient(10deg,#74b5d9,#0aa0ff); '>
<div style='color: #fff; font-weight: lighter; '>Referrals</div>

<div style='font-weight: bold; color: #fff; margin: 5px 0'>
        Build Wealth With Friends And Family
</div>

<div style='color: #fff; font-weight: lighter; margin: 5px 0'>
        Invite your friends to siteName, and you earn when they place
         their first trade of $10 or more
</div>

<div style=' margin: 15px 0'>
        <a style='padding: 5px;border-radius: 7px; background: #fff; color: #0aa0ff'>
           Referral Code
        </a>
</div>
</div>";
}

static function wallet(){

    return    "
            <div style='display: inline-block; padding: 7px;
             border-radius: 7px; max-width: 300px; 
min-height: 150px; background-image: linear-gradient(120deg,#000,#808080); text-align: center'>
<div style='text-align:left; color: #fff; font-weight: lighter'>Total wallet Balance</div>

<div style='color: #fff;font-size:53px;font-weight: bolder'>$0.00</div>
<br>
<div style='font-size:16px;'>
        <a style='color: #fff'>Withdraw</a> 
        <a style='padding: 5px;border-radius: 7px; background: #fff; color: #0aa0ff'>
            Fund Your Wallet
        </a>
</div>
</div>

           
</div>
";
}

    static function portfolioBanner(){

     return   "
                  
<div class='w' style='display: inline-block; padding: 7px; border-radius: 7px; width: 80%; max-width: 500px; 
 min-height: 150px; background-image: linear-gradient(120deg,#000,#808080); margin: 10px'>
<div style=' color: #fff;text-align: left; font-weight: lighter'>Investment Portfolio Value</div>

<div style='color: #fff;font-size:53px;font-weight: bolder'>$1,000,000.00</div>
<div style='color: #0f0;font-size:16px;'>today: +$50,000.00</div>
<div style='text-align: right'>
<a style='padding: 5px;border-radius: 7px; background: #fff; color: #0aa0ff; font-weight: lighter'>
         Investment
        </a>
</div>

            </div>";

    }

    static function profileContainer($title,$content){

        $title = empty($title)?request::getUrlController().'/'.request::getUrlAction():$title;
        return      header::header()
            ."<br/><br/><br/>"

            . "
<div style='padding: 10px; max-width: 1100px; margin: 100px auto;'>
     $title
         <br><br>
          <div style=' 
          position: fixed; 
          bottom: 70px ;
          width:95%; 
          max-width: 500px; 
          left: 50%;
          z-index: 4;
          background-color:#fff; 
          transform: translateX(-50%);
          padding:8px  10px; display: flex; 
          justify-content: space-between; 
          border-radius: 10px;
          box-shadow: 0 0 4px 5px #ccc'>
          
        <a class='icn icn-user'></a>
        <a class='icn icn-notification1'></a>
        <a class='icn icn-portfolio'></a>
        <a class='icn icn-wallet'></a>
        
        </div>
          
          ".

$content
            ."<div style=' margin: 20px 0; text-align: center'>
          </div>
          </div>
          ";
    }

    static function formTitle($title,$hint){

        return"<div style='text-align: center; font-size: 20px;
 font-weight: bold'>
$title</div>
<div style='text-align: center; font-weight: lighter; margin: 10px 0'>$hint</div>

";
    }

    static function reportBlock($info, $width ="350px"){
        $message = isset($info['message'])?$info['message']:'';
        $flag = isset($info['flag'])?$info['flag']:'';
        $color = $flag?"#f00":'#0f0';
        $background = $flag?'#E9C9C9':'#C9E9CB';
        if (empty($message)) return null;

        return "<div style='padding: 8px; text-align: center; width:$width; margin: auto; border-radius: 8px;
 background: $background; color: $color'>  
 $message
</div>";
        
    }

    public static function mark($title)
    {
        return "<div style='  margin: 10px 0;'>
 
      <div style='text-align: center; 
      font-size: 30px;
    
      padding: 5px 0; font-weight: bold'>
       $title 
    </div>
      <div style='display:block; 
                        margin:auto; 
                        border-top:solid #00a3e0;
                        width: 150px; '>
           </div>
      
      </div>";

    }

    static function whereDoWeInvest(){

        return   "<div class='whereInvests'>
      
      <div  class='whereInvest'>
      
           <div id='crypto' class='whereInvestImage'> </div>
      
          <div class='title'>
                
                Cryptocurrencies
          </div>
      
          <div class='subtitle'>
          The rise of crypto
         </div>
         
         <div class='more'>
          ince 2008 bitcoin and other crypto currencies have taken the world by storm with 
          rapid increase in the value of crypto currency. It's 
          now more than ever that our company is investing in this
           extremely profitable market to bring massive returns 
           on investment to our clients
         </div>
      
       </div>
      
      <div  class='whereInvest'>
      
           <div id='agriculture' class='whereInvestImage'> </div>
      
          <div class='title'>
                
                Cryptocurrencies
          </div>
      
          <div class='subtitle'>
          The rise of crypto
         </div>
         
         <div class='more'>
          ince 2008 bitcoin and other crypto currencies have taken the world by storm with 
          rapid increase in the value of crypto currency. It's 
          now more than ever that our company is investing in this
           extremely profitable market to bring massive returns 
           on investment to our clients
         </div>
      
       </div>
      
      
        <div  class='whereInvest'>
      
           <div id='realestate' class='whereInvestImage'> </div>
      
          <div class='title'>
                
                Real Estate
          </div>
      
          <div class='subtitle'>
          Real Estate Business
         </div>
         
         <div class='more'>
          ince 2008 bitcoin and other crypto currencies have taken the world by storm with 
          rapid increase in the value of crypto currency. It's 
          now more than ever that our company is investing in this
           extremely profitable market to bring massive returns 
           on investment to our clients
         </div>
      
       </div>
       
     
         <div  class='whereInvest'>
      
           <div id='renewenergy' class='whereInvestImage'> </div>
      
          <div class='title'>
                
                Renewenergy
          </div>
      
          <div class='subtitle'>
          The rise of crypto
         </div>
         
         <div class='more'>
          ince 2008 bitcoin and other crypto currencies have taken the world by storm with 
          rapid increase in the value of crypto currency. It's 
          now more than ever that our company is investing in this
           extremely profitable market to bring massive returns 
           on investment to our clients
         </div>
      
       </div>
      
      
      
       <div  class='whereInvest'>
      
           <div id='telecommunication' class='whereInvestImage'> </div>
      
          <div class='title'>
                
                Telecommunication
          </div>
      
          <div class='subtitle'>
          The rise of crypto
         </div>
         
         <div class='more'>
          ince 2008 bitcoin and other crypto currencies have taken the world by storm with 
          rapid increase in the value of crypto currency. It's 
          now more than ever that our company is investing in this
           extremely profitable market to bring massive returns 
           on investment to our clients
         </div>
      
       </div>
       
       
        
       <div  class='whereInvest'>
      
           <div id='cargo_ship' class='whereInvestImage'> </div>
      
          <div class='title'>
                
               cargo ship
          </div>
      
          <div class='subtitle'>
          The rise of crypto
         </div>
         
         <div class='more'>
          ince 2008 bitcoin and other crypto currencies have taken the world by storm with 
          rapid increase in the value of crypto currency. It's 
          now more than ever that our company is investing in this
           extremely profitable market to bring massive returns 
           on investment to our clients
         </div>
      
       </div>
       
</div>";
    }

    static function profitCal(){


        return "
     
     <div class='profitCalculator'>
    
             <div style='display: inline-block'>
                        <div> Investment Plan</div>
                 
                        <select style='padding:0 25px'>
                        <option>Starter</option>
                        <option>Starter</option>
                        <option>Starter</option>
                        <option>Starter</option>
                  
                        </select>
                      
             </div> 
             
             
              <div style='display: inline-block'>
                   <div> Enter Amount</div>
               <input>
             </div> 
             
            <div style='display: inline-block'>
                   <div> Profit margin</div>
                   <div>ejwrewkr</div>
             </div>
             
             <div style='display: inline-block'>
                   <div> Amount</div>
                   <div>ejwrewkr</div>
             </div>
             
     </div>
      ";

}

    static function investmentPlan($plan=''){


        $id = arrayGet($plan,'id');
        $title = arrayGet($plan,'title');
        $minAmout = arrayGet($plan,'minAmount');
        $maxAmount = arrayGet($plan,'maxAmount');
        $duration = arrayGet($plan,'duration');
        $profit = arrayGet($plan,'profit');

        $adminOpt = user::$admin?"<div>
<a style='color: #0aa0ff;margin: 0 7px; display: inline-block' href='".urls::investmentEdit.$id."'>Edit</a> 
<a style='color: #0aa0ff;margin: 0 7px;display: inline-block' href='".urls::investmentDelete.$id."'>Delete</a> 
</div>":'';

        return  "
             
           
                       
                   <div class='InvestmentPlan'>
                  <div class='title'>$title</div>
                  <div class='min icn-clock'> Days: $duration </div>
                  <div class='min icn-arrow-minimise'> Min: \$$minAmout</div>
                  <div class='min icn-arrow-maximise'> Max: \$$maxAmount</div>
                  <div class='min profile icn-chart-bar'> Profit: %$profit</div>
                      $adminOpt
                 <a class='investLink' href='".urls::invest.$id."'>Invest</a>
                  </div>
     
";

    }

    static function homeBanner(){

        return "<div style='height: 50vh; background-color: #cccccc; position: relative'>


            <div style='position: absolute; 
                    background-color: rgba(0,0,0,0.4);
                    color: #fff;
                    padding:20px; 
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);'>
            this is some write up to animate for with image background
        </div>

      </div>";
    }

   static function whyChoseUse(){

 return "<div class='reasons'>
      
      
            <div class='reason'>
              <div style='' class='icn icn-wallet icon '></div>
              <div class='title'>INSTANT WITHDRAWALS</div>
              <div  class='more'>
                    Get your payment instantly as soon 
                    as you request it! Minimum withdrawal is $0.1. There is no fee for 
                    withdrawals of hourly interest.
             </div>
           </div>
      
       <div class='reason'>
              <div class='icn icn-f-secure icon'></div>
              <div class='title'>SECURITY</div>
              <div class='more'>
                  Our Company works with security professionals with years of experience.
                   So you can trust your investments are in safe hands
             </div>
           </div>
           
         
           <div class='reason'>
              <div class='icon icn icn-phone' style='color: #bfa6cb'></div>
              <div class='title'>REGISTERED COMPANY</div>
              <div class='more'>
                  Our Company works with security professionals with years of experience.
                   So you can trust your investments are in safe hands
             </div>
           </div>
           
           
          
           
            <div class='reason'>
              <div class='icon icn icn-user-group' style='color: #0aa0ff'></div>
              <div class='title'>PROFESSIONAL TEAM</div>
              <div class='more'>
                    Get your payment instantly as soon 
                    as you request it! Minimum withdrawal is $0.1. There is no fee for 
                    withdrawals of hourly interest.
             </div>
           </div>
      
      
      </div>" ;

    }

}
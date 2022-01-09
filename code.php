function translateToWords($number) 
{
    function split_number_bynum($number,$reverse=true){
        if($reverse) $number=strrev($number);
      
        $chiffres=array();
      
        $numbercopy=$number;
        while($numbercopy>=10){
          $chiffres[]=$lastchiffre=$numbercopy%10;
          $numbercopy=($numbercopy-$lastchiffre)/10;
        }
        $chiffres[]=$numbercopy;
      
        return ($chiffres);
      }
      
      
      function split_number_bystring($number,$reverse=true){
        if($reverse) $number=strrev($number);
      
        $chiffres=array();
      
        $numbercopy=$number;
        while(strlen($numbercopy)>1){
          $chiffres[]=substr($numbercopy,-1,1);
          $numbercopy=substr($numbercopy,0,strlen($numbercopy)-1);
        }
        $chiffres[]=$numbercopy;
      
        return ($chiffres);
    }
    $text='';
    $chiffres=split_number_bystring($number,false);

    if(isset($chiffres[6])){
        if($chiffres[6]==1){
            $text=$text."un million ";
        }
        if($chiffres[6]==2){
            $text=$text."deux million ";
        }
        if($chiffres[6]==3){
            $text=$text."trois million ";
        }
        if($chiffres[6]==4){
            $text=$text."quatre million ";
        }
        if($chiffres[6]==5){
            $text=$text."cinq million ";
        }
        if($chiffres[6]==6){
            $text=$text."six million ";
        }
        if($chiffres[6]==7){
            $text=$text."sept million ";
        }
        if($chiffres[6]==8){
            $text=$text."huit million ";
        }
        if($chiffres[6]==9){
            $text=$text."neuf million ";
        }
        
    }

    if(isset($chiffres[5])){
        if($chiffres[5]==1 && $chiffres[4]==0){
            $text=$text."cent mille ";
        }
        if($chiffres[5]==1 && $chiffres[4]!=0){
            $text=$text."cent ";
        }
        if($chiffres[5]==2){
            $text=$text."deux cent ";
        }
        if($chiffres[5]==3){
            $text=$text."trois cent ";
        }
        if($chiffres[5]==4){
            $text=$text."quatre cent ";
        }
        if($chiffres[5]==5){
            $text=$text."cinq cent ";
        }
        if($chiffres[5]==6){
            $text=$text."six cent ";
        }
        if($chiffres[5]==7){
            $text=$text."sept cent ";
        }
        if($chiffres[5]==8){
            $text=$text."huit cent ";
        }
        if($chiffres[5]==9){
            $text=$text."neuf cent ";
        }
        
    }

    if(isset($chiffres[4])){
        if($chiffres[4]==1){
            if($chiffres[3]==0){
                $text=$text."dix mille ";
            }
            if($chiffres[3]==7 || $chiffres[3]==8 || $chiffres[3]==9){
                $text=$text."dix ";
            }
            if($chiffres[3]==1){
                $text=$text."onze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==2){
                $text=$text."douze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==3){
                $text=$text."treize mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==4){
                $text=$text."quatorze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==5){
                $text=$text."quinze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==6){
                $text=$text."seize mille ";
                $chiffres[3]=0;
            }
        }
        if($chiffres[4]==2){
            if($chiffres[3]==0){
                $text=$text."vingt mille ";
            }
            if($chiffres[3]!=0){
                $text=$text."vingt ";
            }
        }
        if($chiffres[4]==3){
            if($chiffres[3]==0){
                $text=$text."trente mille ";
            }
            if($chiffres[3]!=0){
                $text=$text."trente ";
            }
        }
        if($chiffres[4]==4){
            if($chiffres[3]==0){
                $text=$text."quarante mille ";
            }
            if($chiffres[3]!=0){
                $text=$text."quarante ";
            }
        }
        if($chiffres[4]==5){
            if($chiffres[3]==0){
                $text=$text."cinquante mille ";
            }
            if($chiffres[3]!=0){
                $text=$text."cinquante ";
            }
        }
        if($chiffres[4]==6){
            if($chiffres[3]==0){
                $text=$text."soixante mille ";
            }
            if($chiffres[3]!=0){
                $text=$text."soixante ";
            }
        }
        if($chiffres[4]==7){
            if($chiffres[3]==0){
                $text=$text."soixante dix mille ";
            }
            if($chiffres[3]==7 || $chiffres[3]==8 || $chiffres[3]==9){
                $text=$text."soixante dix ";
            }
            if($chiffres[3]==1){
                $text=$text."soixante et onze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==2){
                $text=$text."soixante douze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==3){
                $text=$text."soixante treize mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==4){
                $text=$text."soixante quatorze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==5){
                $text=$text."soixante quinze mille ";
                $chiffres[3]=0;
            }
            if($chiffres[3]==6){
                $text=$text."soixante seize mille ";
                $chiffres[3]=0;
            }
        }
        if($chiffres[4]==8){
            $text=$text."quatre vingts ";
        }
        if($chiffres[4]==9){
            $text=$text."quatre vingt dix ";
        }
        
    }
    
    if(isset($chiffres[3])){
        if($chiffres[3]==1){
            $text=$text."un mille ";
        }
        if($chiffres[3]==2){
            $text=$text."deux mille ";
        }
        if($chiffres[3]==3){
            $text=$text."trois mille ";
        }
        if($chiffres[3]==4){
            $text=$text."quatre mille ";
        }
        if($chiffres[3]==5){
            $text=$text."cinq mille ";
        }
        if($chiffres[3]==6){
            $text=$text."six mille ";
        }
        if($chiffres[3]==7){
            $text=$text."sept mille ";
        }
        if($chiffres[3]==8){
            $text=$text."huit mille ";
        }
        if($chiffres[3]==9){
            $text=$text."neuf mille ";
        }
        
    }

    if(isset($chiffres[2])){
        if($chiffres[2]==1){
            $text=$text."cent ";
        }
        if($chiffres[2]==2){
            $text=$text."deux cent ";
        }
        if($chiffres[2]==3){
            $text=$text."trois cent ";
        }
        if($chiffres[2]==4){
            $text=$text."quatre cent ";
        }
        if($chiffres[2]==5){
            $text=$text."cinq cent ";
        }
        if($chiffres[2]==6){
            $text=$text."six cent ";
        }
        if($chiffres[2]==7){
            $text=$text."sept cent ";
        }
        if($chiffres[2]==8){
            $text=$text."huit cent ";
        }
        if($chiffres[2]==9){
            $text=$text."neuf cent ";
        }
        
    }

    if(isset($chiffres[1])){
        if($chiffres[1]==1){
            if($chiffres[0]==0 || $chiffres[0]==7 || $chiffres[0]==8 || $chiffres[0]==9){
                $text=$text."dix";
            }
            if($chiffres[0]==1){
                $text=$text."onze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==2){
                $text=$text."douze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==3){
                $text=$text."treize";
                $chiffres[0]=0;
            }
            if($chiffres[0]==4){
                $text=$text."quatorze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==5){
                $text=$text."quinze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==6){
                $text=$text."seize";
                $chiffres[0]=0;
            }
        }
        if($chiffres[1]==2){
            $text=$text."vingt";
        }
        if($chiffres[1]==3){
            $text=$text."trente";
        }
        if($chiffres[1]==4){
            $text=$text."quarante";
        }
        if($chiffres[1]==5){
            $text=$text."cinquante";
        }
        if($chiffres[1]==6){
            $text=$text."soixante";
        }
        if($chiffres[1]==7){
            
            if($chiffres[0]==0 || $chiffres[0]==7 || $chiffres[0]==8 || $chiffres[0]==9){
                $text=$text."soixante dix";
            }
            if($chiffres[0]==1){
                $text=$text."soixante onze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==2){
                $text=$text."soixante douze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==3){
                $text=$text."soixante treize";
                $chiffres[0]=0;
            }
            if($chiffres[0]==4){
                $text=$text."soixante quatorze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==5){
                $text=$text."soixante quinze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==6){
                $text=$text."soixante seize";
                $chiffres[0]=0;
            }
        }
        if($chiffres[1]==8){
            $text=$text."quatre vingts";
        }
        if($chiffres[1]==9){
            if($chiffres[0]==0 || $chiffres[0]==7 || $chiffres[0]==8 || $chiffres[0]==9){
                $text=$text."quatre vingt dix";
            }
            if($chiffres[0]==1){
                $text=$text."quatre vingt onze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==2){
                $text=$text."quatre vingt douze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==3){
                $text=$text."quatre vingt treize";
                $chiffres[0]=0;
            }
            if($chiffres[0]==4){
                $text=$text."quatre vingt quatorze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==5){
                $text=$text."quatre vingt quinze";
                $chiffres[0]=0;
            }
            if($chiffres[0]==6){
                $text=$text."quatre vingt seize";
                $chiffres[0]=0;
            }
        }
        
    }

    if(isset($chiffres[0])){
        if($chiffres[0]==1){
            if($chiffres[1]==0){
                $text=$text." un";
            }
            if($chiffres[1]==8 || $chiffres[1]==9){
                $text=$text."-un";
            }
            if($chiffres[1]==2 || $chiffres[1]==3 || $chiffres[1]==4 || $chiffres[1]==5 || $chiffres[1]==6){
                $text=$text." et un";
            }
        }
        if($chiffres[0]==2){
            $text=$text." deux";
        }
        if($chiffres[0]==3){
            $text=$text." trois";
        }
        if($chiffres[0]==4){
            $text=$text." quatre";
        }
        if($chiffres[0]==5){
            $text=$text." cinq";
        }
        if($chiffres[0]==6){
            $text=$text." six";
        }
        if($chiffres[0]==7){
            $text=$text." sept";
        }
        if($chiffres[0]==8){
            $text=$text." huit";
        }
        if($chiffres[0]==9){
            $text=$text." neuf";
        }
        
    }

    

    echo $text;
}

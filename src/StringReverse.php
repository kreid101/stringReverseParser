<?php 
namespace App;

class StringReverse
{
    private $sentence;
    private $words;
    private $fsent;
    public function revstring(string $str): string
    {
        $this->sentence = preg_replace('/\s+/', ' ', trim($str));
        $this->words=explode(" ",$this->sentence);
        foreach($this->words as $word)
        {
            $this->fsent[]=$word;
        }
        foreach($this->fsent as $indx=>$fs)
        {
            
            $a=preg_split('//u',$fs, null, PREG_SPLIT_NO_EMPTY);   
            $arrend=count($a)-1;
            $arrstart=0;
            while($arrstart <= $arrend)
            {
                if(ctype_punct($a[$arrstart])){
                    $arrstart++;
                }
                elseif(ctype_punct($a[$arrend])){
                    $arrend--;
                       
                }
                else{
                    $temp = $a[$arrstart];
                    if(mb_strtoupper($a[$arrstart])===$a[$arrstart] && mb_strtolower($a[$arrend]) === $a[$arrend] ){
                        $a[$arrstart] = mb_strtoupper($a[$arrend]);
                        $a[$arrend] = mb_strtolower($temp);
                        $arrstart++;
                        $arrend--;
                    }
                    elseif( mb_strtoupper($a[$arrend])=== $a[$arrend ] && mb_strtolower($a[$arrstart])===$a[$arrend] )
                    {
                        $a[$arrstart] = mb_strtolower($a[$arrend]);
                        $a[$arrend] = mb_strtoupper($temp);
                        $arrstart++;
                        $arrend--;
                    }
                    else{
                            $a[$arrstart] = $a[$arrend];
                            $a[$arrend] = $temp;
                            $arrstart++;
                            $arrend--;
                    }
                
                   
                }
            }


            $this->fsent[$indx]=implode("",$a);

            
        }


        return(implode(" ",$this->fsent));


    }
   

}
?>
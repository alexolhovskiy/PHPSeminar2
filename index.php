
<?php 

    ///////////////////////////////////////////////////////////////////////////////
    
    
    echo '<br>';
    echo 'Task1<br>';
    
    
    function mathOperation($arg1, $arg2, $operation) {
        switch($operation){
            case '+':return $arg1+$arg2;
            case '-':return $arg1-$arg2;
            case '*':return $arg1*$arg2;
            case '/':return $arg1/$arg2;
        }
    }
    
    $a=1;
    $b=2;
    
    echo $a.'+'.$b.'='.mathOperation($a,$b,'+').'<br>';
    echo $a.'-'.$b.'='.mathOperation($a,$b,'-').'<br>';
    echo $a.'*'.$b.'='.mathOperation($a,$b,'*').'<br>';
    echo $a.'/'.$b.'='.mathOperation($a,$b,'/').'<br>';
    
    
    ///////////////////////////////////////////////////////////////////////////////
    
    
    echo '<br>';
    echo 'Task2<br>';
    
    
    $arr=array('Московская область'=> ['Москва', 'Зеленоград', 'Клин'],
               'Ленинградская область'=> ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'], 
               'Рязанская область'=>['Рязань','Шацк','Ряжск']);
    
    foreach($arr as $k=>$value){
        echo $k.':';
        foreach($value as $v){
            echo $v.',';
        }
        echo '<br>';
    }
    
    
    ///////////////////////////////////////////////////////////////////////////////
    
    
    echo '<br>';
    echo 'Task3<br>';
    
    $letters=array('а'=> 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д'=>'d','е'=>'ye','ж'=>'zh','з'=>'ze','и'=>'i','й'=>'y',
                   'к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'pe', 'р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f',
                   'х'=>'kh','ц'=>'ts','ч'=>'shch','ш'=>'sh','щ'=>'sch','ы'=>'y','э' => 'e', 'ю' => 'yu', 'я' => 'ya',
                   '.'=>'.',','=>',','!'=>'!',' '=>' ');
    
    function transliteration($str){
        global $letters;
        $res_arr=[];
        $temp=mb_str_split(mb_strtolower($str));
        foreach($temp as $letter){
            $res_arr[]=$letters[$letter];
        }
        return implode('',$res_arr);
    }
    
    $str='Выпить с горя! Где же кружка...'; 
    echo $str.' : '.transliteration($str).'<br>';
    
    ////////////////////////////////////////////////////////////////////
    
    
    echo '<br>';
    echo 'Task4<br>';
    
    function power($val, $pow){
        if($pow>0){
            return $val*power($val, $pow-1);
        }else{
            return 1;
        }
    }
    
    $val=5;
    $pow=5;
    echo $val.'^'.$pow.'='.power($val, $pow).'<br>';
    
    
    /////////////////////////////////////////////////////////////////////
    
    
    
    echo '<br>';
    echo 'Task5<br>';
    
    $minutes=[0=>'минут',1=>'минута',2=>'минуты',3=>'минуты',4=>'минуты',5=>'минут',6=>'минут',7=>'минут',8=>'минут',9=>'минут'];
    $hours=[0=>'часов',1=>'час',2=>'часа',3=>'часа',4=>'часа',5=>'часов',6=>'часов',7=>'часов',8=>'часов',9=>'часов'];
    
    date_default_timezone_set('Europe/Minsk');
    $time=new DateTime();
    $h=$time->format('H');
    $i=$time->format('i');
   
    echo $h.' '.((intdiv($h,10)===1)?$hours[6]:$hours[$h%10]).' '.$i.' '.((intdiv($i,10)===1)?$minutes[6]:$minutes[$i%10]);
    
    
    
    
    
    
    
    
    
?>
<?php


namespace App\classes;


class Example
{
    public $student=[];
    public function  index()
    {
        $this->student=[
            0=>[
                'name'  =>'shuvo',
                'email' =>'shuvo@gmail.com',
                'mobile'=>[
                    'mobile'=>'12345',
                    'mobile1'=>'7811'
                ]
            ],
            1=>[
                'name'  =>'sreejon',
                'email' =>'sreejon@gmail.com',
                'mobile1'=>'12346',
                'mobile'=>[
                    'mobile'=>'12346',
                    'mobile1'=>'7812'
                ]
            ],
            2=>'bitm',
            3=>[
                'name'  =>'sehon',
                'email' =>'sehon@gmail.com',
                'mobile'=>'12347',
                'mobile3'=>'7810',
            ]

        ];
        echo '<pre>';
        //print_r($this->student);
        var_dump($this->student);





//        foreach ($this->student as $key=> $item)
//        {
//            if(is_array($item))
//            {
//                foreach ($item as $value)
//
//                {
//                    if(is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else
//                    {
//                        echo $value.' ';
//                    }
//
//                }
//
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>';
//        }




//        foreach ($this->student as $key=> $item)
//        {
//            if($key==0)
//
//        {
//            echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//            break;
//        }
//        }
        //echo $this->student[0]['name'];
//        $this->student=[10,20,'BITM',10.20,false,true];
//       // echo $this->student[2];
//        foreach ($this->student as $role=>$student)
//        {
//            echo 'index no-'. $role. 'value-'.$student.'<br/>';
//        }
    }

}
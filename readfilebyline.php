<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/6/13
 * Time: 15:47 174916310
 */
class Read_File_Line{
    public function star(){
        $filename='E:/log/INTERFACE_2018-06-05_CHECK_T.log/INTERFACE_2018-06-05_CHECK_T.log';
        $resultfile='E:/log/result.log';
        $fp = fopen($filename, 'r');
        if($fp){
            while (!feof($fp)){
                $res=fgetss($fp);
                $pos=stristr ($res,'174916310');
                if($pos){
                    file_put_contents($resultfile,$res,FILE_APPEND );
                }
            }
        }else{
            echo "打开文件失败，请检查文件路径是否正确，路径和文件名不要包含中文";
        }
        fclose($fp);
    }
}
$read=new Read_File_Line();
$read->star();
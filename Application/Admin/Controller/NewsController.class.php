<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function listNews(){
        $mysqlhandel = M("news");
        $newsResult = $mysqlhandel->field("id, newstitle")->select();
        //var_dump($newsResult);
        //exit;
        $this->assign(array(
            'newtitles'=>$newsResult
        ));

        $this->display();
    }

    public function addNews(){
        $postValue = I("post.");
        if($postValue) {
            $mysqlhandel = M("news");
            $pubtime = time();
            $postValue['pubtime'] = $pubtime;
            if($mysqlhandel->add($postValue)) {
                echo "添加成功";
                exit;
            }

        }
        $this->display();
    }

    public function editNew() {
        $newId = I("get.id");
        //var_dump($newId);
        //exit;
        if($newId) {
            $mysqlhandel = M("news");
            //var_dump($newId);
            if($mysqlhandel) {
                $newResult = $mysqlhandel->field('newstitle, newscontext')->where("id = $newId")->select();
                var_dump($newResult);
                exit;
                var_dump($mysqlhandel->_sql());

                //var_dump($newResult);
                exit;
            }
        }
        $this->display();
    }
}
<?php

/**
 * News
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class News extends BaseNews {

    public function addNews(array $data) {
        $errors = $this->__validateNews($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $set_in_homepage = false;
            if (isset($data['set_in_homepage'])) {
                $set_in_homepage = true;
            }

            $n = new News();
            $n->lang_id = $data['lang_id'];
            $n->title = $data['title'];
            $n->author = $data['author'];
            $n->teaser = $data['teaser'];
            $n->alias_url = $data['alias_url'];
            $n->description = $data['description'];
            $n->image = $errors['news_image'];
            $n->set_in_homepage = $set_in_homepage;
            $n->news_date = date('ymdHis', strtotime($data['news_date']));
            $n->created_at = date('ymdHis');
            $n->order_flag = intval($this->getMaxOrder()) + 1;
            $n->save();

            return $errors;
        }
    }

    private function getMaxOrder() {
        $q = Doctrine_Query::create()
                ->select('MAX(n.order_flag) as max_order')
                ->from('News n')
                ->setHydrationMode(Doctrine::HYDRATE_SCALAR)
                ->fetchOne();

        return $q['n_max_order'];
    }

    public function updateNews(array $data) {
        $errors = $this->__validateNews($data);
        if ($errors['error_flag']) {
            return $errors;
        } else {
            $set_in_homepage = false;
            if (isset($data['set_in_homepage'])) {
                $set_in_homepage = true;
            }

            Doctrine_Query::create()
                    ->update('News n')
                    ->set('n.title', '?', $data['title'])
                    ->set('n.author', '?', $data['author'])
                    ->set('n.teaser', '?', $data['teaser'])
                    ->set('n.alias_url', '?', $data['alias_url'])
                    ->set('n.description', '?', $data['description'])
                    ->set('n.image', '?', $errors['news_image'])
                    ->set('n.set_in_homepage', '?', $set_in_homepage)
                    ->set('n.news_date', '?', date('ymdHis', strtotime($data['news_date'])))
                    ->set('n.updated_at', '?', date('ymdHis'))
                    ->where('n.id =?', $data['id'])
                    ->execute();

            return $errors;
        }
    }

    public function deleteNews($news_id) {
        Doctrine_Query::create()
                ->update('News n')
                ->set('n.deleted', '?', TRUE)
                ->where('n.id =?', $news_id)
                ->execute();
    }

    private function __validateNews($news_data) {
        $errors = array();
        $error_flag = false;
        if (!required($news_data['title'])) {
            $errors['title'] = 'Please write in news title';
            $error_flag = true;
        }
        if (!required($news_data['author'])) {
            $errors['author'] = 'Please write in news author';
            $error_flag = true;
        }
        if (!required($news_data['teaser'])) {
            $errors['teaser'] = 'Please write in news teaser';
            $error_flag = true;
        }
        if (!required($news_data['alias_url'])) {
            $errors['alias_url'] = 'Please write in blog URL';
            $error_flag = true;
        }
        if (!required($news_data['description'])) {
            $errors['description'] = 'Please write in news brief';
            $error_flag = true;
        }
        if (isset($news_data['set_in_homepage']) && !required($news_data['set_in_homepage'])) {
            $errors['set_in_homepage'] = 'Please write in caption header';
            $error_flag = true;
        }

        if (isset($news_data['id'])) {
            if (isset($_FILES['userfile']) && !empty($_FILES['userfile']['name'])) {
                $upload_data = upload_file('news', array('jpg|png|jpeg|gif'), '2028');
                if ($upload_data['error_flag']) {
                    $errors['image'] = $upload_data['errors'];
                    $error_flag = true;
                } else {
                    $errors['news_image'] = $upload_data['upload_data']['file_name'];
                }
            } else if ($news_data['image']) {
                $errors['news_image'] = $news_data['image'];
            }
        } else {
            $upload_data = upload_file('news', array('jpg|png|jpeg|gif'), '2028');
            if ($upload_data['error_flag']) {
                $errors['image'] = $upload_data['errors'];
                $error_flag = true;
            } else {
                $errors['news_image'] = $upload_data['upload_data']['file_name'];
            }
        }


        $errors['error_flag'] = $error_flag;

        return $errors;
    }

    public function news_sorting(array $data) {
        $n = 0;
        for ($i = count($data['order_flag'])-1; $i >=0 ; $i--) {
            Doctrine_Query::create()
                    ->update('News n')
                    ->set('n.order_flag', '?', $n)
                    ->where('n.id =?', $data['order_flag'][$i])
                    ->execute();
            $n++;
        }
    }

}

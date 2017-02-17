<?php

class News {

    public static function getNewsById($id) {
        //$host='localhost';
        //$dbname='mvc_demo';
        //$username='root';
        //$password='';
        //$cont=new PDO('mysql:host=localhost;dbname=mvc_demo',$username,$password);
        $cont = DB::getConnect();

        if ($cont) {
            $resul = $cont->query('SELECT*FROM news WHERE id=' . $id);
            $newsItem = $resul->fetch();
            return $newsItem;
        }
    }

    public static function getNewsList() {
        //$host='localhost';
        //$dbname='mvc_demo';
        //$username='root';
        //$password='';
        //$cont=new PDO('mysql:host=localhost;dbname=mvc_demo',$username,$password);
        $cont = DB::getConnect();
        if ($cont) {
            $resul = $cont->query('SELECT id,title,date,content FROM news ORDER by date DESC');
            $newsList = array();
            $i = 0;
            while ($row = $resul->fetch()) {
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['content'] = $row['content'];
                $i++;
            }
            return $newsList;
        }
    }

    public static function deleteNewsById($id) {
        $cont = DB::getConnect();
        $sql = 'DELETE FROM news WHERE id=:id';
        $result = $cont->prepare($sql);

        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
    }

    public static function greatNews($date, $title, $content) {

        $cont = DB::getConnect();

        $sql = 'INSERT INTO news (date, title, content) VALUES (:date,:title,:content)';
        $result = $cont->prepare($sql);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);

        $result->execute();
        return $cont->lastInsertId();
    }

    public static function updateNewsById($id, $date, $title, $content) {
        $cont = DB::getConnect();
        $sql = 'UPDATE news SET date=:date, title=:title, content=:content WHERE id=:id';
        $result = $cont->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':content', $content, PDO::PARAM_STR);
        return $result->execute();
    }

    public static function Image($id) {
        $noImage = 'no-image.gif';
        $path = '/upload/images/news/';
        $pathImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathImage)) {
            return $pathImage;
        }
        return $path . $noImage;
    }

}

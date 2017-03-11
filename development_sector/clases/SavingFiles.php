<?php
/**
 * Created by PhpStorm.
 * User: sergeypeskov
 * Date: 24.02.17
 * Time: 14:45
 */

date_default_timezone_set('Europe/Moscow');

class SavingFiles extends BaseParams
{

    /**
     * формат записи файлов в БД
     * !! Сейчас size не используется
     * Расположение формат:  upload/ <size> / <date: d-m-Y> / <rand> - <name>.ext
     * в БД: <date: d-m-Y> / <rand> - <name>.ext
     */
    public function fileSave(){

        if($this->files === Null) return true;

        $path = $_SERVER['DOCUMENT_ROOT'].'/templates/beez3/upload/';

        #создание директории
        $this->createFolder($path);

        $this->savePath = date('d-m-Y',time()) . '/'. rand(100,999) . '-' . $this->rus2translit();

        $globalPath = $path . $this->savePath;


        // Загрузка файла перемещение из tmp в папку с файлами
        if (@copy( $this->files['tmp_name'] ,
            $globalPath)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Создание директории для записи файла
     * @param $path string путь DOCUMENT_ROOT до папки с файлами
     * @return bool boolean true/false
     * @throws Exception
     */
    public function createFolder($path){
        $getDirectories = scandir($path);
        array_shift($getDirectories);
        array_shift($getDirectories);

        if(!in_array(date('d-m-Y',time()),$getDirectories)){
            if(mkdir($path. date('d-m-Y',time()), 0755)){
                return true;
            }else{
                throw new \Exception('Не удалось создать директорию');
            }
        }
        return false;
    }

    /**
     * Транслит
     * @return mixed
     */
    public function rus2translit()
    {

        // Русский алфавит
        $rus_alphabet = array(
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
            'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
            'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
            'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
            'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
            'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
        );

        // Английская транслитерация
        $rus_alphabet_translit = array(
            'A', 'B', 'V', 'G', 'D', 'E', 'IO', 'ZH', 'Z', 'I', 'I',
            'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F',
            'H', 'C', 'CH', 'SH', 'SH', '', 'Y', '', 'E', 'IU', 'IA',
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
            'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
            'h', 'c', 'ch', 'sh', 'sh', '', 'y', '', 'e', 'iu', 'ia'
        );

        $this->files['name'] = str_replace($rus_alphabet, $rus_alphabet_translit, $this->files['name']);
        $this->files['name'] = preg_replace('/[\s-_,\'\"]+/', '', $this->files['name']);
        return filter_var($this->files['name'],FILTER_SANITIZE_STRING);
    }
}


<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: groge
 * Date: 6/7/2018
 * Time: 6:49 PM
 */
class Devq

{
    public $return_data = "";

    public function __construct()
    {
        $this->return_data = "Hello World";

    }

    public function getrandomq()
    {
        try {
            $content = file_get_contents('https://raw.githubusercontent.com/fortrabbit/quotes/master/quotes.json');
            $min = 0;
            $max = 189;
            if ($content == false) {
                return "Only half of programming is coding. The other 90% is debugging. - Unknown";

            }
            if ($content == true) {
                $data = json_decode($content,true);
                $rand = rand($min, $max);
                $selected = $data[$rand]['text'] . ' - ' . $data[$rand]['author'];
                return $selected;
            }
        } catch (Exception $e) {
            // Handle exception
        }
    }

}
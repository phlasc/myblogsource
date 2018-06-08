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

    }

    public function getrandomq()
    {
        try {
            $content = file_get_contents('https://raw.githubusercontent.com/fortrabbit/quotes/master/quotes.json');
            // gets the contents of the site
            $min = 0;
            // min value to generate
            $max = 189;
            // max value to generate
            if ($content == false) {
                return "Only half of programming is coding. The other 90% is debugging. - Unknown";
                // this is a default to output incase the website is down for whatever reason
            }
            if ($content == true) {
                $data = json_decode($content,true);
                // assign variable name to decoded json string from contents of site
                $rand = rand($min, $max);
                // generate number between set value of $min and $max
                $selected = $data[$rand]['text'] . ' - ' . $data[$rand]['author'];
                // grab text and append a - between that and author
                return $selected;
                // return selected that is now the text . " - " . author to display
            }
        } catch (Exception $e) {
            // handle exexption buttt no
        }
    }

}
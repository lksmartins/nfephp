<?php

/**
 * Class PrintMDFeTest
 * @author Roberto L. Machado <linux.rlm at gmail dot com>
 */
use NFePHP\MDFe\PrintMDFe;

class PrintMDFeTest extends PHPUnit_Framework_TestCase
{
    public $mdfe;
    
    public function testeInstanciar()
    {
        $configJson = file_get_contents(dirname(dirname(__FILE__)) . '/fixtures/config/fakeconfig.json');
        $json = json_decode($configJson);
        $aDocFormat = (array) $json->aDocFormat;
        $this->mdfe = new PrintMDFe($aDocFormat);
    }
}

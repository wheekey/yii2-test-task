<?php

namespace app\components\currency;

use yii\httpclient\XmlParser;

class CurrencyXmlParser extends XmlParser implements CurrencyXmlParserInterface
{

    /**
     * Метод, который вернет текущий курс валют относительно рубля
     * @return array Возвращает массив с полями name, rate, insert_dt
     */
    public function getCurrencies(): array
    {
        $result = [];
        $rawData = $this->convertXmlToArray(file_get_contents('http://www.cbr.ru/scripts/XML_daily.asp'))['Valute'];

        foreach ($rawData AS $row)
        {
            $result[] = ['name' => $row['CharCode'], 'rate' => (float)str_replace(",", ".", $row['Value']), 'insert_dt' => date('Y-m-d H:i:s')];
        }
        return $result;
    }
}
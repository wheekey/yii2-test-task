<?php


namespace app\components\currency;


use app\models\Currency;

class CurrencyService
{
    /**
     * @var CurrencyXmlParserInterface
     */
    private $currencyXmlParser;


    /**
     * CurrencyService constructor.
     * @param CurrencyXmlParserInterface $currencyXmlParser
     */
    public function __construct(CurrencyXmlParserInterface $currencyXmlParser)
    {
        $this->currencyXmlParser = $currencyXmlParser;
    }

    public function updateCurrencies()
    {
        $currenciesRaw = $this->currencyXmlParser->getCurrencies();

        foreach ($currenciesRaw as $currencyRaw)
        {
            /**
             * @var $model Currency
             */
            if (($model=Currency::find()->where(['name' => $currencyRaw['name']])->one())===null)
            {
                $model = new Currency();
                $model->attributes = $currencyRaw;
                $model->save();
            }
            else
            {

                $model->updateAttributes($currencyRaw);
                $model->update();
            }

        }

    }

}
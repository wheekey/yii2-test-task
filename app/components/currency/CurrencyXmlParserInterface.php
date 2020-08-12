<?php

namespace app\components\currency;

interface CurrencyXmlParserInterface
{
    public function getCurrencies(): array;
}
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\components\currency\CurrencyService;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command updates currencies data in the table 'currency'
 *
 */
class CurrencyController extends Controller
{
    /**
     * @var CurrencyService
     */
    private $currencyService;

    /**
     * CurrencyController constructor.
     * @param CurrencyService $currencyService
     */
    public function __construct($id, $module, $config = [],CurrencyService $currencyService)
    {
        parent::__construct($id, $module, $config);
        $this->currencyService = $currencyService;
    }


    /**
     * This command updates currencies data in the table 'currency'
     * @return int Exit code
     */
    public function actionIndex()
    {
        $this->currencyService->updateCurrencies();

        return ExitCode::OK;
    }
}

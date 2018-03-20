<?php

namespace App\Shop\Controller;

/**
 * Class PmController
 * @package App\Shop\Controller
 */
class PmController extends InitController
{
    public function actionIndex()
    {
        if (empty(session('user_id')) || $GLOBALS['_CFG']['integrate_code'] == 'ecshop') {
            return redirect('./');
        }

        uc_call("uc_pm_location", [session('user_id')]);
    }
}

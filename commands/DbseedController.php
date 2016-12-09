<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use yii\console\Controller;
use Yii;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DbseedController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */

    public $sql;
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";
        $db = Yii::$app->db;
        $transaction = $db->beginTransaction();

        try {
            $a = $db->createCommand()->batchInsert('role', ['value'], [
                ['user'],
                ['admin']
            ])->execute();

            $transaction->commit();
        }catch(\Exception $e) {
            $transaction->rollBack();
            throw $e;
        }
    }
}

<?php
namespace app\widgets;

use Yii;
use yii\helpers\Json;
use app\assets\NotificationAsset;
/**
 * Notification widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash.
 *
 * @author Shahnawaz Khan <shahnawaz.khan@synradar.com>
 * 
 */
class Notification extends \yii\base\Widget
{
    
    public $alertTypes = [
        'popup-error'   => 'toast-danger',
        'popup-danger'  => 'toast-danger',
        'popup-success' => 'toast-success',
        'popup-info'    => 'toast-info',
        'popup-warning' => 'toast-warning'
    ];
    
    public $closeButton = [];

    public function init() {
        NotificationAsset::register($this->getView());
        parent::init();
    }

    public function run(){
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $flash) {
            if (!isset($this->alertTypes[$type])) {
                continue;
            }

            foreach ((array) $flash as $i => $message) {
                $this->setMessage(substr($type,6),$message);
            }

            $session->removeFlash($type);
        }
    }

    private function setMessage($type, $message, $title = null) {
        $notification = [
            'type'      => $type,
            'position'  => 'bottom-center',
            'timeOut'   => 'false',
            'message' => $message
        ];
        $opject = Json::encode($notification);
        $this->view->registerJs("notification.successMessage($opject);");
    }
}

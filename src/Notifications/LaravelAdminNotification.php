<?php

namespace Encore\Admin\Notifications;

use Encore\Admin\Admin;

class LaravelAdminNotification extends \Illuminate\Notifications\Notification
{

    const SUCCESS_TYPE = 'success';

    const ERROR_TYPE = 'error';

    const WARNING_TYPE = 'warning';

    const INFO_TYPE = 'info';

    /**
     * The notification available types text CSS.
     *
     * @var array
     */
    public static $types = [
        self::SUCCESS_TYPE => 'alert-success',
        self::ERROR_TYPE => 'alert-danger',
        self::WARNING_TYPE => 'alert-warning',
        self::INFO_TYPE => 'alert-info',
    ];

    /**
     * The component used for the notification.
     *
     * @var string
     */
    public $component = 'message-notification';

    /**
     * The icons used for the notification.
     *
     * @var string
     */
    public $icon = 'exclamation-circle';

    /**
     * The message used for the notification.
     *
     * @var string|null
     */
    public $message;

    /**
     * The text used for the call-to-action button label.
     *
     * @var string
     */
    public $actionText = 'View';

    /**
     * The URL used for the call-to-action button.
     *
     * @var string|null
     */
    public $actionUrl;

    /**
     * The notification's visual type.
     *
     * @var string
     */
    public $type = 'success';

    /**
     * Set the icon used for the notification.
     *
     * @param  string  $icon
     * @return $this
     */
    public function icon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Set the message used for the notification.
     *
     * @param  string  $message
     * @return $this
     */
    public function message($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Set the URL used for the notification call-to-action button.
     *
     * @param  string  $url
     * @return $this
     */
    public function url($url)
    {
        $this->actionUrl = $url;

        return $this;
    }

    /**
     * Set the action text and URL used for the notification.
     *
     * @param  string  $text
     * @param  string  $url
     * @return $this
     */
    public function action(string $text, $url)
    {
        $this->actionText = $text;
        $this->actionUrl = $url;

        return $this;
    }

    /**
     * Set the notification's visual type.
     *
     * @param  string  $type
     * @return $this
     */
    public function type(string $type = 'success')
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toNova()
    {
        return [
            'component' => $this->component,
            'icon' => $this->icon,
            'message' => $this->message,
            'actionText' => __($this->actionText),
            'actionUrl' => $this->actionUrl,
            'type' => $this->type,
            'iconClass' => static::$types[$this->type],
        ];
    }

    /**
     * Get the notification channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return [LaravelAdminChannel::class];
    }

    public static function make(...$arguments)
    {
        return new static(...$arguments);
    }
}

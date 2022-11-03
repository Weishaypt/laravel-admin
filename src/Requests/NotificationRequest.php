<?php

namespace Encore\Admin\Requests;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Notifications\Notification;
use Encore\Admin\Resources\NotificationResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NotificationRequest extends Request
{
    /**
     * @return AnonymousResourceCollection
     */
    public function notifications()
    {
        return NotificationResource::collection(
            Notification::whereNotifiableId(Admin::user()->getKey())
                ->latest()
                ->take(100)
                ->get()
        );
    }

    public function unreadCount(): int
    {
        return Notification::unread()->whereNotifiableId(
            Admin::user()->getKey()
        )->count();
    }
}

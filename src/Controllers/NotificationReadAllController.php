<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Notifications\Notification;
use Encore\Admin\Requests\NotificationRequest;
use Illuminate\Routing\Controller;

class NotificationReadAllController extends Controller
{
    /**
     * Mark the given notification as read.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(NotificationRequest $request)
    {
        Notification::unread()->whereNotifiableId(Admin::user()->update(['read_at' => now()]));

        return response()->json();
    }
}

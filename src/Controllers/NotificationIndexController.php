<?php

namespace Encore\Admin\Controllers;

use Encore\Admin\Requests\NotificationRequest;
use Illuminate\Routing\Controller;

class NotificationIndexController extends Controller
{
    /**
     * Return the details for the Dashboard.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(NotificationRequest $request)
    {
        return response()->json([
            'notifications' => $request->notifications(),
            'unread' => $request->unreadCount() > 0,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function createNotify()
    {
        return [
            'swal_title' => 'Successfully created',
            'swal_icon' => 'success',
        ];
    }

    public function updateNotify()
    {
        return [
            'swal_title' => 'Successfully updated',
            'swal_icon' => 'success',
        ];
    }

    public function deleteNotify()
    {
        return [
            'swal_title' => 'Successfully deleted',
            'swal_icon' => 'success',
        ];
    }
}

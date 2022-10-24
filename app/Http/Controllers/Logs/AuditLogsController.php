<?php

namespace App\Http\Controllers\Logs;

use App\DataTables\Logs\AuditLogsDataTable;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

class AuditLogsController extends Controller
{


    public function index(AuditLogsDataTable $dataTable)
    {
        return $dataTable->render('pages.users.index');
    }


}

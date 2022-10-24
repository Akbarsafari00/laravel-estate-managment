<?php

namespace App\Http\Controllers\Estates\Logs;

use App\DataTables\Estates\Logs\AuditLogsDataTable;
use App\Http\Controllers\Estates\Controller;
use Spatie\Activitylog\Models\Activity;

class AuditLogsController extends Controller
{


    public function index(AuditLogsDataTable $dataTable)
    {
        return $dataTable->render('pages.users.index');
    }


}

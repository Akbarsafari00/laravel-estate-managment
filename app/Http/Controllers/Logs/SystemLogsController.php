<?php

namespace App\Http\Controllers\Estates\Logs;

use App\DataTables\Estates\Logs\SystemLogsDataTable;
use App\Http\Controllers\Estates\Controller;
use Jackiedo\LogReader\LogReader;

class SystemLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SystemLogsDataTable $dataTable)
    {
        return $dataTable->render('pages.log.system.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, LogReader $logReader)
    {
        return $logReader->find($id)->delete();
    }
}

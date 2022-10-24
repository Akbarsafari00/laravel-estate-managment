<?php

namespace App\DataTables\Estates;

use App\Models\EstateType;
use App\Models\User;
use Spatie\Activitylog\Models\Activity;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EstateTypesDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->rawColumns(['id', 'slug','title'])
            ->addColumn('action', function (EstateType $model) {
                return view('pages.estate-types._action-menu', compact('model'));
            });
    }


    public function query(EstateType $model)
    {
        return $model->newQuery();
    }


    public function html()
    {
        return $this->builder()
            ->setTableId('estate-type-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->language([
                "emptyTable" => "داده ای یافت نشد",
                "info" => "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                "infoEmpty" => "نمایش 0 تا 0 از 0 رکورد",
                "infoFiltered" => "(فیلتر شده از _MAX_ رکورد)",
                "search" => '',
                'searchPlaceholder' => "جستجو ..",
                "zeroRecords" => "اطلاعاتی یافت نشد",
                "paginate" => [
                    "first" => "ابتدا",
                    "last" => "انتها",
                    "next" => "بعدی",
                    "previous" => "قبلی",
                ]
            ])
            ->stateSave(true)
            ->autoWidth(true)
            ->buttons(
                Button::make('print'),
            )
            ->addTableClass('align-middle table-row-dashed fs-6 gy-5');
    }


    protected function getColumns()
    {
        return [

            Column::make('id')->title("شناسه"),
            Column::make('title')->title("نام نمایشی"),
            Column::make('slug')->title("نشانک"),
            Column::computed('action')->title("عملیات")
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('d-flex'),
        ];
    }


    protected function filename()
    {
        return 'EstateTypes_' . date('YmdHis');
    }
}

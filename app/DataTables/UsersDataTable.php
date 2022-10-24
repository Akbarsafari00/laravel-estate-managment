<?php

namespace App\DataTables;

use App\Models\User;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->rawColumns(['first_name', 'last_name', 'email','id'])
            ->editColumn('created_at', function (User $model) {
                return $model->created_at->format('d M, Y H:i:s');
            })
            ->addColumn('roles', function (User $model) {
                return view('pages.users._roles', compact('model'));

            })
            ->addColumn('action', function (User $model) {
                return view('pages.users._action-menu', compact('model'));
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('users-table')
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

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            Column::make('id')->title("شناسه"),
            Column::make('email')->title("ایمیل"),
            Column::make('first_name')->title("نام"),
            Column::make('last_name')->title("نام خانوادگی"),
            Column::make('created_at')->title("تاریخ ایجاد"),
            Column::computed('roles')->title("نقش کاربری"),
            Column::computed('action')->title("عملیات")
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('d-flex'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}

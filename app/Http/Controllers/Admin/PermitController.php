<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permit;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PermitController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $query = Permit::query()->where('approval_status', '=', 'AP1')->where('complete_status', '=', 'PENDING');

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle ms-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown"
                                        id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('permit-check', $item->id_permit) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item text-danger" href="' . route('permit-delete', $item->id_permit) . '">
                                        Hapus
                                    </a>
                                </div>

                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
                ;
        }

        return view('pages.permit.index');
    }

    public function indexDept()
    {
        if(request()->ajax())
        {
            $query = Permit::query();

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle ms-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown"
                                        id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('headDept-check', $item->id_permit) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item text-danger" href="' . route('permit-delete', $item->id_permit) . '">
                                        Hapus
                                    </a>
                                </div>

                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
                ;
        }

        return view('pages.permit.headDept');
    }

    public function indexInpg()
    {
        if(request()->ajax())
        {
            $query = Permit::query()->where('complete_status', '=', 'INPG');

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle ms-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown"
                                        id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('inpg-check', $item->id_permit) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('inpg-finish', $item->id_permit) . '">
                                        Pembayaran Selesai
                                    </a>
                                    <a class="dropdown-item text-danger" href="' . route('permit-delete', $item->id_permit) . '">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
                ;
        }

        return view('pages.permit.indexInpg');
    }

    public function indexClose()
    {
        if(request()->ajax())
        {
            $query = Permit::query()->where('complete_status', '=', 'CLOSE');

            return Datatables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle ms-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown"
                                        id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('inpg-check', $item->id_permit) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('inpg-finish', $item->id_permit) . '">
                                        Pembayaran Selesai
                                    </a>
                                    <a class="dropdown-item text-danger" href="' . route('permit-delete', $item->id_permit) . '">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
                ;
        }

        return view('pages.permit.indexFinish');
    }

    public function legalCheck($id)
    {
        $item = Permit::where('id_permit', $id)->firstOrFail();

        return view('pages.permit.detail', [
            'item' => $item
        ]);
    }

    public function inpgCheck($id)
    {
        $item = Permit::where('id_permit', $id)->firstOrFail();

        return view('pages.permit.proccess', [
            'item' => $item
        ]);
    }

    public function inpgFinish($id)
    {
        $item = Permit::where('id_permit', $id)->firstOrFail();

        return view('pages.permit.finish', [
            'item' => $item
        ]);
    }

    public function headDeptCheck($id)
    {
        $item = Permit::where('id_permit', $id)->firstOrFail();

        return view('pages.permit.approvalHead', [
            'item' => $item
        ]);
    }

    public function legalUpdate(Request $request)
    {
        $data = $request->except('_token');

        $item = Permit::where('id_permit', $data['id_permit']);

        $item->update($data);

        return redirect()->route('permit-index');
    }

    public function headDeptApprove(Request $request)
    {
        $data = $request->except('_token');

        $item = Permit::where('id_permit', $data['id_permit']);

        $item->update($data);

        return redirect()->route('headDept-index');
    }

    public function inpgUpdate(Request $request)
    {
        $data = $request->except('_token');

        $item = Permit::where('id_permit', $data['id_permit']);

        if($request->file('skpd'))
        $data['skpd'] = $request->file('skpd')->store('assets/user','public');

        $item->update($data);

        return redirect()->route('headDept-index');
    }

    public function inpgPost(Request $request)
    {
        $data = $request->except('_token');

        $item = Permit::where('id_permit', $data['id_permit']);

        $skpd = $request->file('skpd')->getClientOriginalName();
        $bukti1 = $request->file('bukti1')->getClientOriginalName();
        $bukti2 = $request->file('bukti2')->getClientOriginalName();

        if($request->file('skpd'))
        $data['skpd'] = $request->file('skpd')->storeAs('assets/user', $skpd ,'public');

        if($request->file('bukti1'))
        $data['bukti1'] = $request->file('bukti1')->storeAs('assets/user', $bukti1,'public');

        if($request->file('bukti2'))
        $data['bukti2'] = $request->file('bukti2')->storeAs('assets/user', $bukti2,'public');

        $item->update($data);

        return redirect()->route('inpg-index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

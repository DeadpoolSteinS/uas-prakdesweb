<?php

namespace App\Http\Controllers;

use App\Models\Taskmodel;
use App\Models\Grup;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    function getAllMyDay(Request $request){
        $userId =  $request->session()->get('id');
        $task = Taskmodel::where('MY_DAY', 1)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'My Day']);
    }

    function getAllTaskByGroup($id){
        $userId =  session()->get('id');
        $grups = Grup::all();
        $pageName = Grup::where('ID_GRUP', $id)->first();

        $task = Taskmodel::where('ID_GRUP', $id)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => $pageName->NAMA_GRUP, 'grups' => $grups]);
    }

    function getAllImportant(Request $request){
        $userId =  $request->session()->get('id');
        $task = Taskmodel::where('IMPORTANT', 1)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'Important']);
    }

    function getAllVeryUrgent(Request $request){
        $userId =  $request->session()->get('id');
        $task = Taskmodel::where('ID_KATEGORI', 1)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'Very Urgent']);
    }

    function getAllUrgent(Request $request){
        $userId =  $request->session()->get('id');
        $task = Taskmodel::where('ID_KATEGORI', 2)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'Urgent']);
    }

    function getAllNormal(Request $request){
        $userId =  $request->session()->get('id');
        $task = Taskmodel::where('ID_KATEGORI', 3)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'Normal']);
    }

    function getAllTommorow(Request $request){
        $carbon = new Carbon();
        $userId =  $request->session()->get('id');
        $besok = $carbon->addDays(1)->toDateString();
        $task = Taskmodel::where('DEADLINE', '=', $besok)
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'Tommorow']);
    }

    function getAllThisWeek(Request $request){
        $userId =  $request->session()->get('id');
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);
        $task = Taskmodel::whereBetween('DEADLINE', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'This Week']);
    }

    function getAllThisMonth(Request $request){
        $userId =  $request->session()->get('id');
        $task = Taskmodel::whereMonth('DEADLINE', '=', date('m'))
                ->where('ID_USER', $userId)
                ->get();
        
        $now = date('d-m-y h:i:s');
        return view('page.home', ['tasks' => $task, 'now' => $now, 'pageName' => 'This Month']);
    }

    function addTask(Request $request){

        Taskmodel::create([
            'NAMA_TASK' => $request->judul,
            'ID_KATEGORI' => $request->kategori,
            'TEMPAT_PENGUMPULAN' => $request->tempat_pengumpulan,
            'DEADLINE' => $request->deadline,
            'ID_USER' => $request->session()->get('id')[0],
            'ID_KATEGORI' => $request->kategori,
            'ID_GRUP' => $request->group,
            'NOTE' => $request->catatan
        ]);

        session()->flash('message','Errorrrrr');

        return redirect('/home');
    }

    function readTask(Request $request){
        $grups = Grup::all();
        $userId =  $request->session()->get('id');
        $tasks = Taskmodel::where('ID_USER', $userId)->get();
        $now = date('d-m-y h:i:s');

        return view('page.home', ['tasks'=>$tasks, 'now' => $now, 'pageName' => 'Semua Task', 'grups' => $grups]); 
    }

    function deleteTask($ID_TASK){
        $success = Taskmodel::where('ID_TASK', $ID_TASK)->delete();

        if ($success) {
            return redirect('/home');
        }
    }

    function updateStatus(Request $request){
        // $now = date('d-m-y h:i:s');

        $now = date('Y-m-d h:i:s');

        // dd($now);
        

        if ($request->DEADLINE <= $now) {
            $success = Taskmodel::where('ID_TASK', $request->ID_TASK)
                ->update(['ID_STATUS' => $request['update-status']]);
        } else {
            //Jika task sudah terlewat
            // date_add($now, date_interval_create_from_date_string('7 days'));
            $success = Taskmodel::where('ID_TASK', $request->ID_TASK)
                ->update(['ID_STATUS' => $request['update-status'], 'DEADLINE' => $now]);

        }

        if ($success) {
            return redirect('home');
        }
    }

    function addToMyDay($id){
        $success = Taskmodel::where('ID_TASK', $id)
                ->update(['MY_DAY' => 1]);

        if ($success) {
            return redirect('home');
        }
    }

    function updateTask(Request $request){
        $success = Taskmodel::where('ID_TASK', $request->ID_TASK)
            ->update(['NAMA_TASK' => $request->NAMA_TASK])
            ->update(['DEADLINE' => $request->DEADLINE]);

        if ($success) {
            return redirect('/home');
        }
    }
}

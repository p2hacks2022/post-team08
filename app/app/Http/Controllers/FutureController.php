<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Diary;
use App\Models\User;

class FutureController extends BaseController
{
  public function index()
  {
      return view('hello.index');
  }
  /**
  * フォーム画面
  *
  */
 public function add(Request $req)
 {
     $data = [
         'msg'  => 'お名前を入力してください',
     ];

     return view('hello.add', $data);
 }

public function get_diaries(Request $req)
 {
     $diaries1 = Diary::all();
     $diary1 = Diary::find(4);
     $diary2 = Diary::find(8);
     $diary3 = Diary::find(21);
    return view('getmail', compact('diary1','diary2', 'diary3'));
 }

 public function get_mail(Request $req)
 {
    $diaries1 = Diary::all();
    $diary1 = Diary::find(4);
    $diary2 = Diary::find(8);
    $diary3 = Diary::find(21);
   return view('future', compact('diary1','diary2', 'diary3'));
 }

 public function get_my_diary(Request $req)
 {
    $diary = Diary::find(20);
    return view('starpulldown', compact('diary'));
 }

 public function get_diary($number)
 {
  $diaries = Diary::find($number);
  return $diaries;
 }


 public function get_users(Request $req)
 {
     $userss = User::all();
    return view('hello.add', compact('user'));
 }

public function update_star(Request $request, int $diary_id){
    $diary = Diary::find($diary_id);
    $diary->star += 1;
    //他のカラムも入れ直さないといけないかも

     //下のfind(1)直し必要かと思う
     $pre_user = User::find(1);
     $user = new User();
     $user->user_id = $pre_user->user_id;
     $user->my_diary_id = $pre_user->my_diary_id;
     $user->other_diary_id = $pre_user->id;
     $user->other_star_id = $diary_id;
     $user->save();

     return view('index');
  }

  public function sample_update_star(){
     return view('index');
  }

  public function update_flag(Request $request, int $diary_id){
    $diary = Diary::find($diary_id);

    $diary->diary_flag = 1;
    //他のカラムも入れ直さないといけないかも
  }


 /**
  * 結果画面
  *
  */
 public function post(Request $req)
 {
     $post = new Diary();
     $post->diary_txt = $req->message;
     $post->star = 0;
     $post->diary_flag = 0;
     $post->diary_time = $req->date;
     $post->save();
     //下のfind(1)直し必要かと思う
     $pre_user = User::find(1);
     $user = new User();
     $user->user_id = $pre_user->user_id;
     $user->my_diary_id = $pre_user->my_diary_id;
     $user->other_diary_id = $post->id;
     $user->other_star_id = $pre_user->other_star_id;
     $user->save();


     $id = 2 ;
     $items = Diary::find($id);

    //  get_mailメソッドを呼び出す
    $diary = $this->get_diary(1);
    $diary2 = $this->get_diary(6);
    $diary3 = $this->get_diary(7);
    $diary4 = $this->get_diary(8);
    return view('getmail', compact('diary', 'diary2','diary3','diary4'));
 }
}


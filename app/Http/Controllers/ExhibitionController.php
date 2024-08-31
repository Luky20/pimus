<?php

namespace App\Http\Controllers;

use App\CompetitionCategory;
use App\Submission;
use App\Team;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class ExhibitionController extends Controller
{
    public function index($idlomba)
    {
        $viewable = [6];
        $cabang = CompetitionCategory::find($idlomba);
        if (in_array($idlomba, $viewable)) {
            
            $posters =  DB::table('posters')
                        ->select('posters.id as posters_id','posters.judul as judul', 'posters.path as path', 'posters.teams_id', 'user_details.nrp', 'users.name')
                        ->join('user_details','user_details.teams_id','=','posters.teams_id')
                        ->join('users','user_details.nrp','=','users.nrp')
                        ->where('user_details.role','=','Ketua')
                        ->get();

            $likes = [];
            foreach($posters as $poster){
                $like  = DB::table('votes')
                            ->select(DB::raw("count(posters_id) as count"))
                            ->where('posters_id','=',$poster->posters_id)
                            ->first();  
                              
                $like = $like->count;
                $likes[] = $like;
                
            }
 
            return view('exhibition', [
                'posters' => $posters,
                'likes' => $likes,
            ]);
        } else {
            abort(403, "$idlomba tidak memiliki Exhibition");
        }
    }

    public function vote(Request $request)
    {
        $msg = '';
        $status = 0;
        $id = $request->idPoster;
        if(!Auth::user()->nrp){
            return response()->json(array([
                'msg' => 'Silahkan login terlebih dahulu',
                'status' => $status,
            ]), 200);
        }
        $userID = (string)Auth::user()->nrp;
        
        
            if (Auth::user()->email_verified_at != null) {

                $tikets = Auth::user()->vote_tickets;
                $vote =  DB::table('votes')
                    ->select('users_id', 'posters_id')
                    ->where('users_id','=', $userID)
                    ->where('posters_id', '=', $id)
                    ->get();
                if($vote->isEmpty()){
                    if ($tikets > 0) {
                        $decreaseTickets = DB::table('users')
                            ->where('nrp', (string)Auth::user()->nrp)
                            ->update([
                                'vote_tickets' => $tikets - 1
                            ]);
                        if ($decreaseTickets == true) {
                            DB::table('votes')->insert([
                                'posters_id' => $id,
                                'users_id' => $userID
                            ]);
                        }
                        else {
                            DB::table('users')
                            ->where('nrp', (string)Auth::user()->nrp)
                            ->update([
                                'vote_tickets' => $tikets
                            ]);

                            throw new Exception("Error decrease tickets");
                        }
                        $status = 1;
                        $msg = "Vote berhasil";

                    }else{
                        $msg = "Mohon maaf kesempatan vote anda telah habis, Terima Kasih telah melakukan vote";
                    }
                }else{
                    $msg = "Mohon maaf anda sudah melakukan vote pada poster ini, Terima Kasih telah melakukan vote";
                }
            }else{
                $msg = "Anda masih belum melakukan verifikasi, mohon segera lakukan verifikasi";
            }
        return response()->json(array([
            'msg' => $msg,
            'status' => $status,
        ]), 200);
    }
}

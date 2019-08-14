<?php

namespace App;

use DB;
use Auth;
use App\Scopes\BelongsToClientScope;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public static function create( $post_data )
    {
        dd($post_data);
        $result = DB::table('user')
            ->insert(
                array(
                    'fname'         => $post_data['fname'],
                    'lname'         => $post_data['lname'],
                    'mobile'        => $post_data['mobile'],
                    'email'         => $post_data['email'],
                    'occupation'    => $post_data['occupation'],
                    'hmo'           => $post_data['hmo']
                )
            $user_id = DB::getPdo()->lastInsertId();
        $appointment = DB::table('appointment') 
            ->insert(
                array(
                    'patient_id' => $user_id,
                    'procedure'  => $post_data['procedure'],
                    'option1'    => $post_data['option1'],
                    'option2'    => $post_data['option2'],
                    'option3'    => $post_data['option3'],
                    'location'   => $post_data['location']
                )
            );
        return $result;
    }

    // public static function readPatient()
    // {
    //     $result = DB::table('user')
    //         ->select('*')
    //         ->where('id', '=', Auth::user()->id)
    //         ->get();

    //     return $result;
    // }

    // public static function getPatient( $post_data )
    // {
    //     $result = DB::table('user')
    //         ->select('*')
    //         ->where('id', '=', $post_data['id'])
    //         ->get();
    //     return $result;
    // }

    // public static function updatePatient ( $post_data )
    // {
    //     $result = DB::table('user')
    //         ->where('id', '=', $post_data['id'])
    //         ->update(
    //             array(
    //                 'fname'         => $post_data['fname'],
    //                 'lname'         => $post_data['lname'],
    //                 'mobile'        => $post_data['mobile'],
    //                 'email'         => $post_data['email'],
    //                 'occupation'    => $post_data['occupation'],
    //                 'hmo'           => $post_data['hmo'],
    //                 'updated_by'      => Auth::user()->id
    //             )
    //         );
    //     return $result;
    // }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    const UPDATED_AT=null;
    protected $table='message';
    public function message_add($data){
        return $this->insert($data);
    }
    public function message_list(){
        return $this->get();
    }
    public function message_delete($id){
        return $this->where('u_id',$id)->delete();
    }
    public function message_save($where,$info){
        return $this->where($where)->update($info);
    }
    public function message_get($where){
        return $this->where($where)->first();
    }
    public function message_find($where){
        return $this->where($where)->orderBy('msg_time', 'desc')->first();
    }
}

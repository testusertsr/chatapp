<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class handler implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $sender;
    public $msg;
    public $reciver;
    public $time;
    public $id;
    public $dd;
    public $user_id;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, $msg, $reciver, $time, $id, $dd, $user_id)
    {
        $this->sender = $name;
        $this->msg = $msg;
        $this->reciver = $reciver;
        $this->time = $time;
        $this->id = $id;
        $this->dd = $dd;
        $this->user_id = $user_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chat');
    }
    public function broadcastAs()
    {
        return 'msg';
    }
}

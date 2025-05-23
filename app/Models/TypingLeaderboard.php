<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypingLeaderboard extends Model
{
    /** @use HasFactory<\Database\Factories\TypingLeaderboardFactory> */
    use HasFactory;
    protected $fillable = ['user_id', 'difficulty','WPM', 'accuracy', 'completion_time'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

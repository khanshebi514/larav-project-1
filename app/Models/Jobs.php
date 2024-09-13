<?php
namespace App\Models; // Correct namespace
use Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Jobs extends Model{
    use HasFactory;
    protected $table = "jobs_listing";
    protected $fillable = ['title','salary', 'employer_id'];

    public function employer(){

        return $this->belongsTo(Employer::class);
 }

 public function tags(){
    return $this->belongsToMany(Tags::class, foreignPivotKey:'jobs_listing_id');
 }
}
?>
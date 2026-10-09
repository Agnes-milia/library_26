<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['book_id', 'hardcover', "publication", "status"])]
class Copy extends Model
{
    /** @use HasFactory<\Database\Factories\CopyFactory> */
    use HasFactory;
}

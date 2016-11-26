<?php

Route::get('/activity_branches', function(){
    return response()->json( \Urameshibr\Models\ActivityBranch::all() );
});
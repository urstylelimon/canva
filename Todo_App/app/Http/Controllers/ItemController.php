<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $query = $request->query('query');
    $perPage = $request->query('perPage', 3); 

    $items = Item::query();

    if ($query) {
        $items = $items->where('name', 'like', "%{$query}%");
    }

    return $items->orderBy('created_at', 'DESC')->paginate($perPage);
}

    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newItem = new Item;
        $newItem ->name = $request->item['name'];
        $newItem->save();

        return $newItem;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'completed' => 'required|boolean'  
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400); 
        }

        try {
            $item = Item::findOrFail($id); 
            $item->completed = $request->completed;
            $item->save();

            return response()->json(['message' => 'Item updated successfully'], 200);
        } catch (\Exception $e) {
            Log::error("Error updating item with ID {$id}: {$e->getMessage()}");
            return response()->json(['error' => 'Server error occurred'], 500);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    //  -----------------------------------------------------------------------
    public function destroy($id)
    {
         $existingItem=Item::find($id);
         if($existingItem){
            $existingItem->delete();
            return"Item Deleted Successfully";
         }
          return"Item not found";
    }
//     public function destroy($id)
// {
//     $existingItem = Item::find($id);
//     if ($existingItem) {
//         $existingItem->delete();
//         return response()->json(['message' => 'Item deleted successfully '], 200);
//     }
//     return response()->json(['error' => 'Item not found'], 404);
// }

   
    
    
}

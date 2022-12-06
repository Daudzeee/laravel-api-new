<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
	//Store Data
	public function storeItem(ItemRequest $request)
	{
		$inventory= Inventory::create($request->all());
		return response()->json(['message' => "Item Inserted Successfully",'data' => $inventory]);
	}

     //Update Data
	public function updateItem(ItemRequest $request,Inventory $inventory)
	{
		$inventory->update($request->all());
		return response()->json(['message' => "Item Updated Successfully",'data' => $inventory]);
	}

	//Get Data
	public function getItem($id=null)
	{
		return $id? Inventory::find($id): Inventory::all();
	}

	//Delete Data
	public function deleteItem(Inventory $inventory)
	{
		$inventory->delete();
		return response()->json(['message'=>" Item Deleted Successfully"]);
	}
}

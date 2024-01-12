<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\FamilyHead;
use App\Models\FamilyMember;
use Illuminate\Support\Facades\DB;

class FamilyHeadController extends Controller
{
    public function index()
    {   
        $familyHead = FamilyHead::latest()->paginate(2);
        // dd($familyHead);
        $familyHeadsWithCounts = FamilyHead::withCount('familyMembers')
        ->has('familyMembers') // Only include family heads with at least one member
        ->latest()
        ->get();

        return view('family.head.list', ['familyHead' => $familyHead, 'familyHeadsCounts'=>$familyHeadsWithCounts]);
    }

    public function create()
    {
          $states = DB::table('states')->select('id', 'state')->get();

          return view('family.head.create', compact('states'));
    }

    public function cityId($id)
    {
     
        $cities = DB::table('cities')->select('cities')->where('state_id', $id)->get();

        foreach ($cities as $city) {
           echo "<option value='$city->cities'>".ucwords($city->cities)."</option>";
        }

    }


    public function store(Request $request)
    {
        $request->validate([
            'head_name' => 'required',
            'head_surname' => 'required',
            'head_birthdate' => 'required',
            'head_mobile' => 'required|numeric',
            'head_address' => 'required',
            'head_state' => 'required',
            'head_city' => 'required',
            'head_pincode' => 'required',
            'marital_status' => 'required',
            'hidden_hobbies' => 'required',
            'head_photo' => 'required|mimes:jpeg,jpg,png,gif,webp|max:1000'
        ]);


        // Upload Image
        $file = $request->file('head_photo');

        if($file){
            $imageName = time() . '.' . $file->extension();

            $request->head_photo->move(public_path('assets/images'), $imageName);
        }else{
            die('There is no file !');
        }

        // Save data to the database
        $familyHead = new FamilyHead();
        $familyHead->head_name = $request->head_name;
        $familyHead->head_surname = $request->head_surname;
        $familyHead->head_birthdate = $request->head_birthdate;
        $familyHead->head_mobile = $request->head_mobile;
        $familyHead->head_address = $request->head_address;
        $familyHead->head_state = $request->head_state;
        $familyHead->head_city = $request->head_city;
        $familyHead->head_pincode = $request->head_pincode;
        $familyHead->marital_status = $request->marital_status;
        $familyHead->wedding_date = $request->wedding_date;
        $familyHead->hobbies = $request->hidden_hobbies;
        $familyHead->head_photo = $imageName; // Save the image name in the database
            
        if($familyHead->save()){
            return redirect()->route('family.head.create')->with('success', 'Operation successful!');
        }else{
            return redirect()->route('family.head.create')->withErrors($validator);
        }



    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FamilyMember;

class FamilyMemberController extends Controller
{

    public function index($id)
    {   

        $familyMember = FamilyMember::where('family_id', $id)->get();
        return view('family.member.list', ['familyMember' => $familyMember, 'family_id' => $id]);
    }

     public function create($id)
     {
          return view('family.member.create', ['id' => $id]);
     }


    public function store(Request $request)
    {

        $request->validate([
            'member_name' => 'required',
            'member_birthdate' => 'required',
            'marital_status' => 'required',
            'education' => 'required',
            'member_photo' => 'required|mimes:jpeg,jpg,png,gif,webp|max:1000'
        ]);

        // Upload Image
        $file = $request->file('member_photo');



        if($file){
            $imageName = time() . '.' . $file->extension();

            $request->member_photo->move(public_path('assets/images/member'), $imageName);
        }else{
            die('There is no file !');
        }



        // Save data to the database
        $familyMember = new FamilyMember();
        $familyMember->family_id = $request->family_id;
        $familyMember->member_name = $request->member_name;
        $familyMember->member_birthdate = $request->member_birthdate;
        $familyMember->member_marital_status = $request->marital_status;
        $familyMember->member_wedding_date = $request->member_wedding_date;
        $familyMember->education = $request->education;
        $familyMember->member_photo = $imageName; // Save the image name in the database
        

        $family_id = $request->family_id;

        if($familyMember->save()){
            return redirect()->route('family.member.create', ['id' => $family_id])->with('success', 'Operation successful!');
        }else{
            return redirect()->route('family.member.create', ['id' => $family_id])->withErrors($validator);
        }



    }


}

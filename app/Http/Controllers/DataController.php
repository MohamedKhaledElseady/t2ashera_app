<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDataRequest;
use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::all();

        return view('Form.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->hasFile('passport_image') && $request->hasFile('profile_image') && $request->hasFile('last_reachToEgypt_image')) {

            $passport_image = $request->file('passport_image')->store('uploads/passports', 'public');

            $profile_image = $request->file('profile_image')->store('uploads/profile_images', 'public');

            $last_reachToEgypt_image = $request->file('last_reachToEgypt_image')->store('uploads/last_time_to_reach_egypt_image', 'public');

        }else{
            $errors = [];

            if (!$request->hasFile('passport_image')) {
                $errors['passport_image'] = ['The passport image field is required.'];
            }

            if (!$request->hasFile('profile_image')) {
                $errors['profile_image'] = ['The profile image field is required.'];
            }

            return redirect()->back()->withErrors($errors);
        }


        $data = Data::create([
            'passport_image' => $passport_image,
            'profile_image' => $profile_image,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'second_name' => $request->second_name,
            'middle_name' => $request->middle_name,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'country' => $request->country,
            'passport_number' => $request->passport_number,
            'passport_type' => $request->passport_type,
            'passport_date' => $request->passport_date,
            'passport_expire_date' => $request->passport_expire_date,
            'passport_issue_place' => $request->passport_issue_place,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'emergency_contact_name' => $request->emergency_contact_name,
            'emergency_contact_country' => $request->emergency_contact_country,
            'emergency_contact_city' => $request->emergency_contact_city,
            'emergency_contact_address' => $request->emergency_contact_address,
            'emergency_contact_email' => $request->emergency_contact_email,
            'emergency_contact_home_phone' => $request->emergency_contact_home_phone,
            'emergency_contact_mobile_phone' => $request->emergency_contact_mobile_phone,
            'emergency_contact_postal_code' => $request->emergency_contact_postal_code,
            'emergency_contact_postal_box' => $request->emergency_contact_postal_box,
            'notification_language' => $request->notification_language,
            'profession' => $request->profession,
            'currnet_job_title' => $request->currnet_job_title,
            'entry_type' => $request->entry_type,
            'entry_port' => $request->entry_port,
            'entry_date' => $request->entry_date,
            'last_coming_date_to_egypt' => $request->last_coming_date_to_egypt,
            'last_coming_country_from' => $request->last_coming_country_from,
            'cause_of_visiting' => $request->cause_of_visiting,
            'friend_address' => $request->friend_address,
            'friend_phone' => $request->friend_phone,
            'number_of_visits' => $request->number_of_visits,
            'security_problem' => $request->security_problem,
            'last_reachToEgypt_image' => $last_reachToEgypt_image,

            ]);

        return redirect()
            ->back()
            ->with('success', 'Data saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function showDetails(Data $data)
    {

        return view('Form.details', compact('data'));
    }

    public function showForm()
    {
        return view('Form.form');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        //
    }


    public function acceptRequest(Request $request , Data $data)
    {

        // Update the status to approved
        $data->status = Data::STATUS_APPROVED;

        // Update the is rejected value
        $data->is_rejected = Data::REQUEST_APPROVED ;

        // Save the changes
        $data->save();

        return redirect()
            ->route('data.index')
            ->with('Message', 'Request accepted successfully');
    }

    public function rejectRequest(Data $data)
    {

        /// make the sataus append
        $data->status = Data::STATUS_REJECTED;

        /// Is_Rejected equal to true
        $data->is_rejected = Data::REQUEST_REJECTED ;

        $data->save();

        return redirect()->route('data.index')->with('Reject', 'Request rejected');
    }


}

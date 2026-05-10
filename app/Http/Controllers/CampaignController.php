<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    // READ
    public function index()
    {
        $campaigns = Campaign::all();

        return view('campaign.index', compact('campaigns'));
    }

    // CREATE FORM
    public function create()
    {
        return view('campaign.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        Campaign::create([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign');
    }

    // EDIT FORM
    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaign.edit', compact('campaign'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->update([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign');
    }

    // DELETE DATA
    public function destroy($id)
    {
        Campaign::destroy($id);

        return redirect('/campaign');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaigns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_donation' => 'required|integer|min:0',
            'collected_donation' => 'nullable|integer|min:0',
            'deadline' => 'required|date',
            'bank_name' => 'nullable|string|max:255',
            'account_number' => 'nullable|string|max:50',
            'account_holder' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'categories.*' => 'integer|exists:categories,id',
        ]);

        $campaign = Campaign::create($data);

        if (!empty($data['bank_name']) || !empty($data['account_number']) || !empty($data['account_holder'])) {
            $campaign->account()->create([
                'bank_name' => $data['bank_name'] ?? null,
                'account_number' => $data['account_number'] ?? null,
                'account_holder' => $data['account_holder'] ?? null,
            ]);
        }

        if (!empty($data['categories'])) {
            $campaign->categories()->attach($data['categories']);
        }

        return redirect()->route('campaigns.index')->with('success', 'Data berhasil di tambah.');
    }

    public function show(Campaign $campaign)
    {
        return view('campaigns.show', compact('campaign'));
    }

    public function edit(Campaign $campaign)
    {
        return view('campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, Campaign $campaign)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'target_donation' => 'required|integer|min:0',
            'collected_donation' => 'nullable|integer|min:0',
            'deadline' => 'required|date',
            'bank_name' => 'nullable|string|max:255',
            'account_number' => 'nullable|string|max:50',
            'account_holder' => 'nullable|string|max:255',
            'categories' => 'nullable|array',
            'categories.*' => 'integer|exists:categories,id',
        ]);

        $campaign->update($data);

        // Update or create account info
        if (!empty($data['bank_name']) || !empty($data['account_number']) || !empty($data['account_holder'])) {
            if ($campaign->account) {
                $campaign->account->update([
                    'bank_name' => $data['bank_name'] ?? null,
                    'account_number' => $data['account_number'] ?? null,
                    'account_holder' => $data['account_holder'] ?? null,
                ]);
            } else {
                $campaign->account()->create([
                    'bank_name' => $data['bank_name'] ?? null,
                    'account_number' => $data['account_number'] ?? null,
                    'account_holder' => $data['account_holder'] ?? null,
                ]);
            }
        } else {
            // If account fields cleared, delete existing account
            if ($campaign->account) {
                $campaign->account->delete();
            }
        }

        // Sync categories
        if (!empty($data['categories'])) {
            $campaign->categories()->sync($data['categories']);
        } else {
            $campaign->categories()->detach();
        }

        return redirect()->route('campaigns.index')->with('success', 'Campaign berhasil diperbarui.');
    }

    public function destroy(Campaign $campaign)
    {
        $campaign->delete();

        return redirect()->route('campaigns.index')->with('success', 'Data berhasil di hapus.');
    }

    
}
<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamController extends Controller
{
    /**
     * Display the full team directory.
     */
    public function index(Request $request): View
    {
        $search = $request->query('search');

        $team = TeamMember::active()
            ->when($search, fn ($q) => $q->search($search))
            ->ordered()
            ->get();

        return view('pages.team', [
            'team' => $team,
            'search' => $search,
        ]);
    }

    /**
     * Display a single team member's dedicated profile page.
     */
    public function show(string $slug): View
    {
        $member = TeamMember::active()
            ->where('slug', $slug)
            ->first();

        if (! $member && is_numeric($slug)) {
            $member = TeamMember::active()->find($slug);
        }

        if (! $member) {
            abort(404);
        }

        $otherMembers = TeamMember::active()
            ->where('id', '!=', $member->id)
            ->ordered()
            ->take(3)
            ->get();

        return view('pages.team.show', [
            'member' => $member,
            'otherMembers' => $otherMembers,
        ]);
    }
}

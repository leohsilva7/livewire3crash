<?php

namespace App\Livewire;

use App\Models\Bookmark;
use App\Notifications\AnnoyUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Bookmarks extends Component
{
    public string $name = '';
    public string $url = '';
    public function save()
    {
        Bookmark::create([
            'name' => $this->name,
            'url' => $this->url,
            'user_id' => Auth::user()->id,
        ]);
    }
    public function sendNotification()
    {
        sleep(2);
        Auth::user()->notify(new AnnoyUser());
    }
    public function delete($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        $this->authorize('delete', $bookmark);
        $bookmark->delete();
    }
    public function mount()
    {
        Auth::loginUsingId(2);
    }
    public function render()
    {
        return view('livewire.bookmarks', [
            'bookmarks' => Auth::user()->bookmarks,
        ]);
    }
}

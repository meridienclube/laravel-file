<?php

namespace ConfrariaWeb\File\Listeners;

use Illuminate\Support\Facades\Storage;

class UploadFileListener
{

    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        $dir = $event->obj->getTable() . '/' . $event->obj->id;
        if (isset(request()->file) && is_array(request()->file)) {
            foreach (request()->file as $file_k => $file_v) {
                $this->upload($event, $dir, $file_k, $file_v);
            }
        }
    }

    protected function upload($event, $path, $local, $file)
    {
        $filename = md5(time()) . '.' . $file->extension();
        $local_file = isset($local) ? $path . '/' . $local : $path;
        $putFileAs = Storage::disk('public')->putFileAs($local_file, $file, $filename);
        $event->obj->files()->create([
            'url' => $putFileAs
        ]);
    }
}

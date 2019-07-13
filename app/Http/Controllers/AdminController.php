<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Save images
     * @param $file
     * @param null $old
     * @return string
     */
    public function saveImage($file, $old = null)
    {
        $filename = md5(time()) . '.' . $file->getClientOriginalExtension();
        Image::make($file->getRealPath())->save(public_path('files/'. $filename));

        if ($old) {
            @unlink(public_path('files/' .$old));
        }
        return $filename;
    }

    public function export($content)
    {

        $modelClass = '\\App\\' . ucfirst(str_singular($content));
        $contents = $modelClass::latest('created_at');

        if (request()->input('from_date')) {
            $contents = $contents->where('created_at', '>', urldecode(request()->input('from_date')).' 00:00:00');
        }

        if (request()->input('to_date')) {
            $contents = $contents->where('created_at', '<', urldecode(request()->input('to_date')).' 23:59:59');
        }

        $contents = $contents->get();

        $filename = storage_path('logs/'. $content.'_'.uniqid(time()).'xls');

        Excel::create($filename, function($excel) use($contents) {

            $excel->sheet('Export', function($sheet) use($contents) {
                $sheet->fromArray($contents);

            });

        })->download('xls');
    }
}

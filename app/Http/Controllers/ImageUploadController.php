<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\File;
use App\Dokumen;
use Intervention\Image\ImageManagerStatic as Image;

class ImageUploadController extends Controller
{
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
            
    //     ]);
    // }

  public function upload(Request $request){

    $this->validate($request, [
      // check validtion for image or file
          'file' => 'required|image|mimes:jpg,png,jpeg,gif,pdf|max:2000',  
        ]);

    if($request->hasFile('file')){
      $request->file('file');
      $extension = $request->file->getClientOriginalExtension();
      $filename = $request->file->getClientOriginalName();
      $filesize = $request->file->getClientSize();

      
      //$request->file->move('uploads', $filename);
      $request->file->storeAs('public/uploads/dp', $request->user()->id.'.'.$extension);

      $file = new File;

      $file->id = Auth::id();
      $file->user_id = Auth::id();
      $file->profile = $request->user()->id.'.'.$extension;
      $file->size = $filesize;
      $file->save();
      
      return redirect('spm');
    }
  }

  

  public function doc(Request $request){

    $this->validate($request, [
      // check validtion for image or file
            'filespm' => 'required|image|mimes:jpg,png,jpeg,gif,pdf|max:2000',
            'filekp' => 'required|image|mimes:jpg,png,jpeg,gif,pdf|max:2000',
            'filesb' => 'required|image|mimes:jpg,png,jpeg,gif,pdf|max:2000',
        ]);


      $file = new Dokumen;
      $file->id = Auth::id();

          if($request->hasFile('filespm')){
            $request->file('filespm');
            $extension = $request->file('filespm')->getClientOriginalExtension();
            $request->file('filespm')->storeAs('public/uploads/spm', $request->user()->ic.'.'.$extension);

             $file->spm = $request->user()->ic.'.'.$extension;
          }

          if($request->hasFile('filekp')){
            $request->file('filekp');
            $extension = $request->file('filekp')->getClientOriginalExtension();
            $request->file('filekp')->storeAs('public/uploads/kadpengenalan', $request->user()->ic.'.'.$extension);

            $file->kadpengenalan = $request->user()->ic.'.'.$extension;
          }

          if($request->hasFile('filesb')){
            $request->file('filesb');
            $extension = $request->file('filesb')->getClientOriginalExtension();
            $request->file('filesb')->storeAs('public/uploads/suratberanak', $request->user()->ic.'.'.$extension);

            $file->suratberanak = $request->user()->ic.'.'.$extension;
          }

      $file->save();
      
      return redirect('profile');
    
  }
}

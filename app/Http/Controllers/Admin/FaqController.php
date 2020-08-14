<?php

namespace App\Http\Controllers\Admin;

use App\Model\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:faq-list', ['only' => ['index']]);
        $this->middleware('permission:faq-create', ['only' => ['create','store']]);
        $this->middleware('permission:faq-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:faq-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $faqs = Faq::translatedIn('ru')->paginate(15);
        return view('admin.faq.index',compact('faqs'));
    }

    public function create(){return view('admin.faq.create');}

    public function store(Request $request)
    {
        $this->validate($request, Faq::$rules);
        $faq = new Faq();
        $faq->fill($request->except(['_token']));
        $faq->save();
        return redirect()->route('faq.index')->with('success','Faq created successfully');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.update',compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Faq::$rules);
        $faq = Faq::findOrFail($id);
        $faq->fill($request->except(['_token', '_method']));
        $faq->save();
        return redirect()->route('faq.index')->with('success','Faq updated successfully');
    }

    public function show($id){}

    public function destroy($id)
    {
        $data = Faq::findOrFail($id);
        $data->delete();
    }
}
